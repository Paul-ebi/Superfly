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
             
         
            $application_status = $_POST["application_status"];   
            $admission_status = $_POST["admission_status"];   
            $visa_status = $_POST["visa_status"]; 
            $flight_status = $_POST["flight_status"];  
            $flight_date = $_POST["flight_date"];  
            $emails = $_POST["email_add"]; 
            
           
         
     
 
         
            // SQL Query
            $cname__select =  "UPDATE progress SET application_status = '$application_status' , admission_status = '$admission_status', visa_status= '$visa_status' ,flight_status = '$flight_Status', flight_date ='$flight_date' WHERE email_add = '$emails'";
             
             
            //Execute Query
           // $cname__select_Query= mysqli_query($dbConnectionStatus,$cname__select);
             
             
             
            if ($dbConnectionStatus->query($cname__select) === TRUE) {
                echo '<script type="text/javascript">
            alert("Updates were Successful"); 
            window.location.href = "admin_home.php";</script>'; 
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