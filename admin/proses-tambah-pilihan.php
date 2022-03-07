<?php

    session_start();
    include '../config/koneksi.php';

    $pilihan = $_POST['pilihan'];
    $bobot = $_POST['bobot'];
    $id_kriteria = $_GET['id'];
    
    //cek data sama
    $sql = "SELECT * FROM `tb_pilihan` WHERE `pilihan`='$pilihan'";
	$query = mysqli_query($connect, $sql);       
	$cek = mysqli_num_rows($query);

	if($cek > 0){
        
        header("location:tambah-pilihan.php?m=gagal&id=".$id_kriteria);

    }else{

        $query="INSERT INTO `tb_pilihan`(`pilihan`, `bobot`, `id_kriteria`) VALUES ('$pilihan','$bobot','$id_kriteria')"; 

        if (mysqli_query($connect, $query)){   
        
            header("location:pilihan-kriteria.php?id=".$id_kriteria);
        
        }
    }
?>