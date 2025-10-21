<?php
    include "../includes/base_url.php";
    session_start();
    session_destroy();
    header("location:".base_url."")

?>