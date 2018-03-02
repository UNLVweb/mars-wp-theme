<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}

?>

<div id="comments" class="comments-area">

  <?php
  // You can start editing here -- including this comment!
  if ( have_comments() ) : ?>
    <div class="card card-block">
    <h4 class="card-title">
      <?php
      $comments_number = get_comments_number();
      if ( '1' === $comments_number ) {
        /* translators: %s: post title */
        printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'mars' ), get_the_title() );
      } else {
        printf(
          /* translators: 1: number of comments, 2: post title */
          _nx(
            '%1$s Reply to &ldquo;%2$s&rdquo;',
            '%1$s Replies to &ldquo;%2$s&rdquo;',
            $comments_number,
            'comments title',
            'mars'
          ),
          number_format_i18n( $comments_number ),
          get_the_title()
        );
      }
      ?>
    </h4>

    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'avatar_size' => 0,
          'style'       => 'ol',
          'short_ping'  => true,
          'reply_text'  => __( 'Reply', 'mars' ),
        ) );
      ?>
    </ol>

    <?php the_comments_pagination( array(
      'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'mars' ) . '</span>',
      'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'mars' ) . '</span>',
    ) );

    echo '</div>';

  endif; // Check for have_comments().

  // If comments are closed and there are comments, let's leave a little note, shall we?
  if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

    <p class="no-comments"><?php _e( 'Comments are closed.', 'mars' ); ?></p>
  <?php
  endif;

 $comments_args = array(
                  'class_form' => 'form',
                  'class_submit' => 'btn btn-default',
                  // Change the title of send button 
                  'label_submit' => __( 'Send', 'mars' ),
                  // Change the title of the reply section
                  'title_reply_before' => '<h4 class="card-title">',
                  'title_reply' => __( 'Write a Reply or Comment', 'mars' ),
                  'title_reply_after' => '</h4>',
                  // Remove "Text or HTML to be displayed after the set of comment fields".
                  // Redefine your own textarea (the comment body).
                  'comment_field' => '
                    <div class="form-group">
                      <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
                      <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                    </div>',
                  'fields' => array(
                    'author' => '<div class="form-group"><label for="author">Name <span class="required">*</span></label> <input id="author" class="form-control" name="author" value="" size="30" maxlength="245" aria-required="true" required="required" type="text"></div>',
                    'email' => '<div class="form-group"><label for="email">Email <span class="required">*</span></label> <input id="email" class="form-control" name="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required" type="text"></div>',
                    'url' => '<div class="form-group"><label for="url">Website</label> <input id="url" name="url" value="" size="30" maxlength="200" type="text" class="form-control"></div>',
                  ),
                );


                echo '<div class="card card-block">';
                  comment_form( $comments_args );
                echo '</div>';

  ?>

</div><!-- #comments -->
