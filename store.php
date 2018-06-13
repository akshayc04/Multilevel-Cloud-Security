<?php
session_start();
if(!isset($_SESSION['SESS']))
{
echo"<script>alert('Login to access this page'); window.location = 'login.php';</script>";
}
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
<title>Service</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="css/MSL.css">
	<script type="text/javascript" src="js/modernizr.custom.32033.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="pre-loader">
        <div class="load-con">
            <h1 style="color:white;"> Data<font color="#aabbff">Security</font></h1>
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
	<header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                           <h1 style="color:white;"> Data<font color="#aabbff">Security</font></h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                             <li><a href="home1.php">home</a>
                            </li>
                            <li  class="active"><a href="#services">service</a>
                            </li>
                            <li><a href="account.php">my account</a>
                            </li>
                            <li><a href="logout.php">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>

		<div class="tp-banner-container" id="services">
            <div class="tp-banner" >
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/MSL/Slides/im3.jpg" alt="">
                        </div>
						<div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="50"
                            data-voffset="-190"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img  class="hov" src="img/MSL/Slides/cloud.png" alt="">
                        </div>
						<div class="tp-caption lfr fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="850"
                            data-voffset="-190"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img  class="hov" src="img/MSL/Slides/folderlock.png" alt="">
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="center"
                            data-y="center"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/MSL/Slides/mobimg.jpg" alt="">
                        </div>
						<div class="tp-caption large_white_light sfl" data-x="center" data-y="250" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                          Choose The Service</i>
                        </div>
						<div class="tp-caption large_white_light sfr" data-x="center" data-y="350" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                         You Want To Use </i>
                        </div>
						<div class="tp-caption sfb hidden-xs" data-x="450" data-y="center" data-hoffset="0" data-voffset="150" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="encop.php" class="btn btn-primary inverse btn-lg">Store</a>
                        </div>
                        <div class="tp-caption sfb hidden-xs" data-x="600" data-y="center" data-hoffset="0" data-voffset="150" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                        <a href="decop.php" class="btn btn-primary inverse btn-lg">Retrieve</a>
                        </div>
																		<div class="tp-caption sfb visible-xs" data-x="450" data-y="center" data-hoffset="0" data-voffset="150" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="encop.php" class="btn btn-primary inverse btn-sm">Store</a>
                        </div>
                        <div class="tp-caption sfb visible-xs" data-x="435" data-y="center" data-hoffset="0" data-voffset="250" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                        <a href="decop.php" class="btn btn-primary inverse btn-sm">Retrieve</a>
                        </div>
						</li>
						  <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/MSL/Slides/im3.jpg" alt="">
                        </div>
						<div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="50"
                            data-voffset="-190"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img  class="hov" src="img/MSL/Slides/folderlock.png" alt="">
                        </div>
						<div class="tp-caption lfr fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="850"
                            data-voffset="-190"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img  class="hov" src="img/MSL/Slides/cloud.png" alt="">
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="center"
                            data-y="center"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/MSL/Slides/mobimg.jpg" alt="">
                        </div>
						<div class="tp-caption large_white_light sfl" data-x="center" data-y="250" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                          Choose The Service</i>
                        </div>
						<div class="tp-caption large_white_light sfr" data-x="center" data-y="350" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                         You Want To Use </i>
                        </div>
						<div class="tp-caption sfb hidden-xs" data-x="450" data-y="center" data-hoffset="0" data-voffset="150" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="encop.php" class="btn btn-primary inverse btn-lg">Store</a>
                        </div>
                        <div class="tp-caption sfb hidden-xs" data-x="600" data-y="center" data-hoffset="0" data-voffset="150" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                        <a href="decop.php" class="btn btn-primary inverse btn-lg">Retrieve</a>
                        </div>
												<div class="tp-caption sfb visible-xs" data-x="450" data-y="center" data-hoffset="0" data-voffset="150" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="encop.php" class="btn btn-primary inverse btn-sm">Store</a>
                        </div>
                        <div class="tp-caption sfb visible-xs" data-x="435" data-y="center" data-hoffset="0" data-voffset="250" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                        <a href="decop.php" class="btn btn-primary inverse btn-sm">Retrieve</a>
                        </div>
						</li>

					</ul>
	</div>
</div>		
		</header>			
        <footer>
            <div class="container">

                    <h3 style="color:white;cursor:pointer;" class="scrollpoint sp-effect2"> DataSecurity</h3>

                <div class="social">
                    <a href="#" class="scrollpoint sp-effect1"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect2"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p  class="scrollpoint sp-effect1">Copyright &copy; 2016</p>
                    <p  class="scrollpoint sp-effect2">All Rights Reserved</p>
                </div>
            </div>
        </footer>

    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/placeholdem.min.js"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>

</body>

</html>