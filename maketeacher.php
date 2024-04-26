<?php
require "config/connection.php";
$id = $_GET['id'];
$query = "UPDATE users SET level='3' WHERE id='$id'";
$result = mysqli_query($connect,$query);
header("location:assign.php");
?>