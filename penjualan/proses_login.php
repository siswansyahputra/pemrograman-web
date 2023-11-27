<?php
require_once('koneksi.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $mysqli->query("select * from users where username='$username'");
    $row = $result->fetch_assoc();
    if(password_verify($password,$row["password"])){
        session_start();
        $_SESSION['username'] = $username;
        setcookie("username",$username,time()+3600,"/");
        header('location:index.php');
    }else{
        echo "User atau password salah, Coba lagi, <a href='login.php'>login</a>";
    }
}