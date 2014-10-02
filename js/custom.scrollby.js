var $nav = $('#tour-scrollby'),
nav_position = $nav.position().top - $nav.height(),
$navLinks = $nav.find('a');


$(window).load(function () {
	scrollByNavCheck();
})

$(window).scroll( function() {	
	scrollByNavCheck();	
});

function scrollByNavCheck() {
	if ($nav.is(':visible')) {
		var win_position = getPosition($(this)).scroll;
		win_position > nav_position ? fixedScrollby($nav) : staticScrollby($nav);	
	}	
}

function getPosition($element)  {
	$element   = $element || this.$element
	var el     = $element[0]
	var isBody = el.tagName == 'BODY'
	return $.extend({}, (typeof el.getBoundingClientRect == 'function') ? el.getBoundingClientRect() : null, {
		scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop(),
		width:  isBody ? $(window).width()  : $element.outerWidth(),
		height: isBody ? $(window).height() : $element.outerHeight()
	}, isBody ? { top: 0, left: 0 } : $element.offset())
}

function fixedScrollby(nav) {
	nav.addClass('navbar-fixed-top').removeClass('navbar-static-top');
	nav.next().css('padding-top', '50px');
}

function staticScrollby(nav) {
	nav.removeClass('navbar-fixed-top').addClass('navbar-static-top');
	nav.next().css('padding-top', '0');
}


