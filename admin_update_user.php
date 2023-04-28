<?php
session_start();
/*
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["username"]) || $_SESSION["username"] !== true){
    header("location: admin_login.php");
    exit;
}

include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: admin_login.php');
}
*/
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="container">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["uname"]); ?></b>. Welcome to our site.</h1>
    <p>
        <!--<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>-->
        <a href="admin_logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</div>
    <?php
include("updating_client_db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-14">
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
       $cname__select = "SELECT * FROM progress WHERE email_add ='$email_add'";
          
          
             // Execute Query
              
        $cname__select_Query= mysqli_query($dbConnectionStatus,$cname__select);
         
             // While there is info in row
              
         while($rows=mysqli_fetch_assoc($cname__select_Query)){
                     
             
                        $Id = $rows['id'];
                        $application_status = $rows['application_status'];
                        $admission_status = $rows['admission_status'];
                        $visa_status = $rows['visa_status'];
                        $flight_status = $rows['flight_status'];
                        $flight_date = $rows['flight_date'];
                        $emails = $rows['email_add'];
                        
                                            
                 
                     
                     
               }
                
              
          
              
              
              
                  
     
  
     echo '<h2 style="font-family: arial, helvetica, sans-serif;" >
                 User Information Update Form
             </h2>';
      
         //      FORM postInfo User 
         echo '<form name="postCompany" action="admin_progress_Update.php" method="post">';
          
                 echo '<input type="hidden" name="email_add" value="'.$email_add.'"/>';
                 echo '
                 <table>
                     <tr>
                     <td>Application Status</td>
                     <td><select name="application_status" id="application_status" required>
                     <option value="Approved">Approved</option>
                     <option value="Not Approved">Not Approved</option>                     
                 </select></td>
                     </tr>
                     <tr>
                     <td>Admission Status</td>
                     <td><select name="admission_status" id="admission_status" required>
                     <option value="Approved">Approved</option>
                     <option value="Not Approved">Not Approved</option>    
                 </select></td>
                     </tr>
                     <tr>
                     <td>Visa Status</td>
                     <td><select name="visa_status" id="visa_status" required>
                     <option value="Approved">Approved</option>
                     <option value="Not Approved">Not Approved</option>    
                 </select></td>
                     </tr>
                     <tr>
                         <td>Flight Status</td>
                         <td><select name="flight_status" id="flight_status" required>
                         <option value="Booked">Booked</option>
                     <option value="Not Booked">Not Booked</option>  
                     </select></td>
                     </tr>           
                     <tr>
                         <td>Flight Date</td>
                         <td><input type="date" name="flight_date" value="'.$flight_date.'"/></td>
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


</div>
</div>
</body>
</html>
</body>
</html>