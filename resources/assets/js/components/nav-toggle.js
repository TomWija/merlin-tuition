$('#mobile-nav-toggle').click(function() {

	$('.heading__hamburger').toggleClass('open');

	if($('.heading__navigation').hasClass('open')) {
		$('.heading__navigation').toggleClass('open');
	} else {
		$('.heading__navigation').toggleClass('open');
	}

	// Stop scrolling when menu is open
	if($('.heading__navigation.open').length) {
		$('body').bind('touchmove', function(e){e.preventDefault()});
		$('body').addClass('stop-scrolling');
	} else {
		$('body').unbind('touchmove');
		$('body').removeClass('stop-scrolling');
	}
});


function shrinkBranding() {
	if($(window).scrollTop() === 0) {
		$(".heading__branding--primary").removeClass('scrolled');
		$(".heading__branding--secondary").removeClass('scrolled');
		$("#navigation-container").removeClass('scrolled');
		$(".mobile-heading-padding").removeClass('scrolled');
	} else {
		$(".heading__branding--primary").addClass('scrolled');
		$(".heading__branding--secondary").addClass('scrolled');
		$("#navigation-container").addClass('scrolled');
		$(".mobile-heading-padding").addClass('scrolled');
	}
}

window.addEventListener('scroll', _.throttle(shrinkBranding, 1000, { trailing: true, leading: true }));
