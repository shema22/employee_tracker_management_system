<!DOCTYPE html>
<html>
<!--rukundo shema aloys 222014243-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" title="sytle1" media="tv,projection,handheld,screen,print">
    <!-- Internal CSS -->
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
        <!-- Header Section -->
        <header>
            <nav>
                <ul>    
                    <!-- Navigation Links -->
                    <li><a href="index.php">Home</a></li>      
                    <li><a href="#">Employee</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Sites</a></li>
                    <li><a href="#">Orientation session</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#" class="logout-link">Logout</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <!-- Main Content Section -->
    <div>
        <section id="home">
            <h1>Welcome to Employee Orientation Tracker system</h1>
            <p>This is our webpage that is developed to help users perform their tasks through the internet and make work easy for our employees. If you are new here or want to use our system, enjoy.</p>
        </section>

        <section class="s">
            <h2>To our special people</h2>
            <p>Happy to have you with us.<br> Do you want to use our EOT system? 
                <a href="#" id="login-link"><input type="button" value="Login"></a> 
                &nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" id="register-link"><input type="button" value="Register"></a>
            </p>
        </section>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 UR CBE web Tech. <i>All rights reserved. Designed and developed by Mr. Rukundo Shema Aloys. &reg; REG: 222014243</i></p>
    </footer>

    <!-- JavaScript Section -->
    <script>
        // Function to handle dynamic content loading
        document.getElementById("login-link").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            // Implement logic to load login content dynamically
            window.location.href = "login.html"; // Example: Redirect to login page
        });

        document.getElementById("register-link").addEventListener("click", function(event) {
            event.preventDefault();
            // Implement logic to load register content dynamically
            window.location.href = "register.html"; // Example: Redirect to register page
        });
    </script>
</body>
</html>
