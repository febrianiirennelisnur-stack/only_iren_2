<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact — Irenne</title>
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
    <section class="card">
      <h1>Kontak</h1>
      <p>Isi form di bawah untuk menghubungi saya (contoh form sederhana, tidak menggunakan backend email otomatis).</p>

      <form action="" method="post" onsubmit="return fakeSubmit();">
        <label>Nama</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Pesan</label>
        <textarea name="message" rows="5" required></textarea>
        <button class="btn btn-primary" type="submit">Kirim Pesan</button>
      </form>

      <p class="note">Catatan: Untuk kirim pesan nyata, kita bisa tambahkan PHPMailer dan konfigurasi SMTP.</p>
    </section>
  </main>

  <footer>
    <p class="copyright">© <?php echo date('Y'); ?> Irenne Lisnur</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
