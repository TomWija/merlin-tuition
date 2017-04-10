$('#mobile-nav-toggle').click(function() {

	$('.heading__hamburger').toggleClass('open');

	if($('.heading__navigation').hasClass('open')) {
		// $('#navigation-container').animate({
	 //  		backgroundColor: 'rgba(68,76,92,0)'
		// });
		// setTimeout(function() {
			$('.heading__navigation').toggleClass('open');
		// }, 500);
	} else {
		$('.heading__navigation').toggleClass('open');
		// $('#navigation-container').animate({
	 //  		backgroundColor: 'rgba(68,76,92,1)'
		// });
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
