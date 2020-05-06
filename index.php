<?php include "server.php";?>
<!DOCTYPE html>
<html style="background-color: #eef4f7;">

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

<body style="background-color: rgb(238,244,247);">
    <div></div>
    <div style="margin-top: 150px;background-color: #eef4f7;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background-color: #eef4f7;"><img src="assets/img/Gipay.png" style="height: 115px;"></div>
                <div class="col-md-6" style="background-color: #eef4f7;">
                    <div class="login-card"><img class="profile-img-card" src="assets/img/Logo.png" style="height: 115px;width: 100px;">
                        <p class="profile-name-card"> </p>
                        <form class="form-signin" method="POST"><span class="reauth-email"> </span><input name="username" class="form-control" type="text" id="inputUsername" required="" placeholder="Username" autofocus=""><input name="password" class="form-control" type="password" id="inputPassword" required="" placeholder="Password">
                            <div
                                class="checkbox">
                                <div class="form-check" style="margin-right: 143px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Remember me</label></div>
                    </div><button name="login_user" class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button></form><a class="sign-up" href="signup.html">Create your account here</a></div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>