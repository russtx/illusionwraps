(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
         $(document).ready(function(){
  $("#menu_button").click(function(){
    show_menu();
  });
});

function show_menu()
{
$('#menu_links').animate({width:'toggle'},350);
}
                
		
      //slidedown button          
          $("button").click(function() {
    $('html,body').animate({
        scrollTop: $(".second").offset().top},
        'slow');
    $("#fixedHeader").css("background", "#fff");
});

//slider
$('#thumbs').delegate('img','click', function(){
    $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    $('#description').html($(this).attr('alt'));
});


$(window).scroll(function() {    



    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $(".fixedHeader").addClass("fixedHeaderWhite");
    }
});
                
 //keep this           
            });	
	
})(jQuery, this);
