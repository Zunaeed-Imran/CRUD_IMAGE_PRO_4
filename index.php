<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <center>
    <div class="main">
      <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="name"></br>
        <label for="">Price</label>
        <input type="text" name="price"><br>
        <label for="">Image</label>
        <input type="file" name="image"><br>
        <button type="submit">Upload</button>
      </form>
    </div>
  </center>
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Image</th>
          <th scope="col">Delete</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'config.php';
        
        $pic = mysqli_query($con, "select * from `image2`");
        while ($row = mysqli_fetch_array($pic)) {
          echo "
  <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[price]</td>
    <td><img src='$row[image]' width = '200px' height='70px'></td>
    <td><a href='delete2.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
    <td><a href='update2.php?id=$row[id]' class='btn btn-success'>Update</a></td>
  </tr>
";
 }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>