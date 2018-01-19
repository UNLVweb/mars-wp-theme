 $(function() {
      //Menu Button Click handler
      $('#menu-button').click(function (e)
      {
        $('#navigation').toggle('fast');    
        $('#modal-menu-overlay').fadeToggle('fast');  
        //}
        
      }); //end click handler

      //Search Button Click handler
      $('#search-button').click(function (e)
      { 
        //if($('#search').css('display') == 'none')
        $('#search').toggle('fast');  
        $('#modal-menu-overlay').fadeToggle('fast');  
          
      }); //end click handler

      //Overlay Click handler
      $('#modal-menu-overlay').click(function (e)
      { 
        //if($('#search').css('display') == 'none')
        $('#navigation').hide('fast');  
        $('#search').hide('fast');  
        $('#modal-menu-overlay').fadeToggle('fast');  
        $('.modal-backdrop').fadeToggle('fast');
          
      }); //end click handler

      //Menu Close Button Click handler
      $('#menu-close').click(function (e)
      { 
        //if($('#search').css('display') == 'none')
        $('#navigation').hide('fast');  
        $('#modal-menu-overlay').fadeToggle('fast');  
          
      }); //end click handler

      //Search Close Button Click handler
      $('#search-close').click(function (e)
      { 
        //if($('#search').css('display') == 'none')
        $('#search').hide('fast');  
        $('#modal-menu-overlay').fadeToggle('fast');  
        $('.modal-backdrop').fadeToggle('fast');
          
      }); //end click handler
});
