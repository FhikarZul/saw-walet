<?php

    include 'config/koneksi.php';
    session_start();

    $id_alternatif = $_POST['id_alternatif'];
    $id_user = $_SESSION['id_user'];


    //cek data sama
    $sql = "SELECT * FROM `tb_jawaban_user` WHERE `id_alternatif`='$id_alternatif'";
	$query = mysqli_query($connect, $sql);       
	$cek = mysqli_num_rows($query);

	if($cek > 0){
        
        header("location:tambah-sampel.php?m=same");

    }else{

        $sql = "SELECT * FROM `tb_kriteria`";
        $result=mysqli_query($connect,$sql);
        $total_kriteria=mysqli_num_rows($result);

        $valid=true;

        for($i=1; $i<=$total_kriteria; $i++){

            $bobot = $_POST['jawaban_user_'.$i];

            if($bobot=="null"){
                
                $valid = false;
            }
        }


        
        // insert ke tb_jawaban_user
        if($valid){
            $query_insert="INSERT INTO `tb_jawaban_user`(";

            for($i=1; $i<=$total_kriteria; $i++){

                $query_insert .= " `c_".$i."`, ";
                
            }

            $query_insert .= "`id_alternatif`, `id_user` ) VALUES (";

            for($i=1; $i<=$total_kriteria; $i++){

                $bobot = $_POST['jawaban_user_'.$i];

                if($i==$total_kriteria){
                    $query_insert .= " '".$bobot."'";
                }else{
                    $query_insert .= " '".$bobot."', ";
                }
            }

            $query_insert .= ", '$id_alternatif', '$id_user')";




            
            if (mysqli_query($connect, $query_insert)){   
                    echo 'berhasil';
                    header("location:mulai.php");
            
            }else{
                header("location:tambah-sampel.php?m=gagal");
            }

        }else{
            header("location:tambah-sampel.php?m=gagal");
        }
    }


   
?>