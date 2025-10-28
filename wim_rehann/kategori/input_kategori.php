<?php 

include "../includes/koneksi.php";

$nama_kategori = $_POST['nama_kategori'];
$ket_kategori = $_POST['ket_kategori'];

$sql = "INSERT into tb_kategori (nama_kategori, ket_kategori) Values ('$nama_kategori','$ket_kategori')";
$sql_eksekusi = mysqli_query($koneksi, $sql);
if($sql_eksekusi)
{
    header("location:show_kategori.php");
}
else
{
    echo "gagal menambahkan kategori baru!";
}

?>