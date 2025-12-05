<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Tentang — Irenne</title>
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
    <section class="card about-card">
      <div class="about-left">
        <img src="assets/img/profile.jpg" alt="Irenne" class="profile-lg"/>
      </div>
      <div class="about-right">
        <h2>Halo, saya Irenne</h2>
        <p>Saya mahasiswa Teknik Informatika di Universitas Pancasakti Tegal. Fokus pada pengembangan web menggunakan PHP dan perancangan UI/UX.</p>
        <ul class="skills">
          <li>PHP & MySQL</li>
          <li>Laravel (dasar)</li>
          <li>HTML / CSS / JavaScript</li>
          <li>Desain UI</li>
        </ul>
        <a class="btn" href="contact.php">Hubungi Saya</a>
      </div>
    </section>
  </main>

  <footer>
    <p class="copyright">© <?php echo date('Y'); ?> Irenne Lisnur</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
