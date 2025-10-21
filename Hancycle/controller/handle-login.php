<?php

    require_once "../Storage/data_user.php";
    require_once "../config/base_config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_ditemukan = null;
    $email_ditemukan = null;
    $pesan_eror = [];


    // Cek Apakah Email terdaftar
    foreach($data_user as $user) {
         if($user['email'] == $email) {
            $email_ditemukan = $user['email'];
         }
    }

    if(!$email_ditemukan) {
        header("Location: $config->BASE_URL/dashboard/login?type=email&error=Email Tidak Ditemukan");
        return;
    }

    foreach($data_user as $user) {
        // cek email dan password
        if($user['email'] == $email && $user['password'] == md5($password)){
            $user_ditemukan = $user;
        }
    }
    
    if(count($pesan_eror) > 0) {
        echo $pesan_eror['message'];
        return;
    }

    if($user_ditemukan != null) {
        session_start();
        $_SESSION['name'] = $user_ditemukan['name'];
        header("location: $config->BASE_URL/dashboard?success=Login berhasil, Selamat Datang {$user_ditemukan['name']}!");
    } else {
        header("Location: $config->BASE_URL/dashboard/login?error=Salahhhh");
    }