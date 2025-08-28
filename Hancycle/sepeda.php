<?php
require_once __DIR__ . "/Storage/data_sepeda.php";
require_once __DIR__ . "/Helpers/filter.php";

use function Helpers\filter_by_id;

$sepeda_id = 0;
if (isset($_GET['id'])) {
    $sepeda_id = (int) $_GET['id'];
}

// $data_sepeda = $data_sepeda;

$detail_sepeda = filter_by_id($data_sepeda, $sepeda_id);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hancycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="include/custom.css">
    <style>
        .warna-container {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        .warna {
            width: 35px;
            height: 35px;
            border-radius: 6px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: 0.2s;
        }

        .warna.active {
            border: 2px solid gold;
        }

        .breadcrumb-item a {
            color: #0a1d4d;
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb-item a:hover {
            color: #f39c12;
        }
    </style>
</head>

<body>
    <?php
    include "./include/header.php";
    ?>
    <!-- Hero Section -->
    <section style="height: 600px;" class="hero d-flex align-items-center text-center text-white">
        <div style="margin-top: -7rem;" class="container">
            <h1 class="fw-bold">Sepeda</h1>
            <p class="lead">Temukan sepeda impianmu dengan desain stylish dan nyaman untuk semua kebutuhan.</p>
            <a href="pembelian.php" class="btn btn-cta">Buy Now!</a>
        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffffff" fill-opacity="1"
                d="M0,192L40,197.3C80,203,160,213,240,229.3C320,245,400,267,480,245.3C560,224,640,160,720,149.3C800,139,880,181,960,208C1040,235,1120,245,1200,245.3C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- jumbotron 3 -->
    <div class="container-fluid py-3">
        <!-- judul start -->
        <div class="container text-center mt-5">
            <h1>Sepeda</h1>
            <p>Hancycle menawarkan rangkaian sepeda berkualitas dengan desain yang stylish dan nyaman sesuai kebutuhan
                bersepeda keluarga anda!</p>
        </div>
        <!-- judul end -->
        <!-- Card Start -->
        <div class="container d-flex justify-content-around mt-5">
            <div class="row">
                <?php if ($detail_sepeda): ?>
                    <!-- Breadcrumb Bootstrap -->
                    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="sepeda.php">Sepeda</a></li>
                            <li class="breadcrumb-item active" style="color: #f39c12;" aria-current="page">
                                <?php echo $detail_sepeda['model']; ?>
                            <li>
                        </ol>
                    </nav>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <img style="border: 2px solid #f39c12; border-radius: 30px; min-width:350px;" id="gambarSepeda"
                                    class="img-fluid" src="<?php echo $detail_sepeda['gambar'] ?>" alt="Eror">
                            </div>
                            <div class="col-lg-6">
                                <h3>
                                    <?php echo $detail_sepeda['merek']; ?>
                                </h3>
                                <h6>
                                    <?php echo $detail_sepeda['model']; ?>
                                </h6>
                                <p>
                                <h1>Rp. <?php echo number_format($detail_sepeda['harga'], 0, ',', '.'); ?></h1>
                                </p>
                                <p>
                                    <?php echo $detail_sepeda['deskripsi']; ?>
                                </p>
                                <button type="button" class="mb-3 btn btn-warning">Masukkan Keranjang</button>
                                <button type="button" class="mb-3 btn btn-outline-success">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($data_sepeda as $sepeda): ?>
                        <div class="col-12 col-sm-5 col-lg-4 py-3">
                            <div class="card custom-card" style="width: 18rem;">
                                <img src="<?php echo $sepeda['gambar'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $sepeda['merek'] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $sepeda['model'] ?></h6>
                                    <p class="card-text"><?php echo $sepeda['deskripsi'] ?></p>
                                    <a href="<?php echo "./sepeda.php?id=" . $sepeda['id'] ?>" class="btn btn-primary">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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