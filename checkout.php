<?php
session_start();
$keranjang = $_SESSION['keranjang'] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="checkout-container">
    <h2>Form Pembayaran</h2>
    <?php if (empty($keranjang)): ?>
      <p>Keranjang kosong.</p>
    <?php else: ?>
      <form action="berhasil.php" method="post">
        <?php foreach ($keranjang as $item): ?>
          <p><strong><?= $item['nama'] ?></strong> - Rp <?= number_format($item['harga']) ?></p>
          <?php $total += $item['harga']; ?>
        <?php endforeach; ?>
        <p><strong>Total: Rp <?= number_format($total) ?></strong></p>

        <label>Nama Anda:</label>
        <input type="text" name="nama" required>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>

        <label>Metode Pembayaran:</label>
        <select name="metode" required>
          <option value="">-- Pilih Metode --</option>
          <option value="Transfer Bank">Transfer Bank</option>
          <option value="COD">Bayar di Tempat (COD)</option>
          <option value="E-Wallet">E-Wallet (OVO, Dana, Gopay)</option>
        </select>

        <button type="submit">Bayar Sekarang</button>
      </form>
    <?php endif; ?>
  </div>
  <a href="keranjang.php" class="btn-back">← Kembali ke Keranjang</a>
</body>
</html>