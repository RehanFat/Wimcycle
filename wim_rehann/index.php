<?php
    session_start();
    $_SESSION['menu']="beranda";
    include "includes/header.php";
?>

<?php 

if(isset($_SESSION['level'])) 
    {
?>
    <!-- tampilan admin start -->
        <!-- Start Content -->
            <div class="container vh-custom">
                    <h1>Selamat Datang Mas <b><?= $_SESSION['nama_lengkap']; ?></b></h1>
            </div>

            
        <!-- End Content -->
    <!-- tampilan admin end -->
<?php
    }
else
    {
?>
    <!-- tampilan pengguna start -->
        <!-- Start Content -->
            <div class="container vh-custom">
                <h1>Webiste ini adalah webiste resmi <b>Wimcycle</b></h1>
            </div>
        <!-- End Content -->
    <!-- tampilan pengguna end -->
<?php
    }
?>

    

<?php include "includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>