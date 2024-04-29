<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>project page</title>

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
<li><a href="index1.php">Home</a></li>      
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="employeeview.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Employee</a>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="pview.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Projects</a>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="sview.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Sites</a>
    </li>
<li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="orientationview.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Orientation session</a>
    </li>
<li><a href="logout.php" class="logout-link ">logout</a>

</li></ul>
</nav>
</header>
    </div>
    <section id="home">
    <center><h4> welcome to Employee Orientation Tracker system</h4>
        <h5>Date recorded in project</h5>

    </center></section>
</body>
</html>

<?php
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
// Retrieve project 's data from the database
$sql = "SELECT * FROM projects";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo "<tr bgcolor='skybule'><th> Project ID</th><th>Project Name</th><th>Department</th><th>Employee ID</th><th>place</th><th>action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['projectID'] . "</td>";
        echo "<td>" . $row['ProjectName'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "<td>" . $row['EmployeeID'] . "</td>";
        echo "<td>" . $row['place'] . "</td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "<i>No records found</i>";
}

$connection->close();
?>
