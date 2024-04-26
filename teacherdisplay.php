<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Teachers</title>
    <link rel="stylesheet" href="css/t.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
</head>
<body>
    <div class="header1">
        <div class="logo">Bschool</div>
            <div class="links">
               <a href="">Home</a>
               <a href="student.php">Students</a>
               <a href="about.html">About Us</a>
               <a href="contact.html">Contact</a>
               <a href="logout.php" style="color:orange;">Log Out</a>             
        </div>
    </div>
   <h1>Our Teachers</h1> 
   <div class="all">
    <?php
    require "config/connection.php";
    $query = "SELECT * FROM teacher";
    $result = mysqli_query($connect,$query);
    while($rows = mysqli_fetch_assoc($result)){
    ?>
    <div class="teacher">
        <div class="photo"></div>
        <h2>Names :<?php echo " ",$rows['teacher_name'];?> </h2>
        <h2>Subject :<?php echo " ",$rows['subject'];?> </h2>

    </div>
    <?php    
    }
    ?>
   </div>
</body>
</html>