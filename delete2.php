<?php
include 'config.php';
echo $id = $_GET['id'];
mysqli_query($con, "delete from `image2` where id = $id");

header('location:index.php');
