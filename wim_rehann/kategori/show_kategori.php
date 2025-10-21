<?php
    session_start();
    $_SESSION['menu']="kategori";
    include "../includes/header.php";

    echo $_SESSION['nama_lengkap'];
?>

    

<?php include "../includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>