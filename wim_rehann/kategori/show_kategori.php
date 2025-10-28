<html>
<!-- Awal navbar -->
<?php
session_start();
$_SESSION['menu'] = "Kategori";
include "../includes/header.php";
include "../includes/koneksi.php";
?>

<?php

if (isset($_SESSION['level'])) {
?>
    <!-- ini tampilan admin -->
    <div class="container vh-custom">
        <h1>Selamat datang <b><?= $_SESSION['nama_lengkap']; ?></b></h1>
        <hr>

        <!-- awal modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="input_kategori.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Nama kategori</label>
                                    <input type="text" name="nama_kategori" id="" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label for="">deskripsi kategori</label>
                                    <textarea name="ket_kategori" required class="form-control"></textarea>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                <input type="submit" value="kirim" class="btn btn-success">
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- akhir modal -->
    <table class="table mt-3">
        <thead class="table-dark">
            <tr>
                <th>Nomor</th>
                <th>Nama Kategori</th>
                <th>Deskripsi Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $sql = "SELECT *FROM tb_kategori";
            $sql_eksekusi = mysqli_query($koneksi, $sql);
            $nomor = 1;
            while($data = mysqli_fetch_array($sql_eksekusi))
            {
                echo "<tr>";
                echo "  <td>".$nomor++."</td>";
                echo "  <td>".$data['nama_kategori']."</td>";
                echo "  <td>".$data['ket_kategori']."</td>";
                echo "</td>";
            }
           
            
            
            ?>
        </tbody>
    </table>
    </div>
   

    <!-- akhir tampilan admin -->
<?php

} else {
?>
    <!-- ini tampilan umum -->
    <div class="container vh-custom">
        <h1>made a meal and threw it up on sunday i've got a lot of things to learn</h1>
    </div>
    <!-- akhir tampilan umum -->
<?php
}
?>



<?php include "../includes/footer.php"; ?>
<!-- akhir footer -->

</html>