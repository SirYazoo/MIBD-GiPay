<?php include "server.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><img src="assets/img/Gipay.png" style="height: 40px;">
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div><a href="index.html" class="btn btn-primary" role="button">Sign In</a></div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img class="regToko" src="assets/img/Toko.png" style="height: 250px;" /></div>
            </div>
        </div>
    </div>
    <div class="row register-form"><div class="col-md-8 offset-md-2" style="margin-top: -75px;">
    <form class="custom-form" style="opacity: 1;" action="regToko.php" method="POST">
        <h1>Pemilik Toko</h1>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
            <div class="col-sm-6 input-column"><input name="username" class="form-control" type="text" required/></div>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="password-input-field">Password</label></div>
            <div class="col-sm-6 input-column"><input name="password" type="password" required class="form-control" /></div>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="namaLengkap-input-field">Nama Lengkap</label></div>
            <div class="col-sm-6 input-column"><input name="nama" type="text" required class="form-control" /></div>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="namaToko-input-field">Nama Toko</label></div>
            <div class="col-sm-6 input-column"><input name="namaToko" class="form-control" type="text" required /></div>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="alamatToko-input-field">Alamat Toko</label></div>
            <div class="col-sm-6 input-column"><input name="alamatToko" class="form-control" type="text" required /></div>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="noHP-input-field">No HP</label></div>
            <div class="col-sm-6 input-column"><input name="noHp" class="form-control" type="tel" required/></div>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email</label></div>
            <div class="col-sm-6 input-column"><input name="email" class="form-control" type="email" required /></div>
        </div>
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3" /><label class="form-check-label" for="formCheck-3">I&#39;ve read and accept the terms and conditions</label></div>
        <button class="btn btn-light submit-button" type="submit" name="reg_toko">Register</button></form>
</div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>