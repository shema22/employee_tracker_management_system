<?php 
//delete file from employee table
include"connection.php";// include connectivity
if (isset($_GET['EmployeeID'])) {
	//querry to delete data from table employee
$sql = $connection->query("DELETE FROM employee WHERE EmployeeID = '$_GET[EmployeeID]'");
if($sql){
	//leads location
		header("location:employeeret.php");
}else{
		echo"not deleted".mysqli_error($conn);
	}
}
 ?>