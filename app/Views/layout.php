<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'My Portfolio') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('home') ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('contactus') ?>">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('portfolio') ?>">My Portfolio</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Dynamic Section -->
<div class="container mt-4">
  <?= $this->renderSection('content') ?>
</div>
<div class="container mt-5 pb-5">

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
<div class="container">
</html>
<footer style="background-color: #333; color: white; padding: 20px; margin-top: 40px;">
<a href="https://github.com/yourprofile" style="color: white; text-decoration: none;">GitHub</a> |
<a href="https://linkedin.com/in/yourprofile" style="color: white; text-decoration: none;">LinkedIn</a>
        <p>&copy; 2025 Eugene Irabor - Web Developer</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
