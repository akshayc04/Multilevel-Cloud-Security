<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
<title>Login</title>
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
<body id="login">
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
                             <li><a href="index.php">home</a>
                            </li>
                            <li  class="active"><a href="#login">login</a>
                            </li>
                            <li><a href="signup.php">signup</a>
                            </li>
                            <li><a href="about.php">about</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav><br><br><br><br>
           <div class="container" >
                <div class="section-heading scrollpoint sp-effect3">
                    <h1 style="color:#fff;">LOGIN</h1>
				</div>

                    <div class="col-md-2"></div>
					<div class="col-md-8">
                            <div class="">
                                <form name="loginform" method="post" action="connect.php" id="pre">
								<div class="form-group scrollpoint sp-effect1">
								<h5 style="color:white;letter-spacing:3px;">EMAIL ID:</h5>
                                        <input type="text"  name="email" class="form-control" autofocus style="letter-spacing:3px;">
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">PASSWORD:</h5>
                                        <input type="password" name="pwd1"class="form-control" style="letter-spacing:3px;">
                                    </div><br><br>
								<div align="center">	
                                 <button type="submit"  class="btn btn-primary inverse btn-lg scrollpoint sp-effect1" style="float:center;">Submit</button>
								</div>
                                </form>
                            </div><br><br>
							<div align="center">
							<form action="forget.php">
							<button type="submit"  class="btn btn-primary inverse btn-lg scrollpoint sp-effect2" style="float:center;border:2px solid transparent;">Forget password</button>
							</form></div>
			</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
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