<?php

    include '../config/koneksi.php';
    
    $id_kriteria = $_GET['id'];
    $kriteria = $_POST['kriteria'];
    $status = $_POST['status'];
    $rating = $_POST['rating'];
  
    $query="UPDATE `tb_kriteria` SET `kriteria`='$kriteria',`status`='$status',`rating_kepentingan`='$rating'  WHERE `id_kriteria`=".$id_kriteria; 

    
    if (mysqli_query($connect, $query)){   
        header("location:kriteria.php");
       
    }
    
?>