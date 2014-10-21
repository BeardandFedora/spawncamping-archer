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

(function($){
	var $carousel = $('.carousel'),
	$slidersContainers = $carousel.find('.carousel-indicators-outer'),
	$sliders = $slidersContainers.find('.carousel-options');

	$sliders.mCustomScrollbar({
		axis:"x",
		advanced:{autoExpandHorizontalScroll:true},
		setWidth: true
	});

	for (i = 0; i < $slidersContainers.length; i++) {
		var $slideContainer = $($slidersContainers[i]),
		$sliderControls = $slideContainer.find('.carousel-controls'),

		$slider = $slideContainer.find('.carousel-options');

		$sliderControls.click(function (event) {
			event.preventDefault();

			var $btn = $(this),
			$sliderCurr = $btn.parent().siblings('.carousel-options');
			
			moveSliderNav($btn, $sliderCurr);
		})
	}

	$('.carousel-control').click(function (event) {
		event.preventDefault();

		var $btn = $(this),
		$sliderCurr = $btn.siblings('.carousel-indicators-outer').children('.carousel-options');

		moveSliderNav($btn, $sliderCurr);
	})

	$sliders.find('li').click(function (event) {
		var $btn = $(this),
		$sliderCurr = $(this).parent('.carousel-options');

		$sliderCurr.mCustomScrollbar('scrollTo', $btn);
	})

})(jQuery);


function moveSliderNav($btn, $slider) {
	var currSlide = $slider.find('.active'),
	slideDir = $btn.attr('data-slide') === "next" ? currSlide.next() : currSlide.prev();;
	console.log(slideDir);
	$slider.mCustomScrollbar("stop")
	$slider.mCustomScrollbar('scrollTo', slideDir);
}


