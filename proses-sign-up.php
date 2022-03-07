<?php

    include 'config/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query="INSERT INTO `tb_user`(`username`, `password`, `level`) VALUES ('$username','$password','user')"; 

    if (mysqli_query($connect, $query)){   
            header("location:login.php");
        
    }
?>