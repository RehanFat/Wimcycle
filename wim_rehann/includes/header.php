<?php
include "base_url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url; ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url; ?>/bootstrap-icons/bootstrap-icons.css">

    <title>Wim Rehan</title>
    <style>
        .bi-custom {
            font-size: 25px;
            margin-right: 10px;
        }

        .vh-custom {
            min-height: 80vh;
        }

        .bi {}
    </style>
</head>

<body>
    <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme='dark'>
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Hancycle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SESSION['menu'] == "beranda") {
                                                echo "active";
                                            } ?>" aria-current="page" href="<?= base_url; ?>index.php">
                            <i class="bi bi-house-fill">&nbsp; Beranda</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SESSION['menu'] == "kategori") {
                                                echo "active";
                                            } ?>" aria-current="page" href="<?= base_url; ?>kategori/show_kategori.php">
                            <i class="bi bi-bookmarks-fill">&nbsp; Kategori</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SESSION['menu'] == "sepeda") {
                                                echo "active";
                                            } ?>" aria-current="page" href="<?= base_url; ?>sepeda/show_sepeda.php">
                            <i class="bi bi-bicycle">&nbsp; Sepeda</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SESSION['menu'] == "dealers") {
                                                echo "active";
                                            } ?>" aria-current="page" href="<?= base_url; ?>dealers/show_dealers.php">
                            <i class="bi bi-box2-fill">&nbsp; Dealers</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SESSION['menu'] == "inventori") {
                                                echo "active";
                                            } ?>" aria-current="page" href="<?= base_url; ?>inventori/show_inventori.php">
                            <i class="bi bi-archive-fill">&nbsp; Inventori</i>
                        </a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <a href="<?= base_url;?>login.php" class="btn btn-success">Masuk</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->