$(document).ready(function() {

  var $buildFast = $('#build-fast');

  if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){
    var $this = $(this);

    $(window).on('scroll', function() {
      x = $this.scrollTop(),
        top_padding = 300, //This correlates to the background-position top in custom.css for #built-fast
        win_position = (parseInt(-x*2) + top_padding),
        bg_position = win_position < -2990 ? -2990 : win_position;

        $buildFast.css('background-position', 'center ' + bg_position + 'px');
      });
  } else {
    $buildFast.css('background', '#c0dabf url("../img/tour/build-fast-bg.png") no-repeat center top')
    .css('background-size', 'cover');

  }

  $(window).trigger('scroll');
});