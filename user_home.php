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
							<h1 class="site-title"><a href="index.html">European</a></h1>
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
  
  <form enctype="multipart/form-data" action="add_profile.php" method="post">
									  <!--<form action="upload.php" method="post" enctype="multipart/form-data">-->
									   <p><input type="file"  accept="image/*" name="file_array[]" id="file"  onchange="loadFile(event)" style="display: none;" required></p>
									   <p><label for="file" style="cursor: pointer;"><b>Upload Passport Photo</b></label></p>
								<p><img id="output" width="150" height="180" /></p>
								<p>
								<script>
								var loadFile = function(event) {
									var image = document.getElementById('output');
									image.src = URL.createObjectURL(event.target.files[0]);
								};
								</script>
									  <div class="input-group input-group-icon">
                                      <label for="firstname">First Name</label><br>
										<input type="text" name="firstname" placeholder="First Name" required/>
										 </div><br>
                                      <div class="input-group input-group-icon">
                                      <label for="middlename">Middle Name</label><br>
										<input type="text" name="middlename" placeholder="Middle Name" required/>
										</div><br>
                                      <div class="input-group input-group-icon">
                                      <label for="lastname">Last Name (Surname)</label><br>
										<input type="text" name="lastname" placeholder="Last Name (Surname)" required/>
										</div><br>
									  <div class="input-group input-group-icon">
                                      <label for="email">Email</label><br>
										<input type="email" name="email" placeholder="Email Adress" required/>
										</div><br>
                                        <div class="input-group input-group-icon">
                                      <label for="dob">Date of Birth</label><br>
										<input type="date" name="dob" placeholder="Date of Birth" required/>
										</div><br>
									  <div class="input-group input-group-icon">
                                      <label for="c_address1">Address 1</label><br>
                                        <textarea id="c_address1" name="c_address1" rows="4" cols="50"></textarea>
									  </div><br>
                                      <div class="input-group input-group-icon">
                                      <label for="c_address1">Address 2</label><br>
                                        <textarea id="c_address2" name="c_address2" rows="4" cols="50"></textarea>
										<!--input type="textarea" name="c_address2" placeholder="Adress 2" required/>-->
									  </div><br>
									  <div class="input-group input-group-icon">
                                        <label for="c_address1">Phone Number</label><br>
										<input type="tel" name="phone" placeholder="Phone Number" required/>
										</div><br>
									  <div class="input-group input-group-icon">
                                        <label for="marital_status">Marital Status</label><br>
                                        <select name="marital_status" id="marital_status" required>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="seperated">Seperated</option>
                                            <option value="widowed">Widowedi</option>
                                            <option value="engaged">Engaged</option>
                                        </select>
										</div><br>
									  <div class="input-group input-group-icon">
                                      <label for="nationality">Nationality</label><br>
                                      <select id="nationality" name="nationality">
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
</select></div><br>
									<div class="row">
									  <h4>Terms and Conditions</h4>
									  <div class="input-group">
										<input id="terms" name="terms" type="checkbox" required/>
										<label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
									  </div>
									</div>
									
									  <input type="submit" name="submit" class="button" value="Submit">
									  <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>-->
								  </form>
  </p>
</div>

<div id="Documentation" class="tabcontent">
<form enctype="multipart/form-data" action="add_docs.php" method="post">
                        <div class="input-group input-group-icon">
                        <label for="passport_number">Passport Number</label><br>
						<input type="text" name="passport_number" placeholder="Passport Number" required/>
						</div><br>
                        <div class="input-group input-group-icon">
                        <label for="result1">Certificate name</label><br>
						<input type="text" name="result1" placeholder="e.g WAEC, NECO, GCE" required/>
						<input type="file" name="file_array[]" required>
                         </div><br>
                        <div class="input-group input-group-icon">
                        <label for="result2">Certificate name</label><br>
						<input type="text" name="result2" placeholder="e.g OND, HND, BSc, MSc"/>
						<input type="file" name="file_array[]" required>
                         </div><br>
                        <div class="input-group input-group-icon">
                        <label for="cert3">Any Other relevant certificate</label><br>
						<input type="text" name="result3" placeholder="e.g. IELTS, TOEFL" />
						<input type="file" name="file_array[]" required>
                         </div><br>
                         <div class="input-group input-group-icon">
                        <label for="birth_cert">Birth certificate</label><br>
						<input type="file" name="file_array[]" required>
                         </div><br>
                         <div class="input-group input-group-icon">
                        <label for="international_passport">International Passport</label><br>
						<input type="file" name="file_array[]" required>
                         </div><br>
                         <input type="submit" name="submit" class="button" value="Submit">
                            </form>
</div>

<div id="Application" class="tabcontent">
<form enctype="multipart/form-data" action="add_application.php" method="post">
                        <div class="input-group input-group-icon">
                        <label for="purpose">Purpose of Travel</label><br>
						<select name="purpose" id="purpose" required>
                                            <option value="tourism">Tourism</option>
                                            <option value="education">Education</option>
                                            <option value="business_others">Business and Others</option>                                     
                                        </select>									
						</div><br>
                        <div class="input-group input-group-icon">
                        <label for="destination_country">Country of Destination</label><br>
						<select name="destination_country" id="destination_country" required>
                                            <option value="canada">Canada</option>
                                            <option value="cyprus">Cyprus</option> 
                                            <option value="france">France</option>
                                            <option value="germany">Germany</option>
                                            <option value="italy">Italy</option> 
                                            <option value="north_cyprus">North Cyprus</option>
                                            <option value="poland">Poland</option> 
                                            <option value="romania">Romania</option> 
                                            <option value="russia">Russia</option> 
                                            <option value="south_africa">South Africa</option> 
                                            <option value="turkey">Turkey</option>  
                                            <option value="uk">United Kingdom</option> 
                                            <option value="usa">USA</option>                                   
                                        </select>									
						</div><br>
                        <div class="input-group input-group-icon">
                        <label for="year_of_travel">Year of Travel</label><br>
						<select name="year_of_travel" id="year_of_travel" required>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option> 
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>                                                                                                         
                                        </select>									
						</div><br>
                        <div class="input-group input-group-icon">
                        <label for="institution">Institution</label><br>
						<select name="institution" id="institution" required>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option> 
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>                                                                                                         
                                        </select>									
						</div><br>
                         <div class="input-group input-group-icon">
                        <label for="application_receipt">Application Fee Receipt</label><br>
						<input type="file" name="file_array[]" required>
                         </div><br>
                         <input type="submit" name="submit" class="button" value="Submit">
                            </form>
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