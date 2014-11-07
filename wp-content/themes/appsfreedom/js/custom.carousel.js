	$(window).load(function() {
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



	function moveSliderNav($btn, $slider) {
		var currSlide = $slider.find('.active'),
		slideDir = $btn.attr('data-slide') === "next" ? currSlide.next() : currSlide.prev();;
		
		$slider.mCustomScrollbar("stop")
		$slider.mCustomScrollbar('scrollTo', slideDir);
	}

	});
