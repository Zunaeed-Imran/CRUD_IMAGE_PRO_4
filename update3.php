<?php
include 'config.php';

if(isset($_POST['Update'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_FILES['image'];

  $tmp_name = $image['tmp_name'];
  $img_name = $image['name'];
  $img_destination = 'images/' . $img_name;

  // Move the uploaded file to the desired destination
  move_uploaded_file($tmp_name, $img_destination);

  mysqli_query($con, "UPDATE `image2` set `name` = '$name', `price` = '$price', `image` = '$img_destination' WHERE id = '$id' ");
  header('location:index.php');
}
?>