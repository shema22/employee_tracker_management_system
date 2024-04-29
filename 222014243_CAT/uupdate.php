<?php 
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_POST['submit'])) {
$id = $_GET['userid'];
$fname = $_POST['fname'];
$lname=$_POST['lname'];
$username = $_POST['username'];
$password= $_POST['password'];
$role = $_POST['role'];
$update =$connection->query("UPDATE users SET fname = '$fname',lname = '$lname',username = '$username',password = '$password',role = '$role' WHERE userid = '$id'");

    if ($update) {
    	echo '<script>alert("user has been updated")</script>';
        header("location:registerret.php");
    }else{
        echo "error".mysql_error($connection);
    }
}
if (isset($_GET['userid'])) {
  $id = $_GET['userid'];
$select = $connection->query("SELECT * FROM users WHERE userid = $id");
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
        <h3> User Update Form </h3>
        <br>
    <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>">
    <br>
    
    <input type="text" class="form-control col-sm-12 " name="fname" value="<?php echo $row['fname']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="lname" value="<?php echo $row['lname']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="username" value="<?php echo $row['username']; ?>">
    <br>
    <input type="password" class="form-control col-sm-12 " name="password" value="<?php echo $row['password']; ?>">
    <br>
    <input type="text" class="form-control col-sm-12 " name="role" value="<?php echo $row['role']; ?>">
    <!-- Repeat this for each field you want to update -->
    <input type="submit" name="submit" value="Update">
</form>
</div>
<footer>
      <p>&copy; 2024 UR CBE web Tech. <i> alright reserverd. designed and developed by Mr.Rukundo shema Aloys . &reg; REG: 222014243</p>
</footer>	
</body>	
</html>
