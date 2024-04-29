<?php
// employee update file
include"connection.php";// include connectivity
if (!isset($_SESSION['username'])) {
 header("location:index.php");
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    

    // insert new employee record into the database
    $statement = mysqli_query($connection,"INSERT INTO employee(FirstName,Lastname,Position, contactNumber,Email) VALUES('$fname','$lname','$position','$contact','$email')");
    
    if ($statement) {
        echo "<script>alert('DATA Recorded successfully');</script>";
        header("Location:employeeret.php");
        
        exit(); // Stop further execution
    } else {
        echo" error".$statement->error;
       echo "<script>alert('fail to register! try again.');</script>";
    }
}
mysqli_close($connection);
?>

