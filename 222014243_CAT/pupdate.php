<?php 
session_start();
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_POST['submit'])) {
$id = $_GET['projectID'];
$pname = $_POST['projectName'];
$Department=$_POST['department'];
$empID = $_POST['EmployeeID'];
$place= $_POST['place'];
$update =$connection->query("UPDATE projects SET ProjectName = '$pname',department = '$Department',EmployeeID = '$empID',place = '$place' WHERE projectID = '$id'");

    if ($update) {
    	echo '<script>alert("Employee has been updated")</script>';
        header("location:projectret.php");
    }else{
        echo "error".mysql_error($connection);
    }
}
if (isset($_GET['projectID'])) {
  $id = $_GET['projectID'];
$select = $connection->query("SELECT * FROM projects WHERE projectID = $id");
$row = mysqli_fetch_array($select);
}
 ?>
<html>	
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="style.css" title="sytle1" media="tv,projection,handheld,screen,print">
      <style>
        span{
            color: tomato;
            font-size: 25pt !important;
        }
        h2{
            color: white;
            font-size: 30pt !important;
        }
        h1{
            text-align: center;
            margin-top: 2rem;
            color: gray;
            font-weight: bold;
            
        }
        body{
            background-color: gray;
        }
        form{
            background-color: beige;
            border-radius: 8px;
            border-style: double;
            box-shadow: 12px 2px 21px 15px;
        }
        h3{
            font-weight: bold !important;
            font-family: century gothic !important;
            margin-top: 2rem;
        }
        
        input[type='text'],
        input[type='password'],select{
            display: inline-block;
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 2px solid darkred;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .input-wraper{
            position: relative;
        }
        .input-wraper i{
            position: absolute;
            display: inline-block;
            right: 10px;
            top: 19px;
            transform: translateY(-50%);
        }
        p a{
            font-family: century gothic;
            color: maroon;
            font-weight: bolder;
        }
      </style>

</head>
<body>
<div class="form-group">
    <form method="POST" action="" class="col-md-3 mb-2">
        <h3> project Update Form </h3>
        <br>
    <input type="hidden" name="projectID" value="<?php echo $row['projectID']; ?>">
    <br>
    
    <input type="text" class="form-control col-sm-12 " name="projectName" value="<?php echo $row['ProjectName']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="department" value="<?php echo $row['department']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="EmployeeID" value="<?php echo $row['EmployeeID']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="place" value="<?php echo $row['place']; ?>">
    <br>
    <!-- Repeat this for each field you want to update -->
    <input type="submit" name="submit" value="Update">
</form>
</div>
	<footer>
      <p>&copy; 2024 UR CBE web Tech. <i> alright reserverd. designed and developed by Mr.Rukundo shema Aloys . &reg; REG: 222014243</p>
</footer>
</body>	
</html>
