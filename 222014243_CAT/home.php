<!DOCTYPE html>
<html>
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

    <!-- Main Content Section -->
    <div>
        <section id="home">
            <h1>Welcome to Employee Orientation Tracker system</h1>
            <p>This is our webpage that is developed to help users perform their tasks through the internet and make work easy for our employees. If you are new here or want to use our system, enjoy.</p>
        </section>

        <section class="s">
            <h2>To our special people</h2>
            <p>Happy to have you with us.</p>
            <!-- Add more content here if needed -->
        </section>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 UR CBE web Tech. <i>All rights reserved. Designed and developed by Mr. Rukundo Shema Aloys. &reg; REG: 222014243</i></p>
    </footer>

    <!-- JavaScript Section -->
    <script>
        // Function to handle dynamic content loading
        // Add JavaScript logic here if needed
    </script>
</body>
</html>
