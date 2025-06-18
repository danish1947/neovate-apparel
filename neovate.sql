CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  description TEXT,
  price DECIMAL(10,2),
  image VARCHAR(255)
);

INSERT INTO products (name, description, price, image) VALUES
(
  'NEOVATE T-SHIRT BOXY',
  'Bahan: Cotton Combed 24s (halus & adem)\nSablon: Plastisol (awet & tajam)\nUkuran: P 70 cm x L 60 cm (boxy fit)\nToleransi ukuran ±1–2 cm\nDesain timeless, cocok dipakai sehari-hari',
  110000,
  '1.jpg'
),
(
  'NEOVATE JERSEY STREETWEAR – BOXY OVERSIZE',
  'Bahan: Polyester Dry Fit Mesh – ringan, adem, breathable\nSablon: DTF – tajam, fleksibel, tahan lama\nFit: Oversize, bahu & lengan ekstra\nDesain: Minimalis tapi bold, cocok untuk harian dan statement outfit.',
  120000,
  'jersey-neovate-depan.jpg'
);