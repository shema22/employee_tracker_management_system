<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>retrive-site</title>
    <link rel="stylesheet" type="text/css" href="style.css" title="sytle1" media="tv,projection,handheld,screen,print">
<style>
    .logout-link {
      position: absolute;
      top: 15px; 
      right: 20px; 
      color: beige;
      cursor: pointer;  
    }
    
  </style>
</head>
<body>
<div>
        <header>
<nav>
 <ul>    
<li><a href="report.php">Home</a></li>      
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="employeeret.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Employee</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="employee.html">Add NEw Employee</a>
      </div>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="projectret.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Projects</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="project.html">Add NEw Porject</a>
      </div>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="sitesret.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Sites</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="site.html">Add NEw site</a>
      </div>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="Orientationret.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Orientation session</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="orientation.html">Add NEw Orientation session</a>
      </div>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="registerret.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">users</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="register.html">Add NEw user</a>
      </div>
    </li>
<li><a href="logout.php" class="logout-link ">logout</a>

</li></ul>
</nav>
</header>
    </div>
    <section>
    <center>
        <h5>Data recorded from users </h5>

    </center></section>
</body>
</html>

<?php
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
// Retrieve users 's data from the database
$sql = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo "<tr bgcolor='skybule'><th> user ID</th><th>First Name</th><th>Last Name</th><th>username</th><th>password</th><th>role</th><th>action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['userid'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['role'] . "</td>";
         echo "<td> <a href='uupdate.php?userid=".$row["userid"]."'><input type='submit' value='update' style='background-color:lightskyblue; color:white;''></a>&nbsp;&nbsp;&nbsp;<a href='rdelete.php?userid=".$row["userid"]."'><input type='submit' value= 'delete' style='background-color:red; color:white;'></a></td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "No records found";
}

$connection->close();
?>
