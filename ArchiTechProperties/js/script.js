$(document).ready(function() {

	$(function () {
		$('body').show();
	});
	
/* Mobile navigation */
	
	$('.js--nav-icon').on('click', function() {
		$('.js--main-nav').slideToggle(200);
		
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
	
	var switchMenuToActive = function () {
  // Remove 'active' from home button
  var classes = document.querySelector(".js--main-nav").className;
  classes = classes.replace(new RegExp("active", "g"), "");
  document.querySelector(".js--main-nav").className = classes;

  // Add 'active' to menu button if not already there
  classes = document.querySelector(".js--nav-icon").className;
  if (classes.indexOf("active") === -1) {
    classes += " active";
    document.querySelector(".js--nav-icon").className = classes;
  }
};
	
	
	
	
	
});

$(window).load(function(){
			$(body).show();
		});