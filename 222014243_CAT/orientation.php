<?php
include"connection.php";
if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sdate = $_POST['sdate'];
    $stime = $_POST['stime'];
    $sid = $_POST['sid'];
    $empid = $_POST['empid'];
    $pid = $_POST['pid'];
    

    // insert new orientation session record into the database
    $statement = mysqli_query($connection,"INSERT INTO orientationsession(SessionDate,SessionTime,SiteID,conductedBy,projectID) VALUES('$sdate','$stime','$sid','$empid','$pid')");
    
    if ($statement) {
       echo "<script>alert('DATA Recorded successfully');</script>";
        header("Location:orientationret.php");
        
        exit(); // Stop further execution
    } else {
        echo" error".$statement->error;
       //echo "<script>alert('fail to register! try again.');</script>";
    }
}
mysqli_close($connection);
?>

