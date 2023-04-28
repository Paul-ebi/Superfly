<?php
include_once 'dbConfig.php';
if(isset($_POST['submit']))
{    
     $email = $_POST['user'];
     $passcode = $_POST['pass'];
     $sql = "INSERT INTO profiles (email_add, passcode, created_at)
     VALUES ('$email','$passcode', now())";
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("You have succesfully Registered to Europia Travel and Tours Agency");
        window.location.href = "login.html";</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

/*include_once 'dbConfig.php';
// File upload path
if(isset($_FILES['file_array'])){
    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++) {
       if (move_uploaded_file($tmp_name_array[$i], "uploads/".$name_array[$i])){
           //echo '<script>alert("Uploads were successful");</script>';
           //window.location.href = "index.html";
           echo '<script type="text/javascript">
            alert("Uploads were Successful"); 
            window.location.href = "index.html";</script>';   
       } else {
           echo "upload file failed to move for". $name_array[$i]."<br>";
       }
       }
    }*/


?>