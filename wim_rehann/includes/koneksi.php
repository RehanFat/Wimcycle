
 <?php 
    $server        = "localhost";
    $user          = "root";
    $password      = "";
    $database      = "db_wmc_12rpl2";

    $koneksi = mysqli_connect($server, $user, $password) or die("Gagal terhubung dengan server");
    $db = mysqli_select_db($koneksi, $database) or die("Database gagal ditemukan"); 
?>