<?php 
//update file for employee table
include"connection.php"; // connectivity
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_POST['submit'])) {
$id = $_GET['EmployeeID'];
$fname = $_POST['FirstName'];
$lname=$_POST['Lastname'];
$pos = $_POST['Position'];
$contact = $_POST['contactNumber'];
$Email = $_POST['Email'];
$update =$connection->query("UPDATE employee SET FirstName = '$fname',Lastname = '$lname',Position = '$pos',contactNumber = '$contact',Email = '$Email' WHERE EmployeeID = '$id'");

    if ($update) {
    	echo '<script>alert("Employee has been updated")</script>';
        header("location:employeeret.php");
    }else{
        echo "error".mysqli_error($connection);
    }
}
if (isset($_GET['EmployeeID'])) {
  $id = $_GET['EmployeeID'];
  // query to retrieve data selected from employee table
$select = $connection->query("SELECT * FROM employee WHERE EmployeeID = $id");
$row = mysqli_fetch_array($select);
}
 ?>
 <!-- html section-->
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
        input[type='Email'],select{
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
        <h3> Employee Update Form </h3>
        <br>
    <input type="hidden" name="EmployeeID" value="<?php echo $row['EmployeeID']; ?>">
    <br>
    
    <input type="text" class="form-control col-sm-12 " name="FirstName" value="<?php echo $row['FirstName']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="Lastname" value="<?php echo $row['Lastname']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="Position" value="<?php echo $row['Position']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="contactNumber" value="<?php echo $row['contactNumber']; ?>">
    <br>
    <input type="email" class="form-control col-sm-12 " name="Email" value="<?php echo $row['Email']; ?>">
    <!-- Repeat this for each field you want to update -->
    <input type="submit" name="submit" value="Update">
</form>
</div>
<footer>
      <p>&copy; 2024 UR CBE web Tech. <i> alright reserverd. designed and developed by Mr.Rukundo shema Aloys . &reg; REG: 222014243</p>
</footer>	
</body>	
</html>
