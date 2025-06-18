<?php
session_start();
$nama = $_POST["nama"] ?? "";
$alamat = $_POST["alamat"] ?? "";
$metode = $_POST["metode"] ?? "";
$keranjang = $_SESSION["keranjang"] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran Berhasil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="checkout-container">
    <h2>Terima Kasih, <?= htmlspecialchars($nama) ?>!</h2>
    <p>Pesanan Anda:</p>
    <ul>
      <?php foreach ($keranjang as $item): ?>
        <li><?= $item['nama'] ?> - Rp <?= number_format($item['harga']) ?></li>
        <?php $total += $item['harga']; ?>
      <?php endforeach; ?>
    </ul>
    <p><strong>Total Pembayaran: Rp <?= number_format($total) ?></strong></p>
    <p><strong>Alamat:</strong> <?= nl2br(htmlspecialchars($alamat)) ?></p>
    <p><strong>Metode Pembayaran:</strong> <?= htmlspecialchars($metode) ?></p>
  </div>
</body>
</html>
<?php unset($_SESSION['keranjang']); ?>
