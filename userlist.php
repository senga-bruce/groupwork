<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List | Page 9</title>
    <link rel="stylesheet" href="css/studentlist.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
        <div class="header">
            <div class="logo">Bschool</div>
            <div class="links">
                <a href="index.html">Home</a>
                <a href="student.php">Students</a>
                <a href="about.html">About Us</a>
                <a href="contact.html">Contact</a>
                <a href="admin.php">Admins</a>
                <form method="post">
                    <button name="site">Log Out</button>
                </form>
                
            </div>
        </div>
    <h1>User's List</h1>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th colspan="12" class="add"><a href="assign.php" style="color:white;">Assign-responsibility</a></th>
        </tr>
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="4">Options</th>
        </tr>
        <?php
        require "config/connection.php";
        $query = "SELECT * FROM users";
        $result = mysqli_query($connect,$query);
        $x = 1;

        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $x?></td>
            <td><?php echo $rows['firstname']?></td>
            <td><?php echo $rows['lastname']?></td>
            <td><?php echo $rows['username'];?></td>
            <td><?php echo  $rows['email']?></td>
            <td><?php echo $rows['password'];?></td>
            <td><a href="edituser.php?editid=<?php echo $rows['id']?>" style="color:white;">Edit</a></td>
            <td><a href="deleteuser.php?deleteid=<?php echo $rows['id']?>" style="color:white;">Delete</a></td>
        </tr>
        <?php
        $x++;
        }
        ?>
    </table>
</body>
</html>