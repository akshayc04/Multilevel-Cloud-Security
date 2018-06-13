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
<style>

</style>
<title>Encrypt</title>

	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="css/MSL.css">
	<script type="text/javascript" src="js/modernizr.custom.32033.js"></script>
	
	    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href='bootstrap/css/font.css' rel='stylesheet' type='text/css'/>
	<script src="bootstrap/js/jquery.js"></script>	
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/jquery.form.js"></script>
	<script src="bootstrap/js/jquery.validate.js"></script>
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
                            <li><a href="store.php">services</a>
                            </li>
                            <li><a href="logout.php">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
<br><br><br>
<div align="center">

<form method = "POST" id="uploading_file0">
<br><br><br>
	<div align="center" class="container-fluid"style="padding:40px;padding-bottom:60px;">
	<h2 style="color:#fff;letter-spacing:3px;" class="scrollpoint sp-effect3">JUMBLE</h2><br>
	<h5 style=" color:white;font-family:'Generica';letter-spacing:3px;" class="scrollpoint sp-effect3">Choose The File To Be Jumbled</h5>
		<input type="file" id="input_file0" name="input_file0" style="width:50%;cursor:pointer;height:60px;padding:12px;" class="form-control scrollpoint sp-effect1" name="file" />
		<br><br>

		<input type="submit" class="text btn btn-primary inverse btn-lg scrollpoint sp-effect1" value="Jumble" />
		
	</div>
</form><br><br>

<div style="background:transparent;height:100px;padding-top:2px;display:none;" id="download_link_back0">
	<a target="_blank" class="btn btn-primary inverse btn-lg scrollpoint sp-effect3" id="download_link0">Download</a>
</div>
</div>
<div align="center">

<form method = "POST" id="uploading_file">

	<div align="center" class="container-fluid"style="padding:40px;padding-bottom:60px;">
	<h2 style="color:#fff;letter-spacing:3px;" class="scrollpoint sp-effect3">ENCRYPTION</h2><br>
	<h5 style=" color:white;font-family:'Generica';letter-spacing:3px;" class="scrollpoint sp-effect3">Choose The File To Be Encrypted</h5>
		<input type="file" id="input_file" name="input_file" style="width:50%;cursor:pointer;height:60px;padding:12px;" class="form-control scrollpoint sp-effect1" name="file" />
		<br><br>
		<h5 style=" color:white;font-family:'Generica';letter-spacing:3px;" class="scrollpoint sp-effect3">Enter key Encrypt</h5>
		<input type="password" id="key" name="key" style="width:50%;letter-spacing:3px;"  required class="form-control scrollpoint sp-effect2" name="file"accept="text/*"/>
		<br>

		<input type="submit" class="text btn btn-primary inverse btn-lg scrollpoint sp-effect1" value="Encrypt" />
	</div>
</form>

<div style="background:transparent;height:100px;padding-top:2px;display:none;" id="download_link_back">
	<a target="_blank" class="btn btn-primary inverse btn-lg scrollpoint sp-effect3" id="download_link">Download</a>
</div>
</div>

<div align="center">	
	
<form method = "POST" id="uploading_file2">
	<div align="center" class="container-fluid"style="padding:40px;padding-bottom:60px;">
	<h2 style="font-family:'Generica';letter-spacing:3px;color:#fff;" class="scrollpoint sp-effect3">LOCKING</h2><br>
		<h5 style=" color:white;font-family:'Generica';letter-spacing:2px;" class="scrollpoint sp-effect3">Choose The File To Be Locked</h5>
		<input type="file" id="input_file2" name="input_file2" style="width:50%;cursor:pointer;height:60px;padding:12px;" class="form-control scrollpoint sp-effect1" name="file" />
		<br><br>
		<h5 style=" color:white;font-family:'Generica';letter-spacing:3px;" class="scrollpoint sp-effect3">Enter Key to Lock</h5>
		<input type="password" id="key2" name="key2" style="width:50%;letter-spacing:3px;" required class="form-control scrollpoint sp-effect2" name="file"accept="text/*"/>
		<br>

		<input type="submit" class="text  btn btn-primary inverse btn-lg scrollpoint sp-effect1" value="Lock" />
	</div>
</form>			
<div style="background:transparent;height:100px;padding:3px;display:none;" id="download_link_back2">
	<a target="_blank" class=" btn btn-primary inverse btn-lg scrollpoint sp-effect3" id="download_link2">Download</a>
</div>
</div>


	<script>
		$(function() 
		{
			$('#uploading_file0').validate({
				rules: 
				{
					input_file0: 
					{
						required: true
					}
				},
				messages: 
				{
					input_file0: 
					{
						required: "<span style='color:red;'>Choose a File!</span>"
					}
				},
				submitHandler: function(form) 
				{
					$(form).ajaxSubmit({
						url:"jumb.php",
						type:"POST",
						data: $(form).serialize(),
						success: function(data) 
						{
						//alert(data);
							$("#download_link0").attr("href", data);
							$("#download_link_back0").css("display", "block");
						},
						error: function()
						{
							alert("Problem in Server Connectivity!");
						}
					});
				}
			});
		});
		
		
		$(function() 
		{
			$('#uploading_file').validate({
				rules: 
				{
					input_file: 
					{
						required: true
					}
				},
				messages: 
				{
					input_file: 
					{
						required: "<span style='color:red;'>Choose a File!</span>"
					}
				},
				submitHandler: function(form) 
				{
					$(form).ajaxSubmit({
						url:"encrypt_file.php",
						type:"POST",
						data: $(form).serialize(),
						success: function(data) 
						{
							$("#download_link").attr("href", data);
							$("#download_link_back").css("display", "block");
						},
						error: function()
						{
							alert("Problem in Server Connectivity!");
						}
					});
				}
			});
		});
		
		$(function() 
		{
			$('#uploading_file2').validate({
				rules: 
				{
					input_file2: 
					{
						required: true
					}
				},
				messages: 
				{
					input_file2: 
					{
						required: "<span style='color:red;'>Choose a File!</span>"
					}
				},
				submitHandler: function(form) 
				{
					$(form).ajaxSubmit({
						url:"compress_file.php",
						type:"POST",
						data: $(form).serialize(),
						success: function(data) 
						{
							var res = data.split("Ok");
							
							$("#download_link2").attr("href", res[1]);
							$("#download_link_back2").css("display", "block");
						},
						error: function()
						{
							alert("Problem in Server Connectivity!");
						}
					});
				}
			});
		});
	</script>

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
