<!DOCTYPE html>


<link rel="stylesheet" href="css/utama.css">
<html lang="id">
<?php require "components/head.php"; ?>
<body>
<?php require "components/navbar.php"; ?>
<?php require "pages/page-utama.php"; ?>
</body>
<script>
  // mengambil URL path sekarang
  const currentPath = window.location.pathname;

  // ambil semua link dalam navbar
  const navLinks = document.querySelectorAll("nav a");

  navLinks.forEach(link => {
    if (link.getAttribute("href") === currentPath) {
      link.classList.add("active");
    }
  });
</script>
</html>