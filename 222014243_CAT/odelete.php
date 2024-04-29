<?php 
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_GET['SessionID'])) {
	//sql querry to delete data from orientationsession
	$sql = $connection->query("DELETE FROM orientationsession WHERE SessionID ='$_GET[SessionID]'");


	if($sql){
		header("location:Orientationret.php");
	}else{
		echo"not deleted".mysqli_error($conn);
	}
}
 ?>