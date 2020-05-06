<?php
    require_once "mysqlDB.php";

$db = new MySQLDB('localhost', 'root', '', 'gipay');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query="SELECT * FROM pemiliktoko WHERE username=";

    if(isset($username) && $username!=""){
        $username = $this->db->escapeString($username);
        $query.= "'". $username ."' AND ";
    }
    if(isset($pass) && $pass!=""){
        $password = $this->db->escapeString($password);
        $query.="password='". $password ."'";
    }

    $res = $db->executeSelectQuery($query);

    if(count($res) == 0){
        $query= "SELECT * FROM penggunapublik WHERE username='". $username ."' AND password='". $password ."'";
        $res = $db->executeSelectQuery($query);
        if(count($res) != 0){
            session_start();
                $_SESSION['username'] = $username;
            session_write_close();
            header('Location: profPub.php');
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong Username or Password');</script>";
        }
    }
    else{
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
?>