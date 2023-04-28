<?php
// $emails = $_SESSION('email_add');
 
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
    //printf("Default database is %s.\n", $row[0]);
    $result->close();
 
     
     
     
}
 
 
 
 
if ($dbSuccess) {
         
            //collect the data with $_POST
             
         
            $firstName = $_POST["firstName"];   
            $middleName = $_POST["middleName"];   
            $lastName = $_POST["lastName"]; 
            $maritalStatus = $_POST["marital_status"];   
            $emails = $_POST["email"]; 
            $phoneLine = $_POST["phoneLine"];   
            $add1= $_POST["add1"]; 
            $add2 = $_POST["add2"]; 
            $city = $_POST["city"]; 
            $countryResidence = $_POST["countryResidence"]; 
            $dob = $_POST["dob"]; 
            $nationality = $_POST["nationality"]; 
           
         
     
 
         
            // SQL Query
            $cname__select =  "UPDATE profiles SET f_name = '$firstName' , m_name = '$middleName', l_name= '$lastName' ,marital_status = '$maritalStatus', email_add ='$emails' , phone_line = '$phoneLine', address1 = '$add1', address2 = '$add2', city = '$city', country_of_residence = '$countryResidence', dob = '$dob', nationality = '$nationality' WHERE email_add = '$emails'";
             
             
            //Execute Query
           // $cname__select_Query= mysqli_query($dbConnectionStatus,$cname__select);
             
             
             
            if ($dbConnectionStatus->query($cname__select) === TRUE) {
                echo '<script type="text/javascript">
            alert("Updates were Successful"); 
            window.location.href = "user_home.php";</script>'; 
            } else {
                echo "Error: ".$cname__select."<br>".$dbConnectionStatus->error;
            }
            
            $dbConnectionStatus->close();
         
 
}
 
/*echo "<br /><hr /><br />";
 
echo '<a href="infoEdit.php">Update another User</a>';
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo '<a href="/">Back to LocalHost</a><br />';
 */
?>