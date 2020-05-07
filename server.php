<?php
    require_once "mysqlDB.php";

$db = new MySQLDB('localhost', 'root', '', 'gipay');

if(isset($_POST['login_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM pemiliktoko WHERE username=";

    if(isset($username) && $username!=""){
        $username = $db->escapeString($username);
        $query .= "'".$username."' AND ";
    }
    if(isset($pass) && $pass!=""){
        $password = $db->escapeString($password);
        $query .= "password='".$password."'";
    }

    $res = $db->executeSelectQuery($query);

    if(count($res) == 0){
        $query2 = "SELECT * FROM penggunapublik WHERE username=";
        $query2 .= "'".$username."' AND ";
        $query2 .= "password='".$password."'";
        $res2 = $db->executeSelectQuery($query2);
        if(count($res2) != 0){
            session_start();
                $_SESSION['username'] = $username;
                $_SESSION['nama'] = $res2[0][3];
                $_SESSION['saldo'] = $res2[0][6];
                $_SESSION['noHp'] = $res2[0][5];
                $_SESSION['email'] = $res2[0][4];
            session_write_close();
            header('Location: profPub.php');
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong Username or Password');window.location.href='index.php';</script>";
        }
    }
    else if(count($res) != 0){
        session_start();
            $_SESSION['username'] = $username;
        session_write_close();
        header('Location: profToko.php');
    }
    
}

if(isset($_POST['reg_toko'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $namaToko = $_POST['namaToko'];
    $alamatToko = $_POST['alamatToko'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];

    if(isset($nama) && $nama != ""){
        $username = $db->escapeString($username);
        $password = $db->escapeString($password);
        $nama = $db->escapeString($nama);
        $namaToko = $db->escapeString($namaToko);
        $alamatToko = $db->escapeString($alamatToko);
        $email = $db->escapeString($email);
        $query = "INSERT INTO pemiliktoko(username, password, nama, namaToko, alamatToko, email, noHp, saldo)
                VALUES('$username', '$password', '$nama', '$namaToko', '$alamatToko', '$email', '$noHp', 0)";
        $query_result = $db->executeNonSelectQuery($query);
    }
}

if(isset($_POST['reg_pub'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];

    if(isset($nama) && $nama != ""){
        $username = $db->escapeString($username);
        $password = $db->escapeString($password);
        $nama = $db->escapeString($nama);
        $email = $db->escapeString($email);
        $query = "INSERT INTO penggunapublik(username, password, nama, email, noHp, saldo)
                VALUES('$username', '$password', '$nama', '$email', '$noHp', 0)";
        $query_result = $db->executeNonSelectQuery($query);
    }
}

if(isset($_POST['topup'])){
    $jumlah = $_POST['jumlah'];
    $nama = $_SESSION['nama'];
    $query = "SELECT idUser FROM penggunapublik WHERE nama=";
    $query .= "'".$nama."'";
    $res = $db->executeSelectQuery($query);
    $idUser = $res[0][0];

    if(isset($nama) && $nama != ""){
        $nama = $db->escapeString($nama);
        $query2 = "INSERT INTO verifikasi
                VALUES('$idUser', '$nama', '$jumlah')";
        $query_result = $db->executeNonSelectQuery($query2);
    }
}

function getTopup($uname){
    $db = new MySQLDB('localhost', 'root', '', 'gipay');
    $username = $uname;
    $query = "SELECT idUser FROM penggunapublik WHERE username=";
    $query .= "'".$username."'";
    $res = $db->executeSelectQuery($query);
    $idUser = $res[0][0];
        
    if(isset($username) && $username != ""){
        $username = $db->escapeString($username);
        $query2 = "SELECT idTopup, jumlah, tanggal FROM historytopup WHERE idUser=$idUser";
        $query_result = $db->executeSelectQuery($query2);
    }
    return $query_result;
}
?>