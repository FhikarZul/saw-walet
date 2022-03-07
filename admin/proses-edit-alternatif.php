<?php

    include '../config/koneksi.php';

    $id_alternatif = $_GET['id'];
    $alternatif = $_POST['alternatif'];
  
    $query="UPDATE `tb_alternatif` SET `alternatif`='$alternatif'  WHERE `id_alternatif`=".$id_alternatif; 

    
    if (mysqli_query($connect, $query)){   
        header("location:alternatif.php");
       
    }
    
?>