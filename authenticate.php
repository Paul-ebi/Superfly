<?php      
    /*include('dbConfig.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from admin_user where username = '$username' and passcode = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";  
            header('Location: welcome.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     */
        
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','superfly') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM profiles WHERE email_add='" . $_POST["user"] . "' and passcode = '". $_POST["pass"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email_add"] = $row['email_add'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["email_add"])) {
    header("Location:user_home.php");
    }

?>