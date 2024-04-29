<?php
include"connection.php";
if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pname = $_POST['project'];
    $Department = $_POST['Department'];
    $empID= $_POST['employeeID'];
    $place = $_POST['place'];
    
    

    // insert new employee record into the database
    $statement = mysqli_query($connection," INSERT INTO projects(ProjectName,Department,EmployeeID,place) VALUES('$pname','$Department','$empID','$place')");
    
    if ($statement) {
        echo "<script>alert('DATA Recorded successfully');</script>";
        header("Location:projectret.php");
        
        exit(); // Stop further execution
    } else {
        echo" error".$statement->error;
       //echo "<script>alert('fail to register! try again.');</script>";
    }
}
mysqli_close($connection);
?>

