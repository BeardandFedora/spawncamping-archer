<?php
/*
Template Name: Test Drive
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '::', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body class="landing">
<header>
  <nav class="navbar navbar-default navbar-main dark navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">
          <img src="<?php bloginfo('template_url'); ?>/img/logo-header-main.png" alt="">
        </a>
      </div>
    </div>
  </nav>
</header>
  <section class="hero super-hero bg-md-blue">
    <div class="container">
      <div class="col-md-6">
        <h1 class="headline">Schedule A <br class="hidden-sm"> Free Test Drive Today</h1>
      </div>
      <div class="col-md-5 hidden-sm hidden-xs bg-image">
        <img src="<?php bloginfo('template_url'); ?>/img/george.png" class="img-responsive" alt="" />
      </div>
    </div>
    <div class="bg-dark-blue">
      <div class="container">
        <div class="col-md-12">
          <img src="<?php bloginfo('template_url'); ?>/img/landing/banner.png" class="banner"/>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="col-md-6">
        <p>Your test drive will show how the appsFreedom platform <strong>applies to your needs.</strong> This demonstration is designed to help you <strong>determine if appsFreedom is a good fit for your company.</strong></p>
        <br />
        <p class="lede">What You’ll Get From Your Test Drive:</p>
        <ul>
          <li>An overview of the functionality of the appsFreedom platform.</li>
          <li>A clear understanding of how appsFreedom solves your current problems quickly.</li>
          <li>A clear comparison and contrast between the appsFreedom platform and other top providers.</li>
          <li>Access to the appsFreedom platform. Take it for a spin!</li>
          <li>Two free coaching sessions to introduce you to the simplicity and functionality of the appsFreedom platform.</li>
        </ul>
        <p class="lede">What We Leave Out Of Our Demos:</p>
        <ul>
          <li>We’re not going to waste your time with an hour-long sales pitches.</li>
          <li>We’re not going to pursue you with constant, annoying follow-ups.</li>
          <li>We’re not going to over promise to win your business.</li>
        </ul>
        <br />
        <p>Our clients come to us when they need solutions to very specific problems like enabling CRM, Timesheets and Expenses, Operations, or Procurement to Mobile or Web. We’ve designed your test drive to demonstrate how the appsFreedom platform can solve those problems with <strong>the fastest time-to-value in the industry.</strong></p>
        <br />
      </div>
      <div class="col-md-6">
        <div class="panel panel-main">
          <div class="panel-heading">Suit Up!</div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" action="https://cn187.infusionsoft.com/app/form/process/57b9fcfe81edf2df028d8c50a9d6dead" method="POST">
              <div class="form-horizontal">
                <div class="form-group">
                  <label for="inf_field_Company" class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input id="inf_field_Company" name="inf_field_Company" class="form-control input" type="text" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inf_field_FirstName" class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input id="inf_field_FirstName" name="inf_field_FirstName" type="text" class="form-control input" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inf_field_LastName" class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input id="inf_field_LastName" name="inf_field_LastName" type="type" class="form-control input" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inf_field_Email" class="col-sm-4 control-label">Business Email</label>
                  <div class="col-sm-8">
                    <input id="inf_field_Email" name="inf_field_Email" type="email" class="form-control input" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inf_field_Phone1" class="col-sm-4 control-label">Business Phone</label>
                  <div class="col-sm-8">
                    <input id="inf_field_Phone1" name="inf_field_Phone1" data-mask="(999) 999-9999" type="tel" class="form-control input" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12">
                    <button type="submit" class="btn primary-button center-block">Schedule My Test Drive <span class="btn-arrow"></span></button>
                  </div>
                </div>
              </div>
              <input name="inf_form_xid" type="hidden" value="57b9fcfe81edf2df028d8c50a9d6dead" />
              <input name="inf_form_name" type="hidden" value="30 day free trial form" />
              <input name="infusionsoft_version" type="hidden" value="1.32.0.68" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="bg-md-blue">
      <div class="container">
        <div class="col-md-12">
          <img src="<?php bloginfo('template_url'); ?>/img/logo-header-main.png" alt="">
        </div>
        <div class="copyright">
          <div class="col-md-12">
            <ul class="list-inline">
              <li><small>appsFreedom Copyright © 2014 appsFreedom™ Inc</small></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>



