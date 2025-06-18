<?php
include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah_keranjang'])) {
    $_SESSION['keranjang'][] = [
        'id' => $_POST['produk_id'],
        'nama' => $_POST['produk_nama'],
        'harga' => $_POST['produk_harga'],
        'gambar' => $_POST['produk_gambar']
    ];
}

$where = '';
if (isset($_GET['cari']) && $_GET['cari'] != '') {
    $keyword = mysqli_real_escape_string($conn, $_GET['cari']);
    $where = "WHERE name LIKE '%$keyword%'";
}
$result = mysqli_query($conn, "SELECT * FROM products $where");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Katalog Neovate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1 style="text-align:center;">Katalog Produk Neovate</h1>
  <form method="GET" action="product.php" style="text-align:center; margin-bottom: 20px;">
    <input type="text" name="cari" placeholder="Cari produk..." style="padding: 8px; width: 200px;" value="<?= isset($_GET['cari']) ? htmlspecialchars($_GET['cari']) : '' ?>">
    <button type="submit">Cari</button>
    <a href="keranjang.php" style="margin-left: 20px;">🛒 Lihat Keranjang (<?= isset($_SESSION['keranjang']) ? count($_SESSION['keranjang']) : 0 ?>)</a>
  </form>

  <div class="product-list">
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="product">
      <img src="assets/images/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
      <h3><?= htmlspecialchars($row['name']) ?></h3>
      <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
      <p><strong>Rp <?= number_format($row['price']) ?></strong></p>
      <form method="post" action="product.php">
        <input type="hidden" name="produk_id" value="<?= $row['id'] ?>">
        <input type="hidden" name="produk_nama" value="<?= htmlspecialchars($row['name']) ?>">
        <input type="hidden" name="produk_harga" value="<?= $row['price'] ?>">
        <input type="hidden" name="produk_gambar" value="<?= $row['image'] ?>">
        <button type="submit" name="tambah_keranjang">+ Tambah ke Keranjang</button>
      </form>
    </div>
  <?php } ?>
  </div>
</body>
</html>
