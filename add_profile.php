<?php
include_once 'dbConfig.php';
if(isset($_POST['submit']))
{    
   
   $firstName = $_POST['firstname'];
   $middleName = $_POST['middlename'];
   $lastName = $_POST['lastname'];
   $emails = $_POST['email'];   
   $dob = $_POST['dob'];   
   $address1 = $_POST['c_address1'];
   $address2 = $_POST['c_address2'];
   $city = $_POST['city'];
   $country = $_POST['country_of_residence'];
   $phoneLine = $_POST['phone'];
   $maritalStatus = $_POST['marital_status'];
   $nationality = $_POST['nationality'];
     $sql = "INSERT INTO profiles (f_name, m_name, l_name, email_add,  dob, address1, address2, city, country_of_residence, phone_line, marital_status, nationality)
     VALUES ('$firstName', '$middleName', '$lastName', '$emails', '$dob', '$address1', '$address2','$city','$country','$phoneLine','$maritalStatus', '$nationality')";
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record was added successful!");
        window.location.href = "user_home.php";</script>';
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
