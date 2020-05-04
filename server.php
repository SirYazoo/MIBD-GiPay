<?php
    require_once "mysqlDB.php";

$db = new MySQLDB('localhost', 'root', '', 'gipay');

if(isset($_POST['reg_toko'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $namaToko = $_POST['namaToko'];
    $alamatToko = $_POST['alamatToko'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];

    $query = "INSERT INTO user(username, password, nama, email, noHp, saldo)
            VALUES('$username', '$password', '$nama', '$email', '$noHp', 0)";
    $query_result = $db->executeNonSelectQuery($query);
}
?>