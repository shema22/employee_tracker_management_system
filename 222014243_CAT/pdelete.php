<?php 
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_GET['projectID'])) {
	$sql = $connection->query("DELETE FROM projects WHERE projectID = '$_GET[projectID]'");


	if($sql){
		
		header("location:projectret.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>