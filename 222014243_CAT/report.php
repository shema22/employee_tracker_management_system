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
<li><a href="report.php">Report</a></li>      
<li><a href="employeeret.php">Employee</a></li>
<li><a href="projectret.php">Project</a></li>
<li><a href="sitesret.php">Sites</a></li>
<li><a href="Orientationret.php">Orientation session</a></li>
<li><a href="registerret.php">users</a>
<li><a href="logout.php" class="logout-link ">logout</a>

</li></ul>
</nav>
</header>
    </div>
    <section id="home">
    <center>
        <h3> Dail Report in EOT system</h3>

    </center></section>
</body>
</html>
<?php
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
// Retrieve report 's data from the database
$sql = "SELECT employee.FirstName, employee.Lastname, employee.Position, projects.ProjectName,projects.department, sites.Location, orientationsession.SessionTime  FROM employee  INNER JOIN orientationsession ON orientationsession.conductedBy = employee.EmployeeID INNER JOIN projects ON orientationsession.projectID = projects.projectID INNER JOIN sites ON orientationsession.siteID = sites.siteID";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo "<tr bgcolor='skybule'><th> First Name</th><th>Last Name</th><th>Position</th><th>Project Name</th><th>Department</th><th>location</th><th>Time Job done</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['Lastname'] . "</td>";
        echo "<td>" . $row['Position'] . "</td>";
        echo "<td>" . $row['ProjectName'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
         echo "<td>".$row['SessionTime']."/Hours"."</td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "No records found";
}

$connection->close();
?>

