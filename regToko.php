<?php include "server.php";?>
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
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><img
                src="assets/img/Gipay.png" style="height: 40px;">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div><a href="index.php" class="btn btn-primary" role="button">Sign In</a>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img class="regToko" src="assets/img/Toko.png" style="height: 250px;" /></div>
            </div>
        </div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2" style="margin-top: -75px;">
            <form class="custom-form" style="opacity: 1;" action="regToko.php" method="POST">
                <h1>Pemilik Toko</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label"
                            for="name-input-field">Username</label></div>
                    <div class="col-sm-6 input-column"><input name="username" class="form-control" type="text"
                            required /></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label"
                            for="password-input-field">Password</label></div>
                    <div class="col-sm-6 input-column"><input name="password" type="password" required
                            class="form-control" /></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="namaLengkap-input-field">Nama
                            Lengkap</label></div>
                    <div class="col-sm-6 input-column"><input name="nama" type="text" required class="form-control" />
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="namaToko-input-field">Nama
                            Toko</label></div>
                    <div class="col-sm-6 input-column"><input name="namaToko" class="form-control" type="text"
                            required /></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="alamatToko-input-field">Alamat
                            Toko</label></div>
                    <div class="col-sm-6 input-column"><input name="alamatToko" class="form-control" type="text"
                            required /></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label"
                            for="alamatToko-input-field">Kota</label></div>
                    <div class="col-sm-6 input-column">
                        <select name="kota" style="height: 40px;width: auto;" required>
                            <option value="">Pilih Kota</option>
                            <option value="CILEGON">CILEGON</option>
                            <option value="LEBAK">LEBAK</option>
                            <option value="PANDEGLANG">PANDEGLANG</option>
                            <option value="SERANG">SERANG</option>
                            <option value="TANGERANG">TANGERANG</option>
                            <option value="TANGERANG SELATAN">TANGERANG SELATAN</option>
                            <option value="JAKARTA BARAT">JAKARTA BARAT</option>
                            <option value="JAKARTA PUSAT">JAKARTA PUSAT</option>
                            <option value="JAKARTA SELATAN">JAKARTA SELATAN</option>
                            <option value="JAKARTA TIMUR">JAKARTA TIMUR</option>
                            <option value="JAKARTA UTARA">JAKARTA UTARA</option>
                            <option value="KEPULAUAN SERIBU">KEPULAUAN SERIBU</option>
                            <option value="BANDUNG">BANDUNG</option>
                            <option value="BANDUNG BARAT">BANDUNG BARAT</option>
                            <option value="BANJAR">BANJAR</option>
                            <option value="BEKASI">BEKASI</option>
                            <option value="BOGOR">BOGOR</option>
                            <option value="CIAMIS">CIAMIS</option>
                            <option value="CIANJUR">CIANJUR</option>
                            <option value="CIMAHI">CIMAHI</option>
                            <option value="CIREBON">CIREBON</option>
                            <option value="DEPOK">DEPOK</option>
                            <option value="GARUT">GARUT</option>
                            <option value="INDRAMAYU">INDRAMAYU</option>
                            <option value="KARAWANG">KARAWANG</option>
                            <option value="KUNINGAN">KUNINGAN</option>
                            <option value="MAJALENGKA">MAJALENGKA</option>
                            <option value="PANGANDARAN">PANGANDARAN</option>
                            <option value="PURWAKARTA">PURWAKARTA</option>
                            <option value="SUBANG">SUBANG</option>
                            <option value="SUKABUMI">SUKABUMI</option>
                            <option value="SUMEDANG">SUMEDANG</option>
                            <option value="TASIKMALAYA">TASIKMALAYA</option>
                            <option value="BANJARNEGARA">BANJARNEGARA</option>
                            <option value="BANYUMAS">BANYUMAS</option>
                            <option value="BATANG">BATANG</option>
                            <option value="BLORA">BLORA</option>
                            <option value="BOYOLALI">BOYOLALI</option>
                            <option value="BREBES">BREBES</option>
                            <option value="CILACAP">CILACAP</option>
                            <option value="DEMAK">DEMAK</option>
                            <option value="GROBOGAN">GROBOGAN</option>
                            <option value="JEPARA">JEPARA</option>
                            <option value="KARANGANYAR">KARANGANYAR</option>
                            <option value="KEBUMEN">KEBUMEN</option>
                            <option value="KENDAL">KENDAL</option>
                            <option value="KLATEN">KLATEN</option>
                            <option value="KUDUS">KUDUS</option>
                            <option value="MAGELANG">MAGELANG</option>
                            <option value="PATI">PATI</option>
                            <option value="PEKALONGAN">PEKALONGAN</option>
                            <option value="PEMALANG">PEMALANG</option>
                            <option value="PURBALINGGA">PURBALINGGA</option>
                            <option value="PURWOREJO">PURWOREJO</option>
                            <option value="REMBANG">REMBANG</option>
                            <option value="SALATIGA">SALATIGA</option>
                            <option value="SEMARANG">SEMARANG</option>
                            <option value="SRAGEN">SRAGEN</option>
                            <option value="SUKOHARJO">SUKOHARJO</option>
                            <option value="SURAKARTA SOLO">SURAKARTA SOLO</option>
                            <option value="TEGAL">TEGAL</option>
                            <option value="TEMANGGUNG">TEMANGGUNG</option>
                            <option value="WONOGIRI">WONOGIRI</option>
                            <option value="WONOSOBO">WONOSOBO</option>
                            <option value="BANTUL">BANTUL</option>
                            <option value="GUNUNGKIDUL">GUNUNGKIDUL</option>
                            <option value="KULONPROGO">KULONPROGO</option>
                            <option value="SLEMAN">SLEMAN</option>
                            <option value="YOGYAKARTA">YOGYAKARTA</option>
                            <option value="BANGKALAN">BANGKALAN</option>
                            <option value="BANYUWANGI">BANYUWANGI</option>
                            <option value="BATU">BATU</option>
                            <option value="BLITAR">BLITAR</option>
                            <option value="BOJONEGORO">BOJONEGORO</option>
                            <option value="BONDOWOSO">BONDOWOSO</option>
                            <option value="GRESIK">GRESIK</option>
                            <option value="JEMBER">JEMBER</option>
                            <option value="JOMBANG">JOMBANG</option>
                            <option value="KEDIRI">KEDIRI</option>
                            <option value="LAMONGAN">LAMONGAN</option>
                            <option value="LUMAJANG">LUMAJANG</option>
                            <option value="MADIUN">MADIUN</option>
                            <option value="MAGETAN">MAGETAN</option>
                            <option value="MALANG">MALANG</option>
                            <option value="MOJOKERTO">MOJOKERTO</option>
                            <option value="NGANJUK">NGANJUK</option>
                            <option value="NGAWI">NGAWI</option>
                            <option value="PACITAN">PACITAN</option>
                            <option value="PAMEKASAN">PAMEKASAN</option>
                            <option value="PASURUAN">PASURUAN</option>
                            <option value="PONOROGO">PONOROGO</option>
                            <option value="PROBOLINGGO">PROBOLINGGO</option>
                            <option value="SAMPANG">SAMPANG</option>
                            <option value="SIDOARJO">SIDOARJO</option>
                            <option value="SITUBONDO">SITUBONDO</option>
                            <option value="SUMENEP">SUMENEP</option>
                            <option value="SURABAYA">SURABAYA</option>
                            <option value="TRENGGALEK">TRENGGALEK</option>
                            <option value="TUBAN">TUBAN</option>
                            <option value="TULUNGAGUNG">TULUNGAGUNG</option>
                        </select>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="noHP-input-field">No
                            HP</label></div>
                    <div class="col-sm-6 input-column"><input name="noHp" class="form-control" type="tel" maxlength="12" required />
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label"
                            for="email-input-field">Email</label></div>
                    <div class="col-sm-6 input-column"><input name="email" class="form-control" type="email" required />
                    </div>
                </div>
                <button class="btn btn-light submit-button" type="submit" name="reg_toko">Register</button>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>