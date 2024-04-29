<?php
include"connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['usernames'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    

    // insert user record into the database
    $statement = mysqli_query($connection,"INSERT INTO users(fname,lname,username, password,role) VALUES('$fname','$lname','$username','$password','$role')");
    
    if ($statement) {
       echo "<script>alert('registered successfully');</script>";
        header("Location: login.html");
        
        exit(); // Stop further execution
    } else {
    	echo" error".$statement->error;
       //echo "<script>alert('fail to register! try again.');</script>";
    }
}
mysqli_close($connection);
?>
