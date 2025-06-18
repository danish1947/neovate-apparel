<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];
  $image = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "assets/images/" . $image);
  mysqli_query($conn, "INSERT INTO products (name, description, price, image) VALUES ('$name', '$desc', '$price', '$image')");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Tambah Produk</h2>
  <form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Nama Produk" required><br>
    <textarea name="description" placeholder="Deskripsi" required></textarea><br>
    <input type="number" name="price" placeholder="Harga" required><br>
    <input type="file" name="image" required><br>
    <button type="submit">Tambah</button>
  </form>
</body>
</html>