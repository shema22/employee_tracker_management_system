<?php 
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_POST['submit'])) {
$id = $_GET['SessionID'];
$sdate = $_POST['SessionDate'];
$stime=$_POST['SessionTime'];
$site = $_POST['SiteID'];
$p= $_POST['conductedBy'];
$po = $_POST['projectID'];
$update =$connection->query("UPDATE orientationsession SET SessionDate = '$sdate',SessionTime = '$stime',SiteID = '$site',conductedBy = '$p',projectID = '$po' WHERE SessionID = '$id'");

    if ($update) {
    	echo '<script>alert("oorientation session has been updated")</script>';
        header("location:Orientationret.php");
    }else{
        echo "error".mysql_error($connection);
    }
}
if (isset($_GET['SessionID'])) {
  $id = $_GET['SessionID'];
$select = $connection->query("SELECT * FROM orientationsession WHERE SessionID= $id");
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
<div>
    <form method="POST" action="">
        <h3> orientation session Update Form </h3>
        <br>
    <input type="hidden" name="SessionID" value="<?php echo $row['SessionID']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    
    <input type="Date" class="f " name="SessionDate" value="<?php echo $row['SessionDate']; ?>"style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="number" class="f " name="SessionTime" value="<?php echo $row['SessionTime']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="number" class="f " name="SiteID" value="<?php echo $row['SiteID']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="number" class="f " name="conductedBy" value="<?php echo $row['conductedBy']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="number" class="f " name="projectID" value="<?php echo $row['projectID']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;"><br>
    <!-- Repeat this for each field you want to update -->
    <input type="submit" name="submit" value="Update" style=" width: 10%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      background-color: lightseagreen;
      color: white;
      border-color: orange;
      ">
</form>
</div>
  <footer>
      <p>&copy; 2024 UR CBE web Tech. <i> alright reserverd. designed and developed by Mr.Rukundo shema Aloys . &reg; REG: 222014243</p>
</footer>	
</body>	
</html>
