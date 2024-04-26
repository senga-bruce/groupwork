
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head Master's | Page ~ </title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Bschool</div>
            <div class="links">
            <a href="home.php">Home</a>
                <a href="student.php">Students</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
                <form method="post">
                    <button name="site">Log Out</button>
                </form>
                
            </div>
        </div>
        <div class="body">
            <div class="img">
                <!-- <img src="img/student - Copy.jpeg" alt=""> -->
                <form method="post">
                    <button class="me" name="me">Our Teachers</button>
                </form>
            </div>
            <div class="para">
                <h3>Welcome To our site</h3>
                <h1 class="school__name">Name Of The School</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo a                      
                    ssumenda<br> oseum utem! Id perferendis incidunt ut perspiciatis voluptas 
                    doloremque t<br>em pora dolor <br>
                    <button class="learnmore" name="learnmore">Learn More  >  </button>
                </p>
                <form method="post">
                    <button class="one" name="one">All Classes</button>
                    <button class="two" name="two">Get In Touch</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['learnmore'])) {
    header("Location:learnmore.php");
}if (isset($_POST['site'])) {
    header("Location:login.php");
}if (isset($_POST['one'])) {
    header("Location:login.php");
}if (isset($_POST['two'])) {
    header("Location:login.php");
}if (isset($_POST['me'])) {
    header("Location:teacherdisplay.php");
}
?>