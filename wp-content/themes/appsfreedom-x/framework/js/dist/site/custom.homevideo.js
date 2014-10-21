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