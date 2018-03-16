 (function(){
    "use strict";

    $(".user-avatar").tooltip({
      delay: {
        show: 500,
        hide: 3000
      } 
    });

    $(".user-info").tooltip({
      delay: {
        show: 500,
        hide: 200
      } 
    });

    var $form = $(".reply-form");

    var $link = $(".show-reply-form");



    $link.on("click", function() {
                                          
    if($x == 'f'){
    $form.className = "show";
    $x = 't';
    }
    else {
    $form.className = "hide";
    $x = 'f';
    }

   });

    var $sentDialog = $("#sentDialog");

    $("#createpost").on("click", function() {
      $sentDialog.modal('show');
    });


    var $postsDialog = $("#postsDialog");

    $("#onthispost").on("click", function() {
      $postsDialog.modal('show');
    });
      
  
  })();