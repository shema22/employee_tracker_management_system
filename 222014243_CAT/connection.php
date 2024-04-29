<?php
//connectivity of database.
$connection = new mysqli("localhost", "222014243", "222014243", "employee_orientation_tracker");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
