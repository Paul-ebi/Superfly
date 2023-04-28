<?php
include_once 'dbConfig.php';
if(isset($_POST['submit']))
{    
     $fullname = $_POST['fullname'];
     $email = $_POST['email'];
     $address = $_POST['c_address'];
     $phone = $_POST['phone'];
     $marital_status = $_POST['marital_status'];
     $occupants = $_POST['occupants'];
     $duration = $_POST['duration'];
     $date_of_entry = $_POST['date_of_entry'];
     $smoker = $_POST['smoker'];
     $pets = $_POST['pets'];
     $dob = $_POST['dob'];
     $ssn = $_POST['ssn'];
     $credit_score = $_POST['credit_score'];
     $sql = "INSERT INTO client (fullname,email,c_address,phone,marital_status,occupants,duration,date_of_entry,smoker,pets,dob,ssn,credit_score)
     VALUES ('$fullname','$email','$address','$phone','$marital_status','$occupants','$duration','$date_of_entry','$smoker','$pets','$dob','$ssn','$credit_score')";
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record was added successful!")</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

include_once 'dbConfig.php';
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
    }


?>