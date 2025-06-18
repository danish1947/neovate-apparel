<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neovate Apparel</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="navbar">
    <div class="logo">
      <img src="assets/images/logo-neovate.png" alt="Neovate Logo">
    </div>
    <nav>
      <a href="index.php">Home</a>
      <a href="product.php">Koleksi</a>
      <a href="keranjang.php">Keranjang</a>
    </nav>
  </header>

  <section class="model-section reveal">
    <img src="assets/images/modelberanda.jpg" class="model-image" alt="Neovate Model">
    <div class="model-text">
      <h1>NEOVATE</h1>
      <p>"Built to Evolve."</p>
      <a href="product.php" class="cta-button">Lihat Koleksi</a>
    </div>
  </section>

  <section class="highlight reveal">
    <h2>Koleksi Terbaru</h2>
    <p>Temukan desain streetwear untuk kamu yang tidak mau ikut arus.</p>
    <a href="product.php" class="cta-button">Jelajahi Sekarang</a>
  </section>

  <section class="about-brand reveal">
    <h2>Tentang Neovate</h2>
    <p>
      <strong>Built to Evolve.</strong><br><br>
      Neovate lahir dari keinginan sederhana: melihat karya kami dipakai dan hidup di tengah orang-orang. 
      Kami tidak hanya menjual pakaian, tapi menciptakan ekspresi.  
      Didirikan dengan semangat untuk berjalan di jalur sendiri, Neovate menolak ikut arus.  
      Kami percaya setiap orang berhak berkembang dengan cara mereka sendiri—dan gaya kami adalah wujudnya.
    </p>
  </section>

  <footer class="footer">
    <p>&copy; <?= date('Y') ?> Neovate Apparel. Built to Evolve.</p>
  </footer>

  <script>
    window.addEventListener('scroll', () => {
      document.querySelectorAll('.reveal').forEach((el) => {
        if (el.getBoundingClientRect().top < window.innerHeight - 50) {
          el.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>