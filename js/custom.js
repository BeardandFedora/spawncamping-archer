if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
	$('body').addClass('safari');
}

$('[data-type="scroll"]').bind('click',function(event){
	var $anchor = $(this);
	scrollTo($anchor);
	event.preventDefault();
});

function scrollTo(element) {
	$("html, body").animate({ 
		scrollTop: $(element.attr('href')).offset().top + 1
	}, 500);
}

if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){
	var fallback  = $('.bg-video img').clone()
	$('.bg-video video').remove();
	$('.bg-video').append(fallback);
}