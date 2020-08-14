$(document).ready(function() {

	
	$("body").fadeIn();
	
/* Mobile navigation */
	
	
	$('.js--nav-icon').on('click', function() {
		$('.js--main-nav').slideToggle(200);
		
	});	
	
/* Background img */

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
	
/* Page animation with animate.css */
	$(function(){
   		var hash = window.location.hash.substring(1);
  		if(hash =="up")
    	$("html").addClass("animate__fadeInUp");
		
	});
	
	$(function(){
	var hash = window.location.hash.substring(1);
		if(hash =="down")
    	$("html").addClass("animate__fadeInDown");
	});
	
	
	$(function(){	
		var hash = window.location.hash.substring(1);
		if(hash =="left")
    	$("html").addClass("animate__fadeInRight");
		});
	
	$(function(){	
		var hash = window.location.hash.substring(1);
		if(hash =="right")
    	$("html").addClass("animate__fadeInLeft");
		});
	
	
});


	