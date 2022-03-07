<?php

    include 'config/koneksi.php';

    $id_jawaban = $_GET['id'];

    
    $query="DELETE FROM `tb_jawaban_user` WHERE `id_jawaban`=".$id_jawaban; 

    
    if (mysqli_query($connect, $query)){   
        header("location:mulai.php");
       
    }
    
?>