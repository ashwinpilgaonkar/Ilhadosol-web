jQuery(document).ready(function($) {
	$('.section').css('min-height', $(window).height());
	$('.one').css('line-height', $(window).height() + "px");
	$('#map').css('min-height', $('.contact').height());
});
$(window).resize(function(e) {
	$('.section').css('min-height', $(window).height());
	$('.one').css('line-height', $(window).height() + "px");
	$('#map').css('min-height', $('.contact').height());
});
$(window).bind('scroll', function() {
	if($(window).width() > 800){
		if ($(window).scrollTop() > 100) {
			$('.logo').css('display', 'none');
			$('header').css('position', 'fixed');
			$('header').css('backgroundColor', 'rgba(34,45,47,.8)');
		}
		else {
			$('.logo').css('display', 'inline-block');
			$('header').css('position', 'relative');
			$('header').css('backgroundColor', 'rgba(34,45,47,1)');
		}
	}
});