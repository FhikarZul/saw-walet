<?php

    session_start();
    include 'config/koneksi.php';

    $id_user = $_SESSION['id_user'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $query="UPDATE `tb_user` SET `username`='$username',`password`='$password' WHERE `id_user`='$id_user'"; 

    if (mysqli_query($connect, $query)){   
       
        header("location:setting.php");
    
    }
?>