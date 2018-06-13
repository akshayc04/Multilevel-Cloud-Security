<?php
session_start();
if(!isset($_SESSION['SESS']))
{
echo"<script>alert('Login to access this page'); window.location = 'login.php';</script>";
}
$con=mysqli_connect("localhost","root","","cloud");
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
<title>MyAccount</title>
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

<body id="account">
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
                            <li><a href="store.php">service</a>
                            </li>
                            <li    class="active"><a href="#account">my account</a>
                            </li>
                            <li><a href="logout.php">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
<?php
	if (isset($_SESSION['SESS']))
	{
		/*$sql="select * from register where Email='".$_SESSION['SESS']."'";
		$res=mysql_query($sql);
		$result=mysql_fetch_array($res);*/
		
		$sql="select * from signup where Email='".$_SESSION['SESS']."'";
		$result1=mysqli_query($con,$sql);
		$result=mysqli_fetch_array($result1);
		
	}
	
?><br><br><br>
           <div class="container" >
                <div class="section-heading scrollpoint sp-effect3">
                    <h1 style="color:#fff;">MY ACCOUNT</h1>
				</div>
			<div class="row" style="float:left;width:800px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 scrollpoint sp-effect3">
                            <div class="" >
                                <form name="updateform" onsubmit="return updateValidation();" method="post" action="update.php">
                                     <div class="form-group scrollpoint sp-effect1">
									 <h5 style="color:white;letter-spacing:3px;">FIRST NAME:</h5>
										<input type="text" name="fname" class="form-control"value="<?php echo $result[0] ?>" style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">LAST NAME:</h5>
                                        <input type="text" name="lname"class="form-control" value="<?php echo $result[1] ?>" style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect1">
									<h5 style="color:white;letter-spacing:3px;">MOBILE NUMBER:</h5>
										<input type="text" name="mobile"class="form-control" value="<?php echo $result[2] ?>"  style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">DATE OF BIRTH:</h5>
										<input type="date" name="date" class="form-control" value="<?php echo $result[3] ?>"  style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect1">
									<h5 style="color:white;letter-spacing:3px;">GENDER:</h5>
										<input type="text" name="gender"class="form-control" value="<?php echo $result[4] ?>"  style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">COUNTRY:</h5>
										<input type="text" name="country"class="form-control" value="<?php echo $result[5] ?>"  style="letter-spacing:3px;"><br>
                                    </div>
														<div align="center">
                                 <button type="submit"  class="btn btn-primary inverse btn-lg  scrollpoint sp-effect3">Update</button>
								</div><br><br>
								

	</div>
</div>
	</form>
</div>	
</div>
</div>
<div class="box scrollpoint sp-effect3" style="float:right;">
	<div class="media-body">
        <h4 style="color:#fff;font-size:30px;" class="scrollpoint sp-effect1">CHANGE<br>PASSWORD</h4>
		<form action="changepwd.php">
		 <button type="submit"  class="btn btn-primary inverse btn-lg scrollpoint sp-effect2">Click Here</button>
		 </form>
    </div></div>

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