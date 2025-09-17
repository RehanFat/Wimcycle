<?php 
    session_start();

    include "includes/koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hash_password = md5($password);
    // mengubah sandi menjadi hash

    $sql = "SELECT * FROM tb_pengguna WHERE username='$username' AND password='$hash_password'";

    $sql_eksekusi = mysqli_query($koneksi, $sql);
    $hitung = mysqli_num_rows($sql_eksekusi);

    if($hitung==1)
    {
        echo "<h3 style='background:lightgreen'>
        Nama pengguna dan sandi berhasil di temukan, anda boleh masuk
        </h3>";
    }
    else 
    {
        echo "<h3 style='background:lightgreen'>
        Nama pengguna dan sandi salah
        </h3>";
        echo "<a href='login.php'>Kembali kehalaman masuk</a>";
    }