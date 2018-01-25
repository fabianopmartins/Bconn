$(".btn-menu").click(function(){
	$(".menu").show();
});
$(".btn-close").click(function(){
	$(".menu").hide();
});

$(function(){
			var offsetTOP = $('#thisIsTheTop').offset().top;
			var navTOP = $('.goToTop');
			$(window).scroll(function () {
				if (offsetTOP + 200 <= $(window).scrollTop() && $(document).width() > 760) {
					navTOP.addClass("goToTopShow");
				} else {
					navTOP.removeClass("goToTopShow");
				}
			});
		});

		$(document).ready(function() {
			   $('#goToTopImg').click(function(){
				  $('html, body').animate({scrollTop:0}, 'slow');
			  return false;
				 });
});