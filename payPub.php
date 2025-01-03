<?php 
    session_start();
    include "server.php";
	if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            </div><input class="form-control-plaintext" type="text" value="Welcome, <?php echo $_SESSION['username']; ?>" readonly="" style="width: 180px;font-size: 18px;"><a href="payPub.php?logout='1'" class="btn btn-primary" role="button">Sign Out</a></div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="background-color: #d7d6d6;font-size: 20px;height: 50px;color: rgb(0,0,0);">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul><a href="profPub.php" style="color: rgb(0,0,0);width: 70px;">Profile</a><a href="topupPub.php" style="color: rgb(0,0,0);width: 80px;">Top Up</a><a href="payPub.php" style="color: rgb(0,0,0);width: 90px;">Payment</a><a href="hispayPub.php"
                    style="color: rgb(0,0,0);width: 160px;">History Payment</a><a href="histopPub.php" style="color: rgb(0,0,0);">History TopUp</a></div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 150px;">
            <form class="form-payPub" method="POST">
            <div class="text-center border rounded-0 shadow-sm profile-box" style="width: 300px;height: 340px;background-color: #ffffff;margin: auto;margin-top: auto;margin-bottom: auto;">
                <div><img class="rounded-circle" src="assets/img/Logo.png" width="85px" height="100px" style="background-color: rgb(255,255,255);padding: 2px;margin-top: auto;"></div><input name="idToko" type="text" placeholder="Id merchant" style="width: 200px;margin: 5px;" /><input name="jumlah" type="text" placeholder="Jumlah pembayaran" style="width: 200px;margin: 30px;" /><input name="password" type="password" placeholder="Password" style="width: 200px;" />
                <button name="pay" class="btn btn-primary" type="submit" style="margin: 25px;">Pay</button>    
            </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>