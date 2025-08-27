<?php

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wimcycle</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="include/custom.css">
</head>

<body>
  <?php
  include "./include/header.php";
  ?>
  <!-- Hero Section -->
  <section class="hero d-flex align-items-center text-center text-white">
    <div style="margin-top: -7rem;" class="container">
      <h1 class="fw-bold">Welcome To Wimcycle</h1>
      <p class="lead">Temukan sepeda impianmu dengan desain stylish dan nyaman untuk semua kebutuhan.</p>
      <a href="pembelian.php" class="btn btn-cta">Buy Now!</a>
    </div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffffff" fill-opacity="1"
      d="M0,192L40,197.3C80,203,160,213,240,229.3C320,245,400,267,480,245.3C560,224,640,160,720,149.3C800,139,880,181,960,208C1040,235,1120,245,1200,245.3C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>
  </section>


  

  <!-- jumbotron -->
  <div class="container-fluid py-3">

    <!-- judul start -->
    <div class="container text-center mt-2">
      <h1>Kategori</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, ipsa!</p>
    </div>
    <!-- judul end -->


    <!-- Card Start -->
    <div class="container d-flex justify-content-around mt-5">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4 py-3">
          <div class="card custom-card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sepeda Gunung</h5>
              <p class="card-text">Sepeda yang dirancang untuk medan berat seperti tanah, bebatuan, dan jalur
                pegunungan. Ciri khasnya adalah ban tebal dengan grip kuat, suspensi depan atau ganda, serta rangka
                kokoh untuk menahan guncangan.</p>
              <button type="button" class="btn btn-primary">More Info</button>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 py-3">
          <div class="card custom-card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sepeda BMX</h5>
              <p class="card-text">Sepeda kecil dengan rangka kuat, biasanya digunakan untuk atraksi, freestyle, atau
                balap lintasan pendek. Memiliki ban tebal namun berukuran lebih kecil, stang lebar, dan desain ringan
                agar mudah dikendalikan untuk trik.</p>
              <button type="button" class="btn btn-primary">More Info</button>>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4 py-3">
          <div class="card custom-card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Sepeda Anak</h5>
              <p class="card-text">Sepeda khusus untuk anak-anak dengan ukuran lebih kecil, desain sederhana, dan sering
                dilengkapi roda tambahan (training wheels) untuk belajar. Dibuat lebih ringan, aman, dan nyaman sesuai
                kebutuhan anak.</p>
              <button type="button" class="btn btn-primary">More Info</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card end -->

    <!-- jumbotron 2 -->
    <div class="container-fluid bg-light py-3">
      <!-- judul start -->
      <div class="container text-center mt-5">
        <h1>Dealers</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, ipsa!</p>
      </div>
      <!-- judul end -->
      <!-- Card Start -->
      <div class="container d-flex justify-content-around mt-5">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 py-3">
            <div class="card custom-card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 py-3">
            <div class="card custom-card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 py-3">
            <div class="card custom-card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card end -->

    <!-- jumbotron 3 -->
    <div class="container-fluid py-3">
      <!-- judul start -->
      <div class="container text-center mt-5">
        <h1>Sepeda</h1>
        <p>Wimcycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan
          bersepeda keluarga anda!</p>
      </div>
      <!-- judul end -->
      <!-- Card Start -->
      <div class="container d-flex justify-content-around mt-5">
        <div class="row">
          <div class="col-12 col-sm-5 col-lg-4 py-3">
            <div class="card custom-card" style="width: 18rem;">
              <img src="assets/gunung.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sepeda Gunung</h5>
                <p class="card-text">Dirancang khusus untuk medan berat seperti tanah, bebatuan, dan jalur pegunungan.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 py-3">
            <div class="card custom-card" style="width: 18rem;">
              <img src="assets/bmx.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sepeda BMX</h5>
                <p class="card-text">sepeda kecil dengan rangka kuat yang populer untuk freestyle, atraksi, dan balap
                  lintasan pendek.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 py-3">
            <div class="card custom-card" style="width: 18rem;">
              <img src="assets/anak.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sepeda Anak</h5>
                <p class="card-text">dibuat dengan ukuran lebih kecil dan desain sederhana agar sesuai kebutuhan
                  anak-anak.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"></script>
</body>

</html>