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
include("client_db.php");
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
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>First Name</th>
         <th>Middle Name</th>
         <th>Last Name</th>
         <th>Marital Status</th>
         <th>Email</th>
         <th>Phone Number</th>
         <th>Address 1</th>
         <th>Address 2</th>
         <th>City</th>
         <th>Country</th>
         <th>DOB</th>
         <th>Nationality</th>
         <th>Time created</th>
         <th></th>
     </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['f_name']??''; ?></td>
      <td><?php echo $data['m_name']??''; ?></td>
      <td><?php echo $data['l_name']??''; ?></td>
      <td><?php echo $data['marital_status']??''; ?></td>
      <td><?php echo $data['email_add']??''; ?></td>
      <td><?php echo $data['phone_line']??''; ?></td>
      <td><?php echo $data['address1']??''; ?></td>
      <td><?php echo $data['address2']??''; ?></td>
      <td><?php echo $data['city']??''; ?></td>
      <td><?php echo $data['country_of_residence']??''; ?></td>
      <td><?php echo $data['dob']??''; ?></td>
      <td><?php echo $data['nationality']??''; ?></td>
      <td><?php echo $data['created_at']??''; ?></td>
      <td><a href="admin_update_user.php" class="btn btn-danger ml-3">Update Progress</a></td>
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
</body>
</html>
</body>
</html>