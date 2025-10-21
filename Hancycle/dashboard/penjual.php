<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../dataTables.dataTables.css">
    <title>DashBoard</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Total Penjual</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Penjual Terpopuler</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <h1>Data Sepeda</h1>
            </div>
        </div>

        <table id="tableSepeda" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Merek</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hancycle</td>
                    <td>BMX</td>
                    <td>1.700.000</td>
                    <td>-</td>
                    <td>Deskripsi Sepeda BMX</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="../jquery-3.7.1.js"></script>
    <script src="../dataTables.js"></script>
    <script>
        new DataTable("#tableSepeda");
    </script>
</body>

</html>