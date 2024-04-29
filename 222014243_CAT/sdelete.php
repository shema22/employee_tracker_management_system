<?php 
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if(isset($_REQUEST['SiteID'])) {
    $siteID = $_REQUEST['SiteID'];
    
    // Prepare and execute the DELETE statement
    $st = $connection->prepare("DELETE FROM sites WHERE SiteID=?");
    $st->bind_param("i", $SiteID);
    if ($st->execute()) {
   
        header('Location:sitesret.php');
    } else {
        echo "Error deleting data: " . $st->error;
    }

    $st->close();
}
$connection->close();
?>