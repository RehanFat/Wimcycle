<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php include "../includes/header.php"; ?>

    <div class="container-fluid mt-5 vh-custom d-flex justify-content-center align-item-center">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <img src="<?= base_url; ?>/assets/hero-login.jpg" class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-6">
                        <form action="cek_login.php" method="POST" >
                            
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="username" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a Username" />
                                <label class="form-label" for="form3Example3">Username</label>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                                <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#!" class="text-body">Forgot password?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>

    <?php include "../includes/footer.php"; ?>
</body>

</html>