<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>orientation-session-page</title>

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
      <a href="Orientationview.php" style="padding: 10px; color: white; background-color:; text-decoration: none; margin-right: 15px;">Orientation session</a>
    </li>
<li><a href="logout.php" class="logout-link ">logout</a>

</li></ul>
</nav>
</header>
    </div>
    <section id="home">
    <center><h4> welcome to Employee Orientation Tracker system</h4>
        <h5>Data recorded in oreintation session</h5>

    </center></section>
</body>
</html>
<!--php code-- to retrieve data -->
<?php
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
// Retrieve orientation session's data from the database
$sql = "SELECT * FROM orientationsession";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo "<tr bgcolor='skybule'><th> Session ID</th><th>Session Date</th><th>Session Time</th><th>Site ID</th><th>conductedBy</th><th>project ID</th><th>action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['SessionID'] . "</td>";
        echo "<td>" . $row['SessionDate'] . "</td>";
        echo "<td>" . $row['SessionTime'] . "</td>";
        echo "<td>" . $row['SiteID'] . "</td>";
        echo "<td>" . $row['conductedBy'] . "</td>";
        echo "<td>" . $row['projectID'] . "</td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "No records found";
}

$connection->close();
?>

