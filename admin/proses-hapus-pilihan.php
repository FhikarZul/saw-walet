<?php

    include '../config/koneksi.php';

    $id_pilihan = $_GET['id'];
    $id_kriteria = $_GET['id_kriteria'];

    
    $query="DELETE FROM `tb_pilihan` WHERE `id_pilihan`=".$id_pilihan; 

    
    if (mysqli_query($connect, $query)){   
        header("location:pilihan-kriteria.php?id=".$id_kriteria);
    }
    
?>