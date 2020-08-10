$(document).ready(function() {

$(function () {
    $('body').show();
});
	
/* Mobile navigation */
	$('.js--nav-icon').click(function() {
		var nav = $('.js--main-nav');
		var icon = $('.js--nav-icon');
		
		nav.slideToggle(200);
		
	});


 

	 $('.hero').click(function(){
        if($(this).hasClass('bckg1'))
        {
            $(this).addClass('bckg2').removeClass('bckg1');
        }
        else
        {
            $(this).addClass('bckg1').removeClass('bckg2');
        }
    });
	

	
	
	
	
	
	
});
$(window).load(function(){
  $(body).show();
});