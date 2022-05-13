<?php      

        
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','superfly') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM admin_user WHERE uname='" . $_POST["user"] . "' and passcode = '". $_POST["pass"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["uname"] = $row['uname'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["uname"])) {
    header("Location:admin_home.php");
    }

?>