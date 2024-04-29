<?php
include"connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['password'];

    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT  username, password , role FROM users WHERE username=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify the hashed password
        if (password_verify($password, $row['password'])) {

             $role = $row['role'];
        switch ($role) {
            case 'admin':
                header("Location:home.php");
                break;
            case 'employee':
                header("Location:index1.php");
                break;
            case 'user':
                header("Location:index2.html");
                break;
            default:
                // Default redirect if role is not recognized
                header("Location:home.php");
                break;
        }
        exit(); 
    
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }

    // Close prepared statement
    $stmt->close();
}

$connection->close();
?>
