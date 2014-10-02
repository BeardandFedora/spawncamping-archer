<!DOCTYPE html>
<html lang="en">
<head>
  <title>AppsFreedom :: Enterprise Mobility Applications</title>
  <?php include('includes/head.php'); ?>
</head>
<body class="home">
  <?php include('includes/nav.php'); ?>

  <section class="hero super-hero bg-md-blue">
    <div class="container">
      <div class="col-md-7 col-md-offset-5 content" style="z-index:10;position:relative;">
        <h1 class="headline">Build Enterprise Apps <br class="hidden-sm hidden-xs"><strong>in days,</strong> not months</h1>
        <a type="button" data-type="scroll" href="#platform" class="btn secondary-button">Learn More</a>
        <a type="button" href="/testdrive" class="btn primary-button">Take A Test Drive <span class="btn-arrow"></span></a>
      </div>
    <div class="hidden-sm hidden-xs bg-video" style="position:absolute;margin-top:-134px;top:0;left:0;z-index:1;">
      <video autoplay muted onended="run()" id="homevideo" style="position:absolute;top:0;left:0;z-index:5;" poster="/videos/fallback.png">
        <source src="/videos/MasterFinal.mp4" type="video/mp4"/>
        <source src="/videos/MasterFinal.webm" type="video/webm"/>
        <source src="/videos/MasterFinal.3gp" type="video/3gp"/>
        <source src="/videos/MasterFinal.mov" type="video/mov"/>
        <source src="/videos/MasterFinal.ogg" type="video/ogg"/>
        <source src="/videos/MasterFinal.ogv" type="video/ogv"/>
        <img src="/videos/fallback.png" title="Your browser does not support the <video> tag">
      </video>
<video id="homevideo2" onplaying="showRestart()" loop style="position:absolute;top:0;left:0;z-index:3;">
        <source src="/videos/end_loop.mp4" type="video/mp4"/>
        <source src="/videos/end_loop.webm" type="video/webm"/>
        <source src="/videos/end_loop.3gp" type="video/3gp"/>
        <source src="/videos/end_loop.mov" type="video/mov"/>
        <source src="/videos/end_loop.ogg" type="video/ogg"/>
        <source src="/videos/end_loop.ogv" type="video/ogv"/>
</video>
  <a id="restart" href="#" onclick="reset()" style="background:#ccc;padding:10px; color:white;font-size:20px;position:absolute;top:250px;left:250px;z-index:-1;">replay</a>
<script>
videoPlayer = document.getElementById("homevideo");

videoPlayer2 = document.getElementById("homevideo2");

restart = document.getElementById("restart");

  function run(){
        videoPlayer.style.display = "none";
        videoPlayer2.play()
    };

    function reset(){
      restart.style.zIndex = "-1";
      videoPlayer.style.display = "block";
      videoPlayer.play();
    }

    function showRestart(){
      restart.style.zIndex = "10";
    }
</script>
    </div>

    </div>
  </section>

  <section id="platform" class="platform bg-gray">
    <div class="container">
      <div class="jumbotron text-center">
        <div class="platform-header">
          <img src="/img/homepage-platform-header-lg.png" alt="" class="visible-md-block visible-lg-block center-block img-responsive" />
          <img src="/img/homepage-platform-header-sm.png" alt="" class="visible-xs-block visible-sm-block center-block" />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/model-driven.png" alt="" class="img-circle center-block">
            <h2>Model-Driven <br class="hidden-sm" />Platform-as-a-Service</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/citizen-developers.png" alt="" class="img-circle center-block">
            <h2>Built for Citizen Developers</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/multi-channel.png" alt="" class="img-circle center-block">
            <h2>Multi-Channel <br class="hidden-sm" />Multi-Device</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/run-anywhere.png" alt="" class="img-circle center-block">
            <h2>Build Once Run Anywhere</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/lifecycle.png" alt="" class="img-circle center-block">
            <h2>Complete App Lifecycle Management</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/integrate.png" alt="" class="img-circle center-block">
            <h2>Integrate Cloud and On-Premise Applications</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/bass.png" alt="" class="img-circle center-block">
            <h2>Backend-as-a-Service</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <img src="/img/platform_icons/cloud.png" alt="" class="img-circle center-block">
            <h2>Public Cloud, Private Cloud, or On-Premise</h2>
          </div>
        </div>
      </div>
      <div class="col-sm-12 text-center">
        <a type="button" href="/tour" class="btn secondary-button">Tour the <img src="/img/logo-header-main.png" /> Platform <span class="btn-arrow"></span></a>
      </div>
    </div>
  </section>

  <section class="app-library hero">
    <div class="container">
      <div class="jumbotron container text-center">
        <h1 class="headline">Deliver at the Pace of Business</h1>
        <h2>Launch new apps at lightning speed with pre-integrated, ready-to-use app templates.</h2>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="item bg-md-blue">
          <img src="img/home/crm.png" class="center-block"/>
        </div>
        <p>CRM</p>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="item bg-md-blue">
          <img src="img/home/order_mgmt.png" class="center-block"/>
        </div>
        <p>Order Management</p>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="item bg-md-blue">
          <img src="img/home/procurement.png" class="center-block"/>
        </div>
        <p>Procurement</p>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="item bg-md-blue">
          <img src="img/home/workflow.png" class="center-block"/>
        </div>
        <p>Workflow</p>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="item bg-md-blue">
          <img src="img/home/timesheets.png" class="center-block"/>
        </div>
        <p>Timesheets</p>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="item bg-md-blue">
          <img src="img/home/operations.png" class="center-block" />
        </div>
        <p>Operations</p>
      </div>

      <!-- <div class="col-sm-12 text-center">
        <button type="button" class="btn button">View App Library</button>
      </div> -->
    </div>
  </section>

  <section class="awards">
    <div class="container">
      <div class="divider divider-lg"></div>
      <div class="jumbotron container text-center">
        <h1 class="headline">Awards & Accolades</h1>
      </div>
      <ul class="list-inline award-imgs">
        <li class="col-xs-4 col-md-2" title="Red Herring Top 100 - North America Winner" >
          <img src="img/home/accolades/1.png" class="thumbnail img-responsive" data-toggle="tooltip" title="Tooltip on top" />
        </li>
        <li class="col-xs-4 col-md-2" title="'Best of 2013' - Mobile Star Awards™" >
          <img src="img/home/accolades/2.png" class="thumbnail img-responsive" data-toggle="tooltip" title="Tooltip on top" />
        </li>
        <li class="col-xs-4 col-md-2" title="2013 OnMobile Company to Watch" >
          <img src="img/home/accolades/3.png" class="thumbnail img-responsive" data-toggle="tooltip" title="Tooltip on top" />
        </li>
        <li class="col-xs-4 col-md-2" title="Finalist - Best New Product - The 2013 Golden Bridge Awards" >
          <img src="img/home/accolades/4.png" class="thumbnail img-responsive" data-toggle="tooltip" title="Tooltip on top" />
        </li>
        <li class="col-xs-4 col-md-2" title="Stevie Award Winner - Bronze" >
          <img src="img/home/accolades/5.png" class="thumbnail img-responsive" data-toggle="tooltip" title="Tooltip on top" />
        </li>
        <li class="col-xs-4 col-md-2" title="2013 Arizona Innovation Challenge Winner" >
          <img src="img/home/accolades/6.png" class="thumbnail img-responsive" data-toggle="tooltip" title="Tooltip on top" />
        </li>
      </ul>
    </div>
  </section>

  <?php include('includes/footer_cta.php'); ?>
  <?php include('includes/footer.php'); ?>
  <?php include('includes/scripts.php'); ?>
  <script>
  $('.award-imgs').find('li').tooltip();
  </script>
</body>
</html>