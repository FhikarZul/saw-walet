<?php

    include '../config/koneksi.php';

    $id_alternatif = $_GET['id'];


    // delete tb_hasil_analisis
    $query="DELETE FROM `tb_hasil_analisis` WHERE `id_alternatif`=".$id_alternatif; 
    mysqli_query($connect, $query);

    // delete tb_jawaban_user
    $query="DELETE FROM `tb_jawaban_user` WHERE `id_alternatif`=".$id_alternatif; 
    mysqli_query($connect, $query);

    // delete tb_matrix_terminalisasi_user
    $query="DELETE FROM `tb_matrix_terminalisasi_user` WHERE `id_alternatif`=".$id_alternatif; 
    mysqli_query($connect, $query);

    
    $query="DELETE FROM `tb_alternatif` WHERE `id_alternatif`=".$id_alternatif; 

    
    if (mysqli_query($connect, $query)){   
        header("location:alternatif.php");
       
    }
    
?>