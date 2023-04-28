<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
/*if(!isset($_SESSION["email_add"]) || $_SESSION["email_add"] !== true){
    header("location: login.html");
    exit;
}

include "config.php";
*/
// Check user login or not
if(!isset($_SESSION['email_add'])){
    header('Location: login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Contact</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
    <style>
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
}
.tabcontent {
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

</style>
<script>
function openStep(evt, stepName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(stepName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
	</head>

	<body>
		
		<div id="site-content">
			
			<header class="site-header wow fadeInDown">
				<div class="container">
					<div class="header-content">
						<div class="branding">
							<img src="images/logo.png" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="index.html">Uhuru</a></h1>
							<small class="site-description">Travel & Tours</small>
						</div>
						
						<nav class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="about-us.html">About us</a></li>
								<li class="menu-item"><a href="our-offer.html">Our Services</a></li>
								<li class="menu-item"><a href="promotion.html">Promotions</a></li>
								<li class="menu-item"><a href="contact.html">Contact</a></li>
								<li class="menu-item"><a href="logout.php">Sign Out</a></li>
							</ul>
						</nav>
						
						<div class="social-links">
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
					<nav class="breadcrumbs">
						<!--<a href="index.html">Home</a> &rarr;
						<span>Contact</span>-->
                        <h3 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["email_add"]); ?></b>. Welcome to our site.</h3>
    <p>
        <!-- Tab links -->

        <!--<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>-->
        <!--<a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>-->
    </p>
					</nav>
				</div>
			</header> <!-- .site-header -->

			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-3 wow fadeInLeft">
								<h4>Europian Ttavel & Tours</h4>
								<ul class="list-fa">
									<li><i class="fa fa-map-marker"></i> TRNC, Turkey</li>
									<li><i class="fa fa-phone"></i> +905428894827</li>
									<li><i class="fa fa-envelope"></i>contact@europiantraveltours.com</li>
								</ul>

								<form action="#" class="contact-form">
									<input type="text" placeholder="Your Name...">
									<input type="text" placeholder="Company Name...">
									<input type="text" placeholder="Email">
									<textarea name="" id="" placeholder="Message..."></textarea>
									<input type="submit" class="button" value="Send Message">
								</form>
							</div>
							<div class="col-md-8 col-md-push-1 wow fadeInRight">
								
									<div class="row">
                                    <div class="tab">
  <button class="tablinks" onclick="openStep(event, 'Profile')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openStep(event, 'Documentation')">Documentation</button>
  <button class="tablinks" onclick="openStep(event, 'Application')">Application</button>
  <button class="tablinks" onclick="openStep(event, 'Progress')">Progress</button>
</div>

<!-- Tab content -->
<div id="Profile" class="tabcontent">
  <!--<h3>Profile</h3>-->
  
  <?php
 
 /*
  
 *   File: infoEditForm.php
 *   
 *
 *=====================================
 */
  
 $hostName  ="localhost";
 $userName ="root";
 $userPassword ="";
 $database ="superfly";
  
 $dbConnectionStatus  = new mysqli($hostName, $userName, $userPassword,$database);
  
 //Connection Error
 if ($dbConnectionStatus->connect_error){     
  
          
      die("Connection failed: " . $dbConnectionStatus->connect_error);
  
 }
 // Connected to Database JaneDB
 // Object oriented  -> pointing 
 if($dbConnectionStatus->query("SELECT DATABASE()")){
      
     $dbSuccess =true;
     //
     $result = $dbConnectionStatus->query("SELECT DATABASE()");
     $row = $result->fetch_row();
     printf("Default database is %s.\n", $row[0]);
     $result->close();
  
      
      
      
 }
  
       
          
              
             // Select Query base on Info Id
       $cname__select = "SELECT * FROM profiles WHERE email_add ='{$_SESSION[ "email_add" ]}'";
          
          
             // Execute Query
              
        $cname__select_Query= mysqli_query($dbConnectionStatus,$cname__select);
         
             // While there is info in row
              
         while($rows=mysqli_fetch_assoc($cname__select_Query)){
                     
             
                        $Id = $rows['id'];
                        $firstName = $rows['f_name'];
                        $middleName = $rows['m_name'];
                        $lastName = $rows['l_name'];
                        $maritalStatus = $rows['marital_status'];
                        $emails = $rows['email_add'];
                        $phoneLine = $rows['phone_line'];
                        $address1 = $rows['address1'];
                        $address2 = $rows['address2'];
                        $city = $rows['city'];
                        $country = $rows['country_of_residence'];
                        $dob = $rows['dob'];
                        $nationality = $rows['nationality'];
                                            
                 
                     
                     
               }
                
              
          
              
              
              
                  
     
  
     echo '<h2 style="font-family: arial, helvetica, sans-serif;" >
                 User Information Update Form
             </h2>';
      
         //      FORM postInfo User 
         echo '<form name="postCompany" action="profileUpdate.php" method="post">';
          
                 echo '<input type="hidden" name="infoID" value="'.$Id.'"/>';
                 echo '
                 <table>
                     <tr>
                         <td>First Name</td>
                         <td><input type="text" name="firstName" value="'.$firstName.'"/></td>
                     </tr>
                     <tr>
                         <td>Middle Name</td>
                         <td><input type="text" name="middleName" value="'.$middleName.'"/></td>
                     </tr>
                     <tr>
                         <td>Last Name</td>
                         <td><input type="text" name="lastName" value="'.$lastName.'"/></td>
                     </tr>
                     <tr>
                         <td>Marital Status</td>
                         <td><select name="marital_status" id="marital_status" required>
                         <option value="single">Single</option>
                         <option value="married">Married</option>
                         <option value="seperated">Seperated</option>
                         <option value="widowed">Widowedi</option>
                         <option value="engaged">Engaged</option>
                     </select></td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td><input type="text" name="email" value="'.$emails.'"/></td>
                     </tr>
                     <tr>
                         <td>Phone number</td>
                         <td><input type="text" name="phoneLine" value="'.$phoneLine.'"/></td>
                     </tr>
                     <tr>
                         <td>Address 1</td>
                         <td><textarea id="add1" name="add1" rows="4" cols="50" value="'.$address1.'"></textarea></td>
                     </tr>
                     <tr>
                         <td>Address 2</td>
                         <td><textarea id="add2" name="add2" rows="4" cols="50" value="'.$address2.'"></textarea></td>
                     </tr>
                     <tr>
                         <td>City</td>
                         <td><input type="text" name="city" value="'.$city.'"/></td>
                     </tr>
                     <tr>
                         <td>Country of Residence</td>
                         <td><select id="countryResidence" name="countryResidence">
                         <option value="Afganistan">Afghanistan</option>
                         <option value="Albania">Albania</option>
                         <option value="Algeria">Algeria</option>
                         <option value="American Samoa">American Samoa</option>
                         <option value="Andorra">Andorra</option>
                         <option value="Angola">Angola</option>
                         <option value="Anguilla">Anguilla</option>
                         <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                         <option value="Argentina">Argentina</option>
                         <option value="Armenia">Armenia</option>
                         <option value="Aruba">Aruba</option>
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
                         <option value="Bermuda">Bermuda</option>
                         <option value="Bhutan">Bhutan</option>
                         <option value="Bolivia">Bolivia</option>
                         <option value="Bonaire">Bonaire</option>
                         <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                         <option value="Botswana">Botswana</option>
                         <option value="Brazil">Brazil</option>
                         <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                         <option value="Brunei">Brunei</option>
                         <option value="Bulgaria">Bulgaria</option>
                         <option value="Burkina Faso">Burkina Faso</option>
                         <option value="Burundi">Burundi</option>
                         <option value="Cambodia">Cambodia</option>
                         <option value="Cameroon">Cameroon</option>
                         <option value="Canada">Canada</option>
                         <option value="Canary Islands">Canary Islands</option>
                         <option value="Cape Verde">Cape Verde</option>
                         <option value="Cayman Islands">Cayman Islands</option>
                         <option value="Central African Republic">Central African Republic</option>
                         <option value="Chad">Chad</option>
                         <option value="Channel Islands">Channel Islands</option>
                         <option value="Chile">Chile</option>
                         <option value="China">China</option>
                         <option value="Christmas Island">Christmas Island</option>
                         <option value="Cocos Island">Cocos Island</option>
                         <option value="Colombia">Colombia</option>
                         <option value="Comoros">Comoros</option>
                         <option value="Congo">Congo</option>
                         <option value="Cook Islands">Cook Islands</option>
                         <option value="Costa Rica">Costa Rica</option>
                         <option value="Cote DIvoire">Cote DIvoire</option>
                         <option value="Croatia">Croatia</option>
                         <option value="Cuba">Cuba</option>
                         <option value="Curaco">Curacao</option>
                         <option value="Cyprus">Cyprus</option>
                         <option value="Czech Republic">Czech Republic</option>
                         <option value="Denmark">Denmark</option>
                         <option value="Djibouti">Djibouti</option>
                         <option value="Dominica">Dominica</option>
                         <option value="Dominican Republic">Dominican Republic</option>
                         <option value="East Timor">East Timor</option>
                         <option value="Ecuador">Ecuador</option>
                         <option value="Egypt">Egypt</option>
                         <option value="El Salvador">El Salvador</option>
                         <option value="Equatorial Guinea">Equatorial Guinea</option>
                         <option value="Eritrea">Eritrea</option>
                         <option value="Estonia">Estonia</option>
                         <option value="Ethiopia">Ethiopia</option>
                         <option value="Falkland Islands">Falkland Islands</option>
                         <option value="Faroe Islands">Faroe Islands</option>
                         <option value="Fiji">Fiji</option>
                         <option value="Finland">Finland</option>
                         <option value="France">France</option>
                         <option value="French Guiana">French Guiana</option>
                         <option value="French Polynesia">French Polynesia</option>
                         <option value="French Southern Ter">French Southern Ter</option>
                         <option value="Gabon">Gabon</option>
                         <option value="Gambia">Gambia</option>
                         <option value="Georgia">Georgia</option>
                         <option value="Germany">Germany</option>
                         <option value="Ghana">Ghana</option>
                         <option value="Gibraltar">Gibraltar</option>
                         <option value="Great Britain">Great Britain</option>
                         <option value="Greece">Greece</option>
                         <option value="Greenland">Greenland</option>
                         <option value="Grenada">Grenada</option>
                         <option value="Guadeloupe">Guadeloupe</option>
                         <option value="Guam">Guam</option>
                         <option value="Guatemala">Guatemala</option>
                         <option value="Guinea">Guinea</option>
                         <option value="Guyana">Guyana</option>
                         <option value="Haiti">Haiti</option>
                         <option value="Hawaii">Hawaii</option>
                         <option value="Honduras">Honduras</option>
                         <option value="Hong Kong">Hong Kong</option>
                         <option value="Hungary">Hungary</option>
                         <option value="Iceland">Iceland</option>
                         <option value="Indonesia">Indonesia</option>
                         <option value="India">India</option>
                         <option value="Iran">Iran</option>
                         <option value="Iraq">Iraq</option>
                         <option value="Ireland">Ireland</option>
                         <option value="Isle of Man">Isle of Man</option>
                         <option value="Israel">Israel</option>
                         <option value="Italy">Italy</option>
                         <option value="Jamaica">Jamaica</option>
                         <option value="Japan">Japan</option>
                         <option value="Jordan">Jordan</option>
                         <option value="Kazakhstan">Kazakhstan</option>
                         <option value="Kenya">Kenya</option>
                         <option value="Kiribati">Kiribati</option>
                         <option value="Korea North">Korea North</option>
                         <option value="Korea Sout">Korea South</option>
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
                         <option value="Macau">Macau</option>
                         <option value="Macedonia">Macedonia</option>
                         <option value="Madagascar">Madagascar</option>
                         <option value="Malaysia">Malaysia</option>
                         <option value="Malawi">Malawi</option>
                         <option value="Maldives">Maldives</option>
                         <option value="Mali">Mali</option>
                         <option value="Malta">Malta</option>
                         <option value="Marshall Islands">Marshall Islands</option>
                         <option value="Martinique">Martinique</option>
                         <option value="Mauritania">Mauritania</option>
                         <option value="Mauritius">Mauritius</option>
                         <option value="Mayotte">Mayotte</option>
                         <option value="Mexico">Mexico</option>
                         <option value="Midway Islands">Midway Islands</option>
                         <option value="Moldova">Moldova</option>
                         <option value="Monaco">Monaco</option>
                         <option value="Mongolia">Mongolia</option>
                         <option value="Montserrat">Montserrat</option>
                         <option value="Morocco">Morocco</option>
                         <option value="Mozambique">Mozambique</option>
                         <option value="Myanmar">Myanmar</option>
                         <option value="Nambia">Nambia</option>
                         <option value="Nauru">Nauru</option>
                         <option value="Nepal">Nepal</option>
                         <option value="Netherland Antilles">Netherland Antilles</option>
                         <option value="Netherlands">Netherlands (Holland, Europe)</option>
                         <option value="Nevis">Nevis</option>
                         <option value="New Caledonia">New Caledonia</option>
                         <option value="New Zealand">New Zealand</option>
                         <option value="Nicaragua">Nicaragua</option>
                         <option value="Niger">Niger</option>
                         <option value="Nigeria">Nigeria</option>
                         <option value="Niue">Niue</option>
                         <option value="Norfolk Island">Norfolk Island</option>
                         <option value="Norway">Norway</option>
                         <option value="Oman">Oman</option>
                         <option value="Pakistan">Pakistan</option>
                         <option value="Palau Island">Palau Island</option>
                         <option value="Palestine">Palestine</option>
                         <option value="Panama">Panama</option>
                         <option value="Papua New Guinea">Papua New Guinea</option>
                         <option value="Paraguay">Paraguay</option>
                         <option value="Peru">Peru</option>
                         <option value="Phillipines">Philippines</option>
                         <option value="Pitcairn Island">Pitcairn Island</option>
                         <option value="Poland">Poland</option>
                         <option value="Portugal">Portugal</option>
                         <option value="Puerto Rico">Puerto Rico</option>
                         <option value="Qatar">Qatar</option>
                         <option value="Republic of Montenegro">Republic of Montenegro</option>
                         <option value="Republic of Serbia">Republic of Serbia</option>
                         <option value="Reunion">Reunion</option>
                         <option value="Romania">Romania</option>
                         <option value="Russia">Russia</option>
                         <option value="Rwanda">Rwanda</option>
                         <option value="St Barthelemy">St Barthelemy</option>
                         <option value="St Eustatius">St Eustatius</option>
                         <option value="St Helena">St Helena</option>
                         <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                         <option value="St Lucia">St Lucia</option>
                         <option value="St Maarten">St Maarten</option>
                         <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                         <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                         <option value="Saipan">Saipan</option>
                         <option value="Samoa">Samoa</option>
                         <option value="Samoa American">Samoa American</option>
                         <option value="San Marino">San Marino</option>
                         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                         <option value="Saudi Arabia">Saudi Arabia</option>
                         <option value="Senegal">Senegal</option>
                         <option value="Seychelles">Seychelles</option>
                         <option value="Sierra Leone">Sierra Leone</option>
                         <option value="Singapore">Singapore</option>
                         <option value="Slovakia">Slovakia</option>
                         <option value="Slovenia">Slovenia</option>
                         <option value="Solomon Islands">Solomon Islands</option>
                         <option value="Somalia">Somalia</option>
                         <option value="South Africa">South Africa</option>
                         <option value="Spain">Spain</option>
                         <option value="Sri Lanka">Sri Lanka</option>
                         <option value="Sudan">Sudan</option>
                         <option value="Suriname">Suriname</option>
                         <option value="Swaziland">Swaziland</option>
                         <option value="Sweden">Sweden</option>
                         <option value="Switzerland">Switzerland</option>
                         <option value="Syria">Syria</option>
                         <option value="Tahiti">Tahiti</option>
                         <option value="Taiwan">Taiwan</option>
                         <option value="Tajikistan">Tajikistan</option>
                         <option value="Tanzania">Tanzania</option>
                         <option value="Thailand">Thailand</option>
                         <option value="Togo">Togo</option>
                         <option value="Tokelau">Tokelau</option>
                         <option value="Tonga">Tonga</option>
                         <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                         <option value="Tunisia">Tunisia</option>
                         <option value="Turkey">Turkey</option>
                         <option value="Turkmenistan">Turkmenistan</option>
                         <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                         <option value="Tuvalu">Tuvalu</option>
                         <option value="Uganda">Uganda</option>
                         <option value="United Kingdom">United Kingdom</option>
                         <option value="Ukraine">Ukraine</option>
                         <option value="United Arab Erimates">United Arab Emirates</option>
                         <option value="United States of America">United States of America</option>
                         <option value="Uraguay">Uruguay</option>
                         <option value="Uzbekistan">Uzbekistan</option>
                         <option value="Vanuatu">Vanuatu</option>
                         <option value="Vatican City State">Vatican City State</option>
                         <option value="Venezuela">Venezuela</option>
                         <option value="Vietnam">Vietnam</option>
                         <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                         <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                         <option value="Wake Island">Wake Island</option>
                         <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                         <option value="Yemen">Yemen</option>
                         <option value="Zaire">Zaire</option>
                         <option value="Zambia">Zambia</option>
                         <option value="Zimbabwe">Zimbabwe</option>
                      </select></td>
                     </tr>
                     <tr>
                         <td>Date of Birth</td>
                         <td><input type="date" name="dob" value="'.$dob.'"/></td>
                     </tr> 
                     <tr>
                         <td>Nationality</td>
                         <td><select id="nationality" name="nationality">
                         <option value="Afganistan">Afghanistan</option>
                         <option value="Albania">Albania</option>
                         <option value="Algeria">Algeria</option>
                         <option value="American Samoa">American Samoa</option>
                         <option value="Andorra">Andorra</option>
                         <option value="Angola">Angola</option>
                         <option value="Anguilla">Anguilla</option>
                         <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                         <option value="Argentina">Argentina</option>
                         <option value="Armenia">Armenia</option>
                         <option value="Aruba">Aruba</option>
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
                         <option value="Bermuda">Bermuda</option>
                         <option value="Bhutan">Bhutan</option>
                         <option value="Bolivia">Bolivia</option>
                         <option value="Bonaire">Bonaire</option>
                         <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                         <option value="Botswana">Botswana</option>
                         <option value="Brazil">Brazil</option>
                         <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                         <option value="Brunei">Brunei</option>
                         <option value="Bulgaria">Bulgaria</option>
                         <option value="Burkina Faso">Burkina Faso</option>
                         <option value="Burundi">Burundi</option>
                         <option value="Cambodia">Cambodia</option>
                         <option value="Cameroon">Cameroon</option>
                         <option value="Canada">Canada</option>
                         <option value="Canary Islands">Canary Islands</option>
                         <option value="Cape Verde">Cape Verde</option>
                         <option value="Cayman Islands">Cayman Islands</option>
                         <option value="Central African Republic">Central African Republic</option>
                         <option value="Chad">Chad</option>
                         <option value="Channel Islands">Channel Islands</option>
                         <option value="Chile">Chile</option>
                         <option value="China">China</option>
                         <option value="Christmas Island">Christmas Island</option>
                         <option value="Cocos Island">Cocos Island</option>
                         <option value="Colombia">Colombia</option>
                         <option value="Comoros">Comoros</option>
                         <option value="Congo">Congo</option>
                         <option value="Cook Islands">Cook Islands</option>
                         <option value="Costa Rica">Costa Rica</option>
                         <option value="Cote DIvoire">Cote DIvoire</option>
                         <option value="Croatia">Croatia</option>
                         <option value="Cuba">Cuba</option>
                         <option value="Curaco">Curacao</option>
                         <option value="Cyprus">Cyprus</option>
                         <option value="Czech Republic">Czech Republic</option>
                         <option value="Denmark">Denmark</option>
                         <option value="Djibouti">Djibouti</option>
                         <option value="Dominica">Dominica</option>
                         <option value="Dominican Republic">Dominican Republic</option>
                         <option value="East Timor">East Timor</option>
                         <option value="Ecuador">Ecuador</option>
                         <option value="Egypt">Egypt</option>
                         <option value="El Salvador">El Salvador</option>
                         <option value="Equatorial Guinea">Equatorial Guinea</option>
                         <option value="Eritrea">Eritrea</option>
                         <option value="Estonia">Estonia</option>
                         <option value="Ethiopia">Ethiopia</option>
                         <option value="Falkland Islands">Falkland Islands</option>
                         <option value="Faroe Islands">Faroe Islands</option>
                         <option value="Fiji">Fiji</option>
                         <option value="Finland">Finland</option>
                         <option value="France">France</option>
                         <option value="French Guiana">French Guiana</option>
                         <option value="French Polynesia">French Polynesia</option>
                         <option value="French Southern Ter">French Southern Ter</option>
                         <option value="Gabon">Gabon</option>
                         <option value="Gambia">Gambia</option>
                         <option value="Georgia">Georgia</option>
                         <option value="Germany">Germany</option>
                         <option value="Ghana">Ghana</option>
                         <option value="Gibraltar">Gibraltar</option>
                         <option value="Great Britain">Great Britain</option>
                         <option value="Greece">Greece</option>
                         <option value="Greenland">Greenland</option>
                         <option value="Grenada">Grenada</option>
                         <option value="Guadeloupe">Guadeloupe</option>
                         <option value="Guam">Guam</option>
                         <option value="Guatemala">Guatemala</option>
                         <option value="Guinea">Guinea</option>
                         <option value="Guyana">Guyana</option>
                         <option value="Haiti">Haiti</option>
                         <option value="Hawaii">Hawaii</option>
                         <option value="Honduras">Honduras</option>
                         <option value="Hong Kong">Hong Kong</option>
                         <option value="Hungary">Hungary</option>
                         <option value="Iceland">Iceland</option>
                         <option value="Indonesia">Indonesia</option>
                         <option value="India">India</option>
                         <option value="Iran">Iran</option>
                         <option value="Iraq">Iraq</option>
                         <option value="Ireland">Ireland</option>
                         <option value="Isle of Man">Isle of Man</option>
                         <option value="Israel">Israel</option>
                         <option value="Italy">Italy</option>
                         <option value="Jamaica">Jamaica</option>
                         <option value="Japan">Japan</option>
                         <option value="Jordan">Jordan</option>
                         <option value="Kazakhstan">Kazakhstan</option>
                         <option value="Kenya">Kenya</option>
                         <option value="Kiribati">Kiribati</option>
                         <option value="Korea North">Korea North</option>
                         <option value="Korea Sout">Korea South</option>
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
                         <option value="Macau">Macau</option>
                         <option value="Macedonia">Macedonia</option>
                         <option value="Madagascar">Madagascar</option>
                         <option value="Malaysia">Malaysia</option>
                         <option value="Malawi">Malawi</option>
                         <option value="Maldives">Maldives</option>
                         <option value="Mali">Mali</option>
                         <option value="Malta">Malta</option>
                         <option value="Marshall Islands">Marshall Islands</option>
                         <option value="Martinique">Martinique</option>
                         <option value="Mauritania">Mauritania</option>
                         <option value="Mauritius">Mauritius</option>
                         <option value="Mayotte">Mayotte</option>
                         <option value="Mexico">Mexico</option>
                         <option value="Midway Islands">Midway Islands</option>
                         <option value="Moldova">Moldova</option>
                         <option value="Monaco">Monaco</option>
                         <option value="Mongolia">Mongolia</option>
                         <option value="Montserrat">Montserrat</option>
                         <option value="Morocco">Morocco</option>
                         <option value="Mozambique">Mozambique</option>
                         <option value="Myanmar">Myanmar</option>
                         <option value="Nambia">Nambia</option>
                         <option value="Nauru">Nauru</option>
                         <option value="Nepal">Nepal</option>
                         <option value="Netherland Antilles">Netherland Antilles</option>
                         <option value="Netherlands">Netherlands (Holland, Europe)</option>
                         <option value="Nevis">Nevis</option>
                         <option value="New Caledonia">New Caledonia</option>
                         <option value="New Zealand">New Zealand</option>
                         <option value="Nicaragua">Nicaragua</option>
                         <option value="Niger">Niger</option>
                         <option value="Nigeria">Nigeria</option>
                         <option value="Niue">Niue</option>
                         <option value="Norfolk Island">Norfolk Island</option>
                         <option value="Norway">Norway</option>
                         <option value="Oman">Oman</option>
                         <option value="Pakistan">Pakistan</option>
                         <option value="Palau Island">Palau Island</option>
                         <option value="Palestine">Palestine</option>
                         <option value="Panama">Panama</option>
                         <option value="Papua New Guinea">Papua New Guinea</option>
                         <option value="Paraguay">Paraguay</option>
                         <option value="Peru">Peru</option>
                         <option value="Phillipines">Philippines</option>
                         <option value="Pitcairn Island">Pitcairn Island</option>
                         <option value="Poland">Poland</option>
                         <option value="Portugal">Portugal</option>
                         <option value="Puerto Rico">Puerto Rico</option>
                         <option value="Qatar">Qatar</option>
                         <option value="Republic of Montenegro">Republic of Montenegro</option>
                         <option value="Republic of Serbia">Republic of Serbia</option>
                         <option value="Reunion">Reunion</option>
                         <option value="Romania">Romania</option>
                         <option value="Russia">Russia</option>
                         <option value="Rwanda">Rwanda</option>
                         <option value="St Barthelemy">St Barthelemy</option>
                         <option value="St Eustatius">St Eustatius</option>
                         <option value="St Helena">St Helena</option>
                         <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                         <option value="St Lucia">St Lucia</option>
                         <option value="St Maarten">St Maarten</option>
                         <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                         <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                         <option value="Saipan">Saipan</option>
                         <option value="Samoa">Samoa</option>
                         <option value="Samoa American">Samoa American</option>
                         <option value="San Marino">San Marino</option>
                         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                         <option value="Saudi Arabia">Saudi Arabia</option>
                         <option value="Senegal">Senegal</option>
                         <option value="Seychelles">Seychelles</option>
                         <option value="Sierra Leone">Sierra Leone</option>
                         <option value="Singapore">Singapore</option>
                         <option value="Slovakia">Slovakia</option>
                         <option value="Slovenia">Slovenia</option>
                         <option value="Solomon Islands">Solomon Islands</option>
                         <option value="Somalia">Somalia</option>
                         <option value="South Africa">South Africa</option>
                         <option value="Spain">Spain</option>
                         <option value="Sri Lanka">Sri Lanka</option>
                         <option value="Sudan">Sudan</option>
                         <option value="Suriname">Suriname</option>
                         <option value="Swaziland">Swaziland</option>
                         <option value="Sweden">Sweden</option>
                         <option value="Switzerland">Switzerland</option>
                         <option value="Syria">Syria</option>
                         <option value="Tahiti">Tahiti</option>
                         <option value="Taiwan">Taiwan</option>
                         <option value="Tajikistan">Tajikistan</option>
                         <option value="Tanzania">Tanzania</option>
                         <option value="Thailand">Thailand</option>
                         <option value="Togo">Togo</option>
                         <option value="Tokelau">Tokelau</option>
                         <option value="Tonga">Tonga</option>
                         <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                         <option value="Tunisia">Tunisia</option>
                         <option value="Turkey">Turkey</option>
                         <option value="Turkmenistan">Turkmenistan</option>
                         <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                         <option value="Tuvalu">Tuvalu</option>
                         <option value="Uganda">Uganda</option>
                         <option value="United Kingdom">United Kingdom</option>
                         <option value="Ukraine">Ukraine</option>
                         <option value="United Arab Erimates">United Arab Emirates</option>
                         <option value="United States of America">United States of America</option>
                         <option value="Uraguay">Uruguay</option>
                         <option value="Uzbekistan">Uzbekistan</option>
                         <option value="Vanuatu">Vanuatu</option>
                         <option value="Vatican City State">Vatican City State</option>
                         <option value="Venezuela">Venezuela</option>
                         <option value="Vietnam">Vietnam</option>
                         <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                         <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                         <option value="Wake Island">Wake Island</option>
                         <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                         <option value="Yemen">Yemen</option>
                         <option value="Zaire">Zaire</option>
                         <option value="Zambia">Zambia</option>
                         <option value="Zimbabwe">Zimbabwe</option>
                      </select></td>
                     </tr>
                  
                 <tr>
                         <td></td>
                         <td align="right"><input type="submit"  value="Save" /></td>
                     </tr>
                      
                     </table>
                     ';
                      
         echo '</form>';
      
      
     echo "<br /><hr /><br />";
  
 echo '<a href="infoEdit.php">Select a different company</a>';
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo '<a href="../index.php">Quit - to homepage</a>'
  
  
  
  
 ?>
</div>
</div>

<div id="Progress" class="tabcontent">
<?php
include("dbConfig.php");
include("client_progress.php");

?>
<div class="table-responsive">
      <table>
       <thead><tr>
         <th>Application Status</th>
         <th>Admission Status (if applicable)</th>
         <th>Visa Status</th>
         <th>Flight Status</th>
         <th>Flight Date</th>
      </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['application_status']??''; ?></td>
      <td><?php echo $data['admission_status']??''; ?></td>
      <td><?php echo $data['visa_status']??''; ?></td>
      <td><?php echo $data['flight_status']??''; ?></td>
      <td><?php echo $data['flight_date']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
</div>
                                
							</div>
							
						</div>

					</div>

				</div>

				
			</main> <!-- .content -->

			<footer class="site-footer wow fadeInUp">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">About us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi asperiores magnam ducimus laboriosam soluta, odio doloribus, voluptas numquam facilis consectetur nam in repudiandae commodi odit iste sed doloremque repellat.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Helpful Links</h3>
									<ul class="list-arrow">
										<li><a href="#">Labore et dolore magnam</a></li>
										<li><a href="#">Dolore magnam</a></li>
										<li><a href="#">Magnam Labore et</a></li>
										<li><a href="#">Dolore mabore magnam</a></li>
										<li><a href="#">Et dolore magnam</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Helpful Links</h3>
									<ul class="list-arrow">
										<li><a href="#">Labore et dolore magnam</a></li>
										<li><a href="#">Dolore magnam</a></li>
										<li><a href="#">Magnam Labore et</a></li>
										<li><a href="#">Dolore mabore magnam</a></li>
										<li><a href="#">Et dolore magnam</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-customer-info">
									<h3 class="widget-title">Customer Service</h3>
									<img src="images/customer-service.jpeg" alt="" class="pull-left">
									<div class="cs-info">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptates pariatur vero.</p>
										<p>+1 421 458 321 <br> <a href="mailto:cs@companyname.com">cs@companyname.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="branding pull-left">
							<img src="images/logo-footer.png" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="index.html">European</a></h1>
							<small class="site-description">Travel & Tours</small>
						</div>

						<div class="contact-links pull-right">
							<a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> TRNC, Turkey</a>
							<a href="tel:+905428894827"><i class="fa fa-phone"></i> +90 542 889 4827</a>
							<a href="mailto:contact@europiantraveltours.com"><i class="fa fa-envelope"></i> contact@europiantraveltours.com</a>						</div>
					</div>
				</div>
				<div class="colophon">
					<div class="container">
						<p class="copy">Copyright 2014 Company Name, Designed by Themezy, All right reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/min/plugins-min.js"></script>
		<script src="js/min/app-min.js"></script>
		
	</body>

</html>