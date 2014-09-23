// =============================================================================
// JS/ADMIN/X-CUSTOMIZER-ADMIN.JS
// -----------------------------------------------------------------------------
// Customizer admin functionality.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Customizer Admin Functionality
// =============================================================================

// Customizer Admin Functionality
// =============================================================================

jQuery(document).ready(function($) {

  $('head').append('<style type="text/css"> @import url("//fonts.googleapis.com/css?family=Lato:100,300"); #x-customizer-preloader { position: fixed; top: 0; left: 0; right: 0; bottom: 0; text-align: center; background-color: #fff; z-index: 9999999; } #x-customizer-preloader #x-customizer-preloader-inner { display: table; position: absolute; top: 50%; left: 50%; width: 450px; margin: -90px 0 0 -225px; background-repeat: no-repeat; background-position: center 155px; background-color: #fff; } #x-customizer-preloader p.status { display: table-cell; vertical-align: middle; position: relative; padding: 0 0 10px; font-family: Lato, "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 1.1; color: #333; } #x-customizer-preloader p.status span { position: relative; display: block; z-index: 99999999; } #x-customizer-preloader p.status span.loading { margin-left: -2px; font-size: 84px; font-weight: 100; letter-spacing: -2px; text-transform: uppercase; } #x-customizer-preloader p.status span.step { margin-top: 9px; font-size: 18px; font-weight: 300; } #x-customizer-preloader h1.powered-by { position: absolute; left: 0; right: 0; bottom: 24px; margin-right: -6px; font-size: 14px; font-weight: 300; letter-spacing: 6px; line-height: 1.1; text-transform: uppercase; color: #b5b5b5; } </style>');

  $('#x-customizer-import').change(function() {
    $('#x-customizer-import-submit').removeAttr('disabled');
  });

  $('#x-customizer-reset-confirm').change(function() {
    if ( $(this).is(':checked') ) {
      $('#x-customizer-reset-submit').removeAttr('disabled');
    } else {
      $('#x-customizer-reset-submit').attr('disabled', true);
    }
  });

  $('a[href*="customize.php"]').click(function() {
    $('head').append('<style type="text/css"> body { overflow: hidden !important; } </style>');
    $('body').prepend('<div id="x-customizer-preloader"><div id="x-customizer-preloader-inner"><p class="status"><span class="loading">Loading</span><span class="step">(Step 1 of 2) Initializing appsFreedom Customizer</span></p></div><h1 class="powered-by">Powered by LeanStack</h1></div>');
  });

});