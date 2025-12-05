<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Irenne Lisnur — Portofolio</title>
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

  <main>
    <section class="hero">
      <div class="hero-content">
        <img src="assets/img/profile.jpg" alt="Irenne" class="profile"/>
        <h1>Halo, saya <span>Irenne Lisnur</span></h1>
        <p class="lead">Mahasiswa Teknik Informatika — Web Developer | PHP · Laravel · UI/UX</p>
        <a class="btn btn-primary" href="projects.php">Lihat Project</a>
      </div>
      <div class="hero-decor"></div>
    </section>

    <section class="features container">
      <div class="card small">
        <h3>Web Developer</h3>
        <p>Buat web yang cepat, rapi, dan responsif.</p>
      </div>
      <div class="card small">
        <h3>UI / UX</h3>
        <p>Desain estetik & pengalaman pengguna yang intuitif.</p>
      </div>
      <div class="card small">
        <h3>PHP & Laragon</h3>
        <p>Siap berjalan lokal menggunakan Laragon.</p>
      </div>
    </section>

    <section class="highlights container">
      <h2>Beberapa Project Pilihan</h2>
      <div class="projects-grid">
        <a class="project-card" href="projects.php#p1">
          <h4>Website E-Commerce</h4>
          <p>Sistem checkout, dashboard admin, metode pembayaran.</p>
        </a>
        <a class="project-card" href="projects.php#p2">
          <h4>Sistem Laundry</h4>
          <p>Manajemen transaksi, laporan, dan customer.</p>
        </a>
        <a class="project-card" href="projects.php#p3">
          <h4>Website Edukasi</h4>
          <p>Virtual tour & materi interaktif untuk pelajar.</p>
        </a>
      </div>
    </section>
  </main>

  <footer>
    <div class="container footer-grid">
      <div>
        <h3>Irenne Lisnur</h3>
        <p>Mahasiswa Universitas Pancasakti Tegal — Teknik Informatika</p>
      </div>
      <div>
        <h4>Kontak</h4>
        <p>Email: irennelisnur@example.com</p>
      </div>
    </div>
    <p class="copyright">© <?php echo date('Y'); ?> Irenne Lisnur — All rights reserved</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
