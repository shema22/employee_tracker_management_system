<!-- html section starts-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>retrive-employee</title>
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
<li><a href="report.php">Report</a></li>      
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
    <section id="home">
    <center>
     <h5>Data recorded in Employees</h5>

    </center></section>
</body>
</html>
<!-- php content-->
<?php
include"connection.php"; 
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
// Retrieve employee's data from the database
$sql = "SELECT * FROM employee";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo"<center><br>
    <a href='employee.html'><input type='submit'value='ADD Employee' name='employee
    ' style='width: 10%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      background-color: seagreen;
      border-color: orange;
      color:white;
      '></a>";
    echo "<tr bgcolor='skybule'><th> Employee ID</th><th>First Name</th><th>Last Name</th><th>Position</th><th>contact number</th><th>Email</th><th>action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['EmployeeID'] . "</td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['Lastname'] . "</td>";
        echo "<td>" . $row['Position'] . "</td>";
        echo "<td>" . $row['contactNumber'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
         echo "<td> <a href='eupdate.php?EmployeeID=".$row["EmployeeID"]."'><input type='submit' value='update' style='background-color:lightskyblue; color:white;''></a>&nbsp;&nbsp;&nbsp;<a href='edelete.php?EmployeeID=".$row["EmployeeID"]."'><input type='submit' value= 'delete' style='background-color:red; color:white;'></a></td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "No records found";
}

$connection->close();
?>
