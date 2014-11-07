<?php
/*
Template Name: Software Vendors
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
     
    <?php get_template_part( 'content', 'page' ); ?>
    
    
    <section class="hero super-hero bg-md-blue">
    <div class="container">
      <div class="col-md-6">
        <h1 class="headline">Go to Market Faster<br class="hidden-sm"> with appsFreedom</h1>
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
        <p>Startups and early-stage software vendors come to us when they want to <strong>build their SaaS product(s) quickly</strong> without wasting time and resources in traditional software development methods.</p>
<br /><p class="lede">Benefits of Partnering With appsFreedom:</p>
  <ul><li><strong>Early Validation of Product-Solution Fit</strong><br />
  Companies can build their Minimum Viable Product (MVP) in weeks, allowing them to test the product-market fit very early in the process.
  </li>

  <li><strong>Fast Time-to-Market</strong><br />
  Companies can release finished products very quickly to the market, literally changing time-to-market from months to weeks.
  </li>
  
  <li><strong>Minimize Dependency on Technical Resources</strong><br />
  Hiring developers puts a strain on any early-stage company. Typically, companies are able to deliver the same product while expending only a 3rd of the resources usually required to staff developers.
  </li>

  <li><strong>Lower Costs</strong><br />
  Product development costs are slashed due to less resources required.
  </li>
  
  <li><strong>Pay-as-you-Grow</strong><br />
  No need to make a huge investment up front when you can take advantage of appsFreedom’s subscription pricing model.
  </li>

  <li><strong>IP Ownership</strong><br />
  Our clients enjoy complete IP ownership, as they no longer have to outsource any product development.
  </li>
  </ul>       
        
<p class="lede">Download our free ebook</p>
<p>Download our ebook made especially for software vendors, <strong>"The Top 10 Reasons SaaS Vendors Choose AppsFreedom"</strong>, to find out how <strong> we empower software companies.</strong></p>
        <br />
  
        <p>This ebook will be ready November 15th, 2014, with updates and chapters sent early to those who signup before the release date.</p>
        <br />
      </div>
      <div class="col-md-6">
        <div class="panel panel-main">
          <div class="panel-heading">Download the eBook</div>
          <div class="panel-body">
            <form accept-charset="UTF-8" action="https://cn187.infusionsoft.com/app/form/process/a3e925fd75ad86c674f1582bb4b33215" class="infusion-form" method="POST">
            <input name="inf_form_xid" type="hidden" value="a3e925fd75ad86c674f1582bb4b33215" />
            <input name="inf_form_name" type="hidden" value="fill out ISV form" />
            <input name="infusionsoft_version" type="hidden" value="1.33.0.47" />
            <!--<form accept-charset="UTF-8" role="form" action="https://cn187.infusionsoft.com/app/form/process/57b9fcfe81edf2df028d8c50a9d6dead" method="POST">-->
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
                  <label for="inf_custom_Comment" class="col-sm-4 control-label">Any Questions?</label>
                  <div class="col-sm-8">
                    <textarea id="inf_custom_Comment" name="inf_custom_Comment" class="form-control textarea" rows="5">
                    </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-12">
                    <button type="submit" class="btn primary-button center-block">Request the eBook <span class="btn-arrow"></span></button>
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



