<?php
session_start();
$keranjang = $_SESSION['keranjang'] ?? [];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Keranjang Belanja</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="checkout-container">
    <h2>🛒 Keranjang Anda</h2>
    <?php if (empty($keranjang)) : ?>
      <p>Keranjang masih kosong.</p>
    <?php else: ?>
      <?php $total = 0; foreach ($keranjang as $item): ?>
        <div style="margin-bottom: 20px;">
          <img src="assets/images/<?= htmlspecialchars($item['gambar']) ?>" width="100" style="border-radius: 6px;">
          <p><strong><?= htmlspecialchars($item['nama']) ?></strong></p>
          <p>Rp <?= number_format($item['harga']) ?></p>
        </div>
        <?php $total += $item['harga']; ?>
      <?php endforeach; ?>
      <p><strong>Total: Rp <?= number_format($total) ?></strong></p>
      <a href="checkout.php"><button>Lanjut ke Pembayaran</button></a>
    <?php endif; ?>
    <br><br>
    <a href="product.php" class="btn-back">← Kembali ke Katalog</a>
  </div>
  <a href="product.php" class="btn-back">← Kembali ke Katalog</a>
</body>
</html>
