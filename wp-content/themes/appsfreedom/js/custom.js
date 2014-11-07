$ = jQuery.noConflict(true);
$(document).ready(function() {
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

var $videoPlayer = $('#homevideo'),
$videoPlayer2 = $('#homevideo2'),
$restart_button = $('#restart');

$videoPlayer.on('ended', function () {
  $videoPlayer.addClass('hidden');
  $videoPlayer2.removeClass('hidden').get(0).play();
  $restart_button.removeClass('hidden');
});

$restart_button.on('click', function(e) {
  e.preventDefault();

  $videoPlayer.removeClass('hidden').get(0).play();
  $videoPlayer2.addClass('hidden');
  $restart_button.addClass('hidden');
});
	
});
 