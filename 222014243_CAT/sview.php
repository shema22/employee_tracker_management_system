<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>site page</title>

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
    <center><h1> welcome to Employee Orientation Tracker system</h1>
    	<h2>Site recorded in site</h2>

    </center></section>
</body>
</html>




<?php
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
// Retrieve site's data from the database
$sql = "SELECT * FROM sites";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo "<tr bgcolor='skybule'><th> site ID</th><th>site Name</th><th>location</th><th>action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['SiteID'] . "</td>";
        echo "<td>" . $row['SiteName'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "No records found";
}

$connection->close();
?>
