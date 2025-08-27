<?php
include "includes/best_url.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Wim Rehan</title>
    <style>
        .bi-custom {
            font-size: 25px;
            margin-right: 10px;
        }

        .vh-custom {
            min-height: 80vh;
        }
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
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="bi bi-house-fill">Beranda</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="bi bi-bookmarks-fill">Kategori</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="bi bi-bicycle">Sepeda</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="bi bi-box2-fill">Dealers</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="bi bi-archive-fill">Inventori</i>
                        </a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-success" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Start Content -->
    <div class="container vh-custom">
        <h1>Webiste ini adalah webiste resmi <b>Wimcycle</b></h1>
    </div>
    <!-- End Content -->

    <!-- Start Footer -->
    <div class="row bg-primary text-light m-0">
        <div class="col-12">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-8">
                        <p class="ms-5 fs-5">&copy; Copyright Wimcycle.
                            2025</p>
                    </div>
                    <div class="col-4 text-end">
                        <a href="http://instagram.com/rehanelv" target="blank" class="text-light text-decoration-none me-3"><i class="bi-custom bi-instagram"></i>@RehanElv</a>
                        <a href="http://facebook.com/rehanelv" target="blank" class="text-light text-decoration-none"><i class="bi-custom bi-facebook"></i>rehanelv</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>