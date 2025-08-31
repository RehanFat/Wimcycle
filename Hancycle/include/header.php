<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>Navbar Wimcycle Style</title>
  <style>
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 8px 10px rgba(0,0,0,0.2);
      border-radius: 0px 0px 25% 25%;
    }

    .nav-link {
      color: #000 !important;
      font-weight: 500;
      margin-right: 15px;
    }

    .nav-link:hover {
      color: #f39c12 !important;
    }

    .dropdown-menu a:hover {
      background-color: #f39c12;
      color: #fff !important;
    }

    .dropdown-menu {
      border-radius: 12px;
      border: 1px solid #eee;
      position: absolute;
      z-index: 1100;
    }


    .search-icon {
      font-size: 20px;
      color: #000;
      cursor: pointer;
    }

    @media (max-width: 991px) {
      .navbar-nav {
        position: static !important;
        transform: none !important;
        left: auto !important;
      }
      .navbar {
      background-color: #ffffff;
      box-shadow: 0 8px 10px rgba(0,0,0,0.2);
      border-radius: 0px 0px 10% 10%;
    }
    }

    .dropdown-toggle::after {
      display: none !important;
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .search-container {
      position: relative;
      display: inline-block;
    }

    .search-input {
      width: 0;
      opacity: 0;
      transition: all 0.4s ease;
      border: 1px solid #ccc;
      border-radius: 20px;
      padding: 5px 10px;
      font-size: 14px;
      position: absolute;
      right: 30px;
      top: 50%;
      transform: translateY(-50%);
    }

    .search-container:hover .search-input {
      width: 200px;
      opacity: 1;
    }

    .search-icon {
      font-size: 20px;
      color: #000;
      cursor: pointer;
    }

    @media (max-width: 991px) {
    .search-container {
      position: relative;
      display: inline-block;
    }

    .search-input {
      width: 0;
      opacity: 0;
      transition: all 0.4s ease;
      border: 1px solid #ccc;
      border-radius: 20px;
      padding: 5px 10px;
      font-size: 14px;
      position: absolute;
      left: 30px;
      top: 50%;
      transform: translateY(-50%);
    }
}
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-full fixed-top">
    <div class="container">
      <a style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:22px;" class="navbar-brand" href="#">
        <img src="assets/logo-hancycle.png" alt="Logo" width="75" height="75">
        &nbsp;Hancycle
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav position-absolute start-50 translate-middle-x">

          <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="produkDropdown">
              <li><a class="dropdown-item" href="kategori.php?tipe=Sepeda Gunung">Sepeda Gunung</a></li>
              <li><a class="dropdown-item" href="kategori.php?tipe=BMX">Sepeda BMX</a></li>
              <li><a class="dropdown-item" href="kategori.php?tipe=Sepeda Anak">Sepeda Anak</a></li>
              <hr>
              <li><a class="dropdown-item" href="kategori.php">Lihat Semua</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="sepeda.php">Sepeda</a></li>
        </ul>
        <div class="search-container ms-auto">
          <input type="text" class="search-input" placeholder="Search...">
          <i class="bi bi-search search-icon"></i>
        </div>
      </div>
    </div>
  </nav>

</body>

</html>