<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> my portfolio </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e74c3c;
            color: white;
            text-align: center;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.2);
        }
        .hero {
            padding: 80px 0;
        }
        .hero h1 {
            font-size: 50px;
            font-weight: bold;
        }
        .hero p {
            font-size: 22px;
        }
        .buttons a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: white;
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about">about</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contactus">contact</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="my portfolio">my portfolio</a>
        </li>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Hero Section -->
<div class="hero">
    <h3>I'm</h3>
    <h1>Eugene Irabor</h1>
    <p>Web Developer</p>
    <div class="buttons">
        <a href="#">Hire Me</a>
        <a href="#">Contact Me</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
