<?php
require_once('koneksi.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $mysqli->query("insert into users (username,password)values('$username','$password')");
    header('location:login.php');
}else{
    header('location:login.php');
}