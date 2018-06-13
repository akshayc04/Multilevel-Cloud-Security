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
<title>Home</title>
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
                             <li   class="active"><a href="#home">home</a>
                            </li>
                            <li><a href="store.php">service</a>
                            </li>
                            <li><a href="account.php">my account</a>
                            </li>
                            <li><a href="logout.php">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
		<div id="home">
        <div class="tp-banner-container">
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
                            <img src="img/MSL/Slides/img2.jpg" alt="">
                        </div>
												<div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="180"
                            data-voffset="-230"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img class="hov" src="img/MSL/Slides/shield.png" alt="">
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

                        <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                         We Provide
                        </div>

                        <div class="tp-caption large_white_light sfr" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                         Complete Security
                        </div>
						 <div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1500" data-start="1400" data-easing="Power4.easeOut">
                          To Your Data
                        </div>


                    </li>
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption lfb fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/MSL/Slides/img.jpg" alt="">
                        </div>
					<div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="180"
                            data-voffset="-230"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img class="hov" src="img/MSL/Slides/encrypt.png" alt="">
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
                        
                      <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                         We Encrypt
                        </div>

                        <div class="tp-caption large_white_light sfr" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                         Your Data
                        </div>
						<div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1500" data-start="1400" data-easing="Power4.easeOut">
                         Multiple Times
                        </div>
                        
                        
                    </li>
                     <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption lfb fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/MSL/Slides/blue.jpg"  alt="">
                        </div>
						<div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="180"
                            data-voffset="-230"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img class="hov" src="img/MSL/Slides/folderlock.png" alt="">
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
                      <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                         We Lock
                        </div>

                        <div class="tp-caption large_white_light sfr" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                         Your Data
                        </div>
												<div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1500" data-start="1400" data-easing="Power4.easeOut">
                          In A Folder
                        </div>
                        
                    </li>
                    
                </ul>
            </div>
        </div>
		</div>
 </header>
	    <div class="wrapper">

        

        <section id="about">
            <div class="container">
                
                <div class="section-heading scrollpoint sp-effect3">
                    <h1 style="color:#3344aa;">About Us</h1>
                    <div class="divider"></div>
                    <p>We Help You Secure Your Data</p>
                </div>

                <div class="row">

                        <div class="about-item scrollpoint sp-effect2">
                          
                            <h3 class="scrollpoint sp-effect3"> Why Use Our Data Security?</h3>
                            <p>Many potential vendors provide cloud services to customers across the world. But major challenge is the customer trust on vendor. Vendor has to prove the customer that their data is safe via cryptography, security breach penalty, policies and security agreement so on. However, it is difficult to gain customer confidence on vendor security. Thus in this system we are proposing a customer end security provision called multilevel cryptography for secure cloud data storage where customer can perform multiple cryptography operations on their data before storing into a cloud. This helps the customers to be satisfied over the security issues of their data before placing it into a cloud. </p>
                        </div>
                  
                </div>
				<div class="row">

                        <div class="about-item scrollpoint sp-effect1">
                        
                            <h3 class="scrollpoint sp-effect1" >What Our System provides!</h3>
                            <p>Users of our system will have 3 levels to secure their data.The multilevel security works in the following way : </p>
							 <div class="about-item scrollpoint sp-effect2">
							 <img src="img/sec.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"></div>
							 <div class="about-item scrollpoint sp-effect1">
							 <img src="img/sec2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"></div>
                        </div>
                  
                </div>
				<div class="row">

                        <div class="about-item scrollpoint sp-effect2">
                            <h3 class="scrollpoint sp-effect3">Advantages</h3>
							<div class="about-item scrollpoint sp-effect1">
                            <p> 1. User dependent security i.e User secures his data and need not worry about security provided by the vendor.</p></div>
							<div class="about-item scrollpoint sp-effect2">
							<p>2. The users data is more secured as the his/her data is secured by both our application and the vendors security measures.</p></div>
							<div class="about-item scrollpoint sp-effect1">
							<p> 3. Even if the cloud is hacked , the users data is very safe from being leaked as the users data is encrypted in multiple ways by our application.</p></div>
                        </div>
                  
                </div>
            </div>
		</section>

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
