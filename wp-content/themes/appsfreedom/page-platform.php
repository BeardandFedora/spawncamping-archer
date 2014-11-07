<?php
/*
Template Name: Platform
*/

get_header(); ?>

  <section id="build-fast" class="hero">
    <div class="jumbotron container text-center">
      <div class="tour-header">
        <img src="<?php bloginfo('template_url'); ?>/img/tour/platform-tour-hero-header-lg.png" alt="" class="visible-md-block visible-lg-block center-block img-responsive" />
        <img src="<?php bloginfo('template_url'); ?>/img/tour/platform-tour-hero-header-sm.png" alt="" class="visible-xs-block visible-sm-block center-block" />
      </div>
      <h1 class="headline">Build & Launch Enterprise Apps Faster</h1>
    </div>
    <div id="carousel-hero" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/1_launch_faster/image_01.png" class="img-responsive center-block" alt="Model-Driven Platform">
              </div>
              <div class="col-md-7">
                <h3>Model-Driven Platform</h3>
                <p>Generate apps from business process models with no coding required.</p>
                <!-- <p class="divider divider-lg"></p>
                <div class="row">
                  <div class="col-xs-6 clearfix">
                    <div class="download-items">
                      <a class="download-item-link" href="#">
                        <img class="avatar size42" src="<?php bloginfo('template_url'); ?>/img/doc_types/blog.png">
                        <p><u>Mobile Expert Interview: Vaidy Iyer on Cloud Mobility and Paas</u></p>
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="download-items">
                      <a class="download-item-link" href="#">
                        <img class="avatar size42" src="<?php bloginfo('template_url'); ?>/img/doc_types/pdf.png">
                        <p><u>Breaking the SAP API Barrier</u></p>
                      </a>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/1_launch_faster/image_02.png" class="img-responsive center-block" alt="Empower Citizen Developers">
              </div>
              <div class="col-md-7">
                <h3>Empower Citizen Developers</h3>
                <p>Engineered to empower citizen developers to build fully integrated enterprise apps.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/1_launch_faster/image_03.png" class="img-responsive center-block" alt="Build Once, Run Anywhere">
              </div>
              <div class="col-md-7">
                <h3>Build Once, Run Anywhere</h3>
                <p>Build once and deploy to any smartphone, tablet, or browser.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/1_launch_faster/image_04.png" class="img-responsive center-block" alt="Visual Development">
              </div>
              <div class="col-md-7">
                <h3>Visual Development</h3>
                <p>Design, build, and integrate using a visual drag-n-drop toolkit.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-hero" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-10">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-hero" data-slide-to="0" class="active">Model-Driven Platform</li>
              <li data-target="#carousel-hero" data-slide-to="1">Empower Citizen Developers</li>
              <li data-target="#carousel-hero" data-slide-to="2">Build Once, Run Anywhere</li>
              <li data-target="#carousel-hero" data-slide-to="3">Visual Development</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-hero" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-hero" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-hero" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="text-center hero-cta">
      <a type="button" href="<?php echo get_permalink(28); ?>" class="btn button">Take A Test Drive <span class="btn-arrow gray"></span></a> <!-- <span>or visit the <a href="#"><u>Learning Center</u></span></a> -->
    </div>
  </section>
  
  <nav id="tour-scrollby" class="navbar navbar-static-top bg-md-blue visible-lg" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-tour-scrollby">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-tour-scrollby">
        <ul class="nav navbar-nav">
          <li class="active"><a data-type="scroll" href="#build-fast">Build Fast</a></li>
          <li><a data-type="scroll" href="#fully-loaded">Fully Loaded</a></li>
          <li><a data-type="scroll" href="#integrate-anything">Integrate Anything</a></li>
          <li><a data-type="scroll" href="#full-lifecycle">Full Lifecycle</a></li>
          <li><a data-type="scroll" href="#scalable">Scalable</a></li>
          <li><a data-type="scroll" href="#secure">Secure</a></li>
          <li><a data-type="scroll" href="#open-platform">Open Platform</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="fully-loaded" class="hero bg-gray">
    <div class="jumbotron container text-center">
      <!-- <img src="<?php bloginfo('template_url'); ?>/img/tour/fully-loaded-bg.png" class="img-responsive" alt="" /> -->
      <h1 class="headline">Accelerate Time-to-Value with <br  class="hidden-sm" /> Out-of-the-Box Features</h1>
    </div>
    
    <div id="carousel-loaded" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/2_accelerate_time/image_01.png" class="img-responsive center-block" alt="Multi-Language">
              </div>
              <div class="col-md-7">
                <h3>Multi-Language</h3>
                <p>Built-in support, up to 80 languages, for a global deployment.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/2_accelerate_time/image_02.png" class="img-responsive center-block" alt="Mobile Analytics">
              </div>
              <div class="col-md-7">
                <h3>Mobile Analytics</h3>
                <p>Access charts and dashboards on-the-go.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/2_accelerate_time/image_03.png" class="img-responsive center-block" alt="Online/Offline">
              </div>
              <div class="col-md-7">
                <h3>Online/Offline</h3>
                <p>Full support for real-time apps as well as offline apps.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/2_accelerate_time/image_04.png" class="img-responsive center-block" alt="Hybrid / Web / Native">
              </div>
              <div class="col-md-7">
                <h3>Hybrid / Web / Native</h3>
                <p>Deploy hybrid, HTML5 or native apps - your choice.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/2_accelerate_time/image_05.png" class="img-responsive center-block" alt="End-User Collaboration">
              </div>
              <div class="col-md-7">
                <h3>End-User Collaboration</h3>
                <p>Real-time collaboration with business users during design and development.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-loaded" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-10">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-loaded" data-slide-to="0" class="active">Multi-Language</li>
              <li data-target="#carousel-loaded" data-slide-to="1">Mobile Analytics</li>
              <li data-target="#carousel-loaded" data-slide-to="2">Online/Offline</li>
              <li data-target="#carousel-loaded" data-slide-to="3">Hybrid / Web / Native</li>
              <li data-target="#carousel-loaded" data-slide-to="4">End-User Collaboration</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-loaded" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-loaded" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-loaded" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="text-center hero-cta">
      <a type="button" href="<?php echo get_permalink(28); ?>" class="btn button">Take A Test Drive <span class="btn-arrow gray"></span></a> <!-- <span>or visit the <a href="#"><u>Learning Center</u></span></a> -->
    </div>
  </section>
  
  <section id="integrate-anything" class="hero">
    <div class="jumbotron container text-center">
      <h1 class="headline">Integrate with Any Application in a Few Clicks</h1>
    </div>

    <div id="carousel-integrate" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/3_integrate/image_01.png" class="img-responsive center-block" alt="Native Integrations">
              </div>
              <div class="col-md-7">
                <h3>Native Integrations</h3>
                <p>Integrate to On-premise or SaaS applications with native adapters.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/3_integrate/image_02.png" class="img-responsive center-block" alt="Real-time Integration">
              </div>
              <div class="col-md-7">
                <h3>Real-time Integration</h3>
                <p>Real-time integration with data sync and orchestration capabilities for both on-premise and cloud back-end applications.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/3_integrate/image_03.png" class="img-responsive center-block" alt="Composite Mobile Apps">
              </div>
              <div class="col-md-7">
                <h3>Composite Mobile Apps</h3>
                <p>Combine data from multiple on-premise and cloud applications to create composite mobile apps.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/3_integrate/image_04.png" class="img-responsive center-block" alt="Backend-as-a-Service (BaaS)">
              </div>
              <div class="col-md-7">
                <h3>Backend-as-a-Service (BaaS)</h3>
                <p>Integrate to multiple systems and leverage business and integration logic with Backend-as-a-Service (BaaS) capabilities.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-integrate" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-10">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-integrate" data-slide-to="0" class="active">Native Integrations</li>
              <li data-target="#carousel-integrate" data-slide-to="1">Real-Time Integration</li>
              <li data-target="#carousel-integrate" data-slide-to="2">Composite Mobile Apps</li>
              <li data-target="#carousel-integrate" data-slide-to="3">Backend-as-a-Service (BaaS)</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-integrate" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-integrate" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-integrate" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="text-center hero-cta">
      <a type="button" href="<?php echo get_permalink(28); ?>" class="btn button">Take A Test Drive <span class="btn-arrow gray"></span></a> <!-- <span>or visit the <a href="#"><u>Learning Center</u></span></a> -->
    </div>
  </section>
  
  <section class="blue-graph"></section>

  <section id="full-lifecycle" class="hero bg-md-blue">
    <div class="jumbotron container text-center">
      <h1 class="headline">Manage the Complete App Lifecycle</h1>
    </div>

    <div id="carousel-lifecycle" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/4_app_lifecycle/image_01.png" class="img-responsive center-block" alt="Build, Deploy, & Manage Apps">
              </div>
              <div class="col-md-7">
                <h3>Build, Deploy, & Manage Apps</h3>
                <p>Control every stage of the app lifecycle from creation to retirement.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/4_app_lifecycle/image_02.png" class="img-responsive center-block" alt="Centralized App Administration">
              </div>
              <div class="col-md-7">
                <h3>Centralized App Administration</h3>
                <p>App governance and administration for centralized IT control.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/4_app_lifecycle/image_03.png" class="img-responsive center-block" alt="Corporate App Library">
              </div>
              <div class="col-md-7">
                <h3>Corporate App Library</h3>
                <p>Deploy using a corporate <strong><a href="<?php echo get_permalink(24); ?>" title="app library">app library</a></strong> or leverage your MDM deployment capabilities.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/4_app_lifecycle/image_04.png" class="img-responsive center-block" alt="App Metrics">
              </div>
              <div class="col-md-7">
                <h3>App Metrics</h3>
                <p>Analyze the usage, adoption, and performance of your apps.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-lifecycle" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-10">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-lifecycle" data-slide-to="0" class="active">Build, Deploy, & Manage Apps</li>
              <li data-target="#carousel-lifecycle" data-slide-to="1">Centralized App Administration</li>
              <li data-target="#carousel-lifecycle" data-slide-to="2">Corporate App Library</li>
              <li data-target="#carousel-lifecycle" data-slide-to="3">App Metrics</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-lifecycle" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-lifecycle" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-lifecycle" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="text-center hero-cta">
      <a type="button" href="<?php echo get_permalink(28); ?>" class="btn button">Take A Test Drive <span class="btn-arrow"></span></a> <!-- <span>or visit the <a href="#"><u>Learning Center</u></span></a> -->
    </div>
  </section>

  <section id="scalable" class="hero bg-md-blue">
    <div class="jumbotron container text-center">
      <!-- <img src="<?php bloginfo('template_url'); ?>/img/tour/scalability-bg.png" class="img-responsive" alt="" /> -->
      <h1 class="headline">Achieve Unlimited Scalability with a Cloud Infrastructure</h1>
    </div>

    <div id="carousel-scalable" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/5_scalability/image_01.png" class="img-responsive center-block" alt="Multi-tenant infrastructure">
              </div>
              <div class="col-md-7">
                <h3>Multi-tenant infrastructure</h3>
                <p>A true multi-tenant cloud infrastructure with automatic scaling and a 3-tiered (dev, QA, and production) cloud landscape to match your application landscape.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/5_scalability/image_02.png" class="img-responsive center-block" alt="Distributed Architecture">
              </div>
              <div class="col-md-7">
                <h3>Distributed Architecture</h3>
                <p>A single platform with an on-premise component for scalable and secure enterprise integrations. An on-demand component to build, manage and run apps. And a on-device component to leverage all device features.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/5_scalability/image_03.png" class="img-responsive center-block" alt="Cloud Database">
              </div>
              <div class="col-md-7">
                <h3>Cloud Database</h3>
                <p>A visual model to build and deploy business databases in minutes.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/5_scalability/image_04.png" class="img-responsive center-block" alt="Private Cloud or On-Premise">
              </div>
              <div class="col-md-7">
                <h3>Private Cloud or On-Premise</h3>
                <p>Choose your deployment - public cloud, private cloud or on-premise.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/5_scalability/image_05.png" class="img-responsive center-block" alt="High Availability">
              </div>
              <div class="col-md-7">
                <h3>High Availability</h3>
                <p>Architected to integrate enterprise apps on any device to enterprise back-end applications in a secure/N+1 high-availability framework. Servers deployed with Amazon Web Services, infinitely scalable to manage extreme load demands. Backed by a money-back SLA.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-scalable" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-10">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-scalable" data-slide-to="0" class="active">Multi-tenant infrastructure</li>
              <li data-target="#carousel-scalable" data-slide-to="1">Distributed Architecture</li>
              <li data-target="#carousel-scalable" data-slide-to="2">Cloud Database</li>
              <li data-target="#carousel-scalable" data-slide-to="3">Private Cloud or On-Premise</li>
              <li data-target="#carousel-scalable" data-slide-to="4">High Availability</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-scalable" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-scalable" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-scalable" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="text-center hero-cta">
      <a type="button" href="<?php echo get_permalink(28); ?>" class="btn button">Take A Test Drive <span class="btn-arrow"></span></a> <!-- <span>or visit the <a href="#"><u>Learning Center</u></span></a> -->
    </div>
  </section>
  
  <section id="secure" class="hero">
    <div class="jumbotron container text-center">
      <h1 class="headline">Experience Peace-of-Mind with a Secure Platform</h1>
    </div>

    <div id="carousel-secure" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_01.png" class="img-responsive center-block" alt="Secure Communication">
              </div>
              <div class="col-md-7">
                <h3>Secure Communication</h3>
                <p>Certificate-based encrypted communication for all transactions between devices and source applications.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_02.png" class="img-responsive center-block" alt="Authentication">
              </div>
              <div class="col-md-7">
                <h3>Authentication</h3>
                <p>Single sign-On integrated with systems like LDAP, and MS Active Directory plus a user authentication mechanism built into the platform.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_03.png" class="img-responsive center-block" alt="Secure & Independent Tenant">
              </div>
              <div class="col-md-7">
                <h3>Secure & Independent Tenant</h3>
                <p>Safe and secure tenant space for each customer to store and process business rules and data.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_04.png" class="img-responsive center-block" alt="User Management">
              </div>
              <div class="col-md-7">
                <h3>User Management</h3>
                <p>Management of roles, authorizations, and users along with the ability to integrate any identity management engines.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_05.png" class="img-responsive center-block" alt="Transient">
              </div>
              <div class="col-md-7">
                <h3>Transient Cloud</h3>
                <p>Business and authentication data is never stored in the cloud.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_06.png" class="img-responsive center-block" alt="Controlled IP">
              </div>
              <div class="col-md-7">
                <h3>Controlled IP</h3>
                <p>Controlled or restricted IP access for the public cloud deployment model.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/6_secure/image_07.png" class="img-responsive center-block" alt="Mobile Device Management">
              </div>
              <div class="col-md-7">
                <h3>Mobile Device Management</h3>
                <p>appsFreedom is easily integrated and works with most major MDM providers in the Industry.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-secure" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-10">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-secure" data-slide-to="0" class="active">Secure Communication</li>
              <li data-target="#carousel-secure" data-slide-to="1">Authentication</li>
              <li data-target="#carousel-secure" data-slide-to="2">Secure & Independent Tenant</li>
              <li data-target="#carousel-secure" data-slide-to="3">User Management</li>
              <li data-target="#carousel-secure" data-slide-to="4">Transient Cloud</li>
              <li data-target="#carousel-secure" data-slide-to="5">Controlled IP</li>
              <li data-target="#carousel-secure" data-slide-to="6">Mobile Device Management</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-secure" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-secure" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-secure" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="text-center hero-cta">
      <a type="button" href="<?php echo get_permalink(28); ?>" class="btn button">Take A Test Drive <span class="btn-arrow gray"></span></a> <!-- <span>or visit the <a href="#"><u>Learning Center</u></span></a> -->
    </div>
  </section>
  
  <section id="open-platform" class="hero">
    <div class="jumbotron container text-center">
      <!-- <img src="<?php bloginfo('template_url'); ?>/img/tour/open-platform-bg.png" class="img-responsive" alt="" /> -->
      <h1 class="headline">Enjoy Greater Flexibility with Our Open Platform</h1>
    </div>

    <div id="carousel-open" class="carousel slide" data-interval="false" data-wrap="false">
      <div class="container">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/7_open/image_01.png" class="img-responsive center-block" alt="Model">
              </div>
              <div class="col-md-7">
                <h3>Bring Your Own Tool (BYOT)</h3>
                <p>Build apps using any mobile tool. Leverage logic & integrations from the appsFreedom BaaS.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/7_open/image_02.png" class="img-responsive center-block" alt="Platform Extensions">
              </div>
              <div class="col-md-7">
                <h3>Platform Extensions</h3>
                <p>Simplified capability to build custom adapters for your unique business needs.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php bloginfo('template_url'); ?>/img/tour/slides/7_open/image_03.png" class="img-responsive center-block" alt="Take your Apps with you">
              </div>
              <div class="col-md-7">
                <h3>Take your Apps with you</h3>
                <p>All apps are built using open standards and can be exported from within the platform. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators-outer clearfix visible-lg">
          <div class="col-lg-1">
            <a href="#carousel-open" class="carousel-controls" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          </div>
          <div class="carousel-options col-lg-9">
            <ul class="carousel-indicators clearfix">
              <li data-target="#carousel-open" data-slide-to="0" class="active">Bring Your Own Tool (BYOT)</li>
              <li data-target="#carousel-open" data-slide-to="1">Platform Extensions</li>
              <li data-target="#carousel-open" data-slide-to="2">Take your Apps with you</li>
            </ul>
          </div>
          
          <div class="col-lg-1">
            <a href="#carousel-open" class="carousel-controls" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-open" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-open" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    
  </section>


	
<?php get_footer(); ?>
