<?php

require_once "../Storage/data-kategori.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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
                        <h5 class="card-title">Total Kategori</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Kategori Populer</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row container-fluid">
            <div class="col-lg-12 d-flex justify-content-between">
                <h2>Kategori Sepeda</h2>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTambah">
                    Tambah
                </button>
                <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Kategori Baru</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Nama</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table id="tableSepeda" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data_kategori as $kategori) : ?>
                <tr>
                    <td><?= $kategori['id'] ?></td>
                    <td><?= $kategori['nama'] ?></td>
                    <td><?= $kategori['deskripsi'] ?></td>
                    <td>
                        <div class="d-flex gap-3">
                            <!-- Button trigger modal Delete -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $kategori['id'] ?>">
                                Delete
                            </button>

                            <!-- Modal Delete -->
                            <div class="modal fade" id="exampleModal<?php echo $kategori['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data <?= $kategori['nama'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin untuk menghapus data sepeda <b><?= $kategori['nama'] ?></b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Button trigger modal Update -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalUpdate">
                                Update
                            </button>

                            <!-- Modal Update -->
                            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data <?= $kategori['nama'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="exampleInput" class="form-label">nama</label>
                                                    <input type="text" class="form-control" value="<?= $kategori['nama'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInput" class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control"><?= $kategori['deskripsi'] ?></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>


    <script src="../jquery-3.7.1.js"></script>
    <script src="../dataTables.js"></script>
    <script>
        new DataTable("#tableSepeda");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>