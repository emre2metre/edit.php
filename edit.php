<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css?cache=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css?cache=<?= time() ?>">

</head>


<?php
session_start();
include 'ayar.php';
include 'ukas.php';
include 'func.php';
?>


<body id="body">
    <div class="ot1">
        <p><strong>LÜTFEN ÖNCE GİRİŞ YAPIN</strong></p>
    </div>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card gen">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo $_SESSION["uye_adsoyad"] . "<br />"; ?></h4>
                                    <p class="text-secondary mb-1"><strong>Kullanıcı Adı:</strong>&nbsp;<?php echo $_SESSION["uye_kadi"] . "<br />"; ?></p>
                                    <p class="text-muted font-size-sm"><strong>Üye İd:</strong>&nbsp;<?php echo $_SESSION["uye_id"] . "<br />"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Ad Soyad</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["uye_adsoyad"]; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">E-mail</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["uye_eposta"]; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Telefon Numarası</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["uye_telno"]; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Ev Adresi</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["uye_evadres"]; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="Değişiklikleri Kaydet">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (empty($_SESSION["uye_adsoyad"])) {
        echo '<style>body{overflow:hidden} .ot1{display:table!important}</style>  <script>setTimeout(()=>{window. location = "login.php"},3000);</script>';
    } else {
    }
    ?>
</body>