<?php
    session_start();
    include('koneksi.php');

    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $data = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username` = '$user' AND `password` = '$pass'");

    if (mysqli_num_rows($data) <= 0 ) {
        header('location:login.php?pesan=gagal');
    }else {
        $_SESSION['username'] = $user;
        header('location:index.php');
    }
?>
