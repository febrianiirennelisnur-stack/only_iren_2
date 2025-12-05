<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Projects — Irenne</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="nav-blur">
    <div class="nav-container">
      <a class="brand" href="index.php">Irenne<span>.</span></a>
      <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <h1>Projects</h1>
    <div class="projects-list">
      <article id="p1" class="project-item">
        <h3>Website E-Commerce</h3>
        <p>Deskripsi: Website jual-beli dengan fitur penuh (keranjang, checkout, admin).</p>
      </article>

      <article id="p2" class="project-item">
        <h3>Sistem Informasi Laundry</h3>
        <p>Deskripsi: Sistem transaksi, laporan, dan manajemen paket.</p>
      </article>

      <article id="p3" class="project-item">
        <h3>Web Edukasi Mitigasi Bencana</h3>
        <p>Deskripsi: Tutorial interaktif untuk mitigasi bencana, cocok untuk sekolah.</p>
      </article>
    </div>
  </main>

  <footer>
    <p class="copyright">© <?php echo date('Y'); ?> Irenne Lisnur</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
