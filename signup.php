<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
<title>Signup</title>
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
<body id="signup">
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
                            <li><a href="login.php">login</a>
                            </li>
                            <li  class="active"><a href="#signup">signup</a>
                            </li>
                            <li><a href="about.php">about</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav><br><br><br><br>
           <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1 style="color:#fff;">SIGNUP</h1>
				</div>

                    <div class="col-md-2"></div>
					<div class="col-md-8">
                            <div class="" >
                                <form name="signupform" onsubmit="return signupValidation();" method="post" action="register2.php">
                                     <div class="form-group scrollpoint sp-effect1">
									 <h5 style="color:white;letter-spacing:3px;">FIRST NAME:</h5>
										<input type="text" name="fname" class="form-control" placeholder="example: John" style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">LAST NAME:</h5>
                                        <input type="text" name="lname"class="form-control" placeholder="example: Miller" style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect1">
									<h5 style="color:white;letter-spacing:3px;">MOBILE NUMBER:</h5>
										<input type="text" name="mobile"class="form-control" placeholder="example: +91-8293456289"  style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">DATE OF BIRTH:</h5>
										<input type="date" name="date" class="form-control"  placeholder="mm/dd/yyyy"style="letter-spacing:3px;"><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect1">
									<h5 style="color:white;letter-spacing:3px;">GENDER:</h5>
									<h5 style="color:white;letter-spacing:3px;">MALE <input type="radio" name="gender" value="male" checked>     FEMALE <input type="radio" name="gender" value="female"></h5><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">COUNTRY:</h5>
										<select name="country"class="form-control" >
				<option value="-1">Choose Your Country</option>
				<option value="Afganistan">Afganistan</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
				<option value="Andorra">Andorra</option>
				<option value="Angola">Angola</option>
				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
				<option value="Argentina">Argentina</option>
				<option value="Armenia">Armenia</option>
				<option value="Australia">Australia</option>
				<option value="Austria">Austria</option>
				<option value="Azerbaijan">Azerbaijan</option>
				<option value="Bahamas">Bahamas</option>
				<option value="Bahrain">Bahrain</option>
				<option value="Bangladesh">Bangladesh</option>
				<option value="Barbados">Barbados</option>
				<option value="Belarus">Belarus</option>
				<option value="Belgium">Belgium</option>
				<option value="Belize">Belize</option>
				<option value="Benin">Benin</option>
				<option value="Bhutan">Bhutan</option>
				<option value="Bolivia">Bolivia</option>
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option value="Botswana">Botswana</option>
				<option value="Brazil">Brazil</option>
				<option value="Brunie">Brunie</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Burkina Faso">Burkina Faso</option>
				<option value="Burundi">Burundi</option>
				<option value="Cabo Verde">Cabo Verde</option>
				<option value="Cambodia">Cambodia</option>
				<option value="Cameroon">Cameroon</option>
				<option value="Canada">Canada</option>
				<option value="Central African Republic">Central African Republic</option>
				<option value="Chad">Chad</option>
				<option value="Chile">Chile</option>
				<option value="China">China</option>
				<option value="Colombia">Colombia</option>
				<option value="Comoros">Comoros</option>
				<option value="Congo">Congo</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Cote d'lvorie">Cote d'lvorie</option>
				<option value="Crotia">Crotia</option>
				<option value="Cuba">Cuba</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czech Republic">Czech Republic</option>
				<option value="Denmark">Denmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Dominica">Dominica</option>
				<option value="Dominican Republic">Dominican Republic</option>
				<option value="Ecuador">Ecuador</option>
				<option value="Egypt">Egypt</option>
				<option value="El Salvador">El Salvador</option>
				<option value="Equatorial Guinea">Equatorial Guinea</option>
				<option value="Eritrea">Eritrea</option>
				<option value="Estonia">Estonia</option>
				<option value="Ethiopia">Ethiopia</option>
				<option value="Fiji">Fiji</option>
				<option value="Finland">Finland</option>
				<option value="France">France</option>
				<option value="Gabon">Gabon</option>
				<option value="Gambia">Gambia</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Ghana">Ghana</option>
				<option value="Greece">Greece</option>
				<option value="Grenada">Grenada</option>
				<option value="Guatemala">Guatemala</option>
				<option value="Guinea">Guinea</option>
				<option value="Guinea-Bissau">Guinea-Bissau</option>
				<option value="Guyana">Guyana</option>
				<option value="Haiti">Haiti</option>
				<option value="Honduras">Honduras</option>
				<option value="Hungary">Hungary</option>
				<option value="Iceland">Iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran">Iran</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Israel">Israel</option>
				<option value="Italy">Italy</option>
				<option value="Jamaica">Jamaica</option>
				<option value="Japan">Japan</option>
				<option value="Jordan">Jordan</option>
				<option value="Kazakhastan">Kazakhastan</option>
				<option value="Kenya">Kenya</option>
				<option value="Kiribati">Kiribati</option>
				<option value="Kosovo">Kosovo</option>
				<option value="Kuwait">Kuwait</option>
				<option value="Kyrgyzstan">Kyrgyzstan</option>
				<option value="Laos">Laos</option>
				<option value="Latvia">Latvia</option>
				<option value="Lebanon">Lebanon</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Liberia">Liberia</option>
				<option value="Libya">Libya</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Macedonia">Macedonia</option>
				<option value="Madagascar">Madagascar</option>
				<option value="Malawi">Malawi</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Maldives">Maldives</option>
				<option value="Mali">Mali</option>
				<option value="Malta">Malta</option>
				<option value="Marshall">Marshall Islands</option>
				<option value="Mauritania">Mauritania</option>
				<option value="Mauritius">Mauritius</option>
				<option value="Mexico">Mexico</option>
				<option value="Micronesia">Micronesia</option>
				<option value="Moldova">Moldova</option>
				<option value="Monaco">Monaco</option>
				<option value="Mongolia">Mongolia</option>
				<option value="Monthenegro">Monthenegro</option>
				<option value="Morroco">Morroco</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Myanmar(Burma)">Myanmar(Burma)</option>
				<option value="Nambia">Nambia</option>
				<option value="Nauru">Nauru</option>
				<option value="Nepal">Nepal</option>
				<option value="Netherlands">Netherlands</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Niger">Niger</option>
				<option value="Nigeria">Nigeria</option>
				<option value="North Korea">North Korea</option>
				<option value="Norway">Norway</option>
				<option value="Oman">Oman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Palestine">Palestine</option>
				<option value="Panama">Panama</option>
				<option value="Papua New Guinea">Papua New Guinea</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Peru">Peru</option>
				<option value="Philippines">Philippines</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Qatar">Qatar</option>
				<option value="Romania">Romania</option>
				<option value="Russia">Russia</option>
				<option value="Rwanda">Rwanda</option>
				<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
				<option value="St. Lucia">St. Lucia</option>
				<option value="St. Vincent and The Grenadines">St. Vincent and The Grenadines</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Senegal">Senegal</option>
				<option value="Serbia">Serbia</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Slovakia">Slovakia</option>
				<option value="Slovania">Slovania</option>
				<option value="Soloman Islands">Soloman Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Korea">South Korea</option>
				<option value="South Sudan">South Sudan</option>
				<option value="Spain">Spain</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Swaziland">Swaziland</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syria">Syria</option>
				<option value="Taiwan">Taiwan</option>
				<option value="Tajikistan">Tajikistan</option>
				<option value="Tanzania">Tanzania</option>
				<option value="Thailand">Thailand</option>
				<option value="Timor-Leste">Timor-Leste</option>
				<option value="Togo">Togo</option>
				<option value="Tonga">Tonga</option>
				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
				<option value="Tunisia">Tunisia</option>
				<option value="Turkey">Turkey</option>
				<option value="Turkmenistan">Turkmenistan</option>
				<option value="Tuvalu">Tuvalu</option>
				<option value="Uganda">Uganda</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Arab Emiraties">United Arab Emiraties</option>
				<option value="United Kingdom(UK">United Kingdom(UK)</option>
				<option value="United States of America(USA)">United States of America(USA)</option>
				<option value="Uruguay">Uruguay</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Vatican City(Holy See)">Vatican City(Holy See)</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Vietnam">Vietnam</option>
				<option value="Yemen">Yemen</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>
				</select><br>
                                    </div>
									<div class="form-group scrollpoint sp-effect1">  
									<h5 style="color:white;letter-spacing:3px;">EMAIL ID:</h5> 
									 <input type="text"  name="email" class="form-control" placeholder="example:JohnMiller@gmail.com" style="letter-spacing:3px;">
									</div>
									<div class="form-group scrollpoint sp-effect1">
									<h5 style="color:white;letter-spacing:3px;">PASSWORD:</h5>
									<h6 style="color:white;letter-spacing:1px;">[Must contain atleast 8-digits, 1 Uppercase letter, 1 Lowercase Letter, 1 Number and 1 Special character]</h6>
										<input type="password" name="pwd1"class="form-control" style="letter-spacing:3px;"><br>
									</div>
									<div class="form-group scrollpoint sp-effect2">
									<h5 style="color:white;letter-spacing:3px;">CONFIRM PASSWORD:</h5>
										<input type="password" name="pwd2"class="form-control" style="letter-spacing:3px;">
									</div>
									<br><br><br>
									<div align="center">
                                 <button type="submit"  class="btn btn-primary inverse btn-lg scrollpoint sp-effect3">Submit</button>
								</div>
                                </form>
                            </div>

			</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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