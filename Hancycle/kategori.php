<?php

require_once __DIR__ . "/Helpers/filter.php";
use function Helpers\filter_data_sepeda;
require_once __DIR__ . "/Storage/data_sepeda_by_kategori.php";

$tipe = "";
if (isset($_GET['tipe'])) {
  $tipe = $_GET['tipe'];
}

$data = $data_sepeda_by_kategori;
$newData = filter_data_sepeda($data, $tipe);

// print_r($newData);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hancycle</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="include/custom.css">
</head>

<body>
  <?php
  include "./include/header.php";
  ?>

  <!-- hero -->
  <section style="height: 600px;" class="hero d-flex align-items-center text-center text-white">
    <div style="margin-top: -7rem;" class="container">
      <h1 class="fw-bold">Kategori Sepeda</h1>
      <h3><?php echo $tipe; ?></h3>
      <p class="lead">Temukan sepeda impianmu dengan desain stylish dan nyaman untuk semua kebutuhan.</p>
      <a href="#k" class="btn btn-cta">Buy Now!</a>
    </div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffffff" fill-opacity="1"
      d="M0,192L40,197.3C80,203,160,213,240,229.3C320,245,400,267,480,245.3C560,224,640,160,720,149.3C800,139,880,181,960,208C1040,235,1120,245,1200,245.3C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>
  </section>
  <!-- hero end -->

  <!-- jumbotron -->
  <div class="container-fluid bg-light py-3">

    <!-- Card Start -->
    <div class="container d-flex justify-content-around mt-5">
      <div class="row">
        <?php foreach($newData as $kategori): ?>
        <div class="col-12 col-sm-6 col-lg-4 py-3">
          <div class="card custom-card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $kategori['nama'] ?></h5>
              <p class="card-text"><?php echo $kategori['deskripsi'] ?></p>
              <button type="button" class="btn btn-primary">More Info</button>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  <!-- card end -->

  <div class="card">
    <div class="card-body container d-flex justify-content-between">
      <div class="">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>

      <a href="#" class="btn btn-primary" style="height: fit-content">Go somewhere</a>
    </div>
  </div>

  <div class="w-100 h-25">
    <p class="text-center py-3">@copyright 2025, by Rehan</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>