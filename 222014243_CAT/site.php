<?php
include"connection.php";
if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sname = $_POST['Sname'];
    $location = $_POST['loc'];
    // insert new project record into the database
    $statement = mysqli_query($connection," INSERT INTO sites(SiteName,Location) VALUES('$sname','$location')");
    
    if ($statement) {
        echo "<script>alert('DATA Recorded successfully');</script>";
        header("Location:sitesret.php");
        
        exit(); // Stop further execution
    } else {
       
       echo "<script>alert('fail to record! try again.');</script>";
    }
}
mysqli_close($connection);
?>

