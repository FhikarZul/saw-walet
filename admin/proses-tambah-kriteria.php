<?php

    session_start();
    include '../config/koneksi.php';

    $kriteria = $_POST['kriteria'];
    $status = $_POST['status'];
    $rating = $_POST['rating'];


    //cek data sama
    $sql = "SELECT * FROM `tb_kriteria` WHERE `kriteria`='$kriteria'";
	$query = mysqli_query($connect, $sql);       
	$cek = mysqli_num_rows($query);

	if($cek > 0){
        
        header("location:tambah-kriteria.php?m=gagal");

    }else{

        //auto kode
        $auto_kode = "SELECT * FROM `tb_kriteria`";
        $result_auto_kode=mysqli_query($connect,$auto_kode);
        $result=mysqli_num_rows($result_auto_kode);
        $kode = 'c_'.$result+1;

        // insert data tb_kriteria
        $query="INSERT INTO `tb_kriteria`(`kriteria`, `status`, `kode`, `rating_kepentingan`) VALUES ('$kriteria','$status','$kode','$rating')"; 
        mysqli_query($connect, $query);


        $sql = "SELECT * FROM `tb_kriteria`";
        $result=mysqli_query($connect,$sql);
        $total_kriteria=mysqli_num_rows($result);


        //drop table tb_jawaban_user
        $query_drop=" DROP TABLE `tb_jawaban_user`"; 
        if(mysqli_query($connect, $query_drop)){
            echo '<br>Berhasil drop tb_jawaban_user';
        }

        //drop table tb_matrix_terminalisasi_user
        $query_drop_tb_matrix_terminalisasi_user=" DROP TABLE `tb_matrix_terminalisasi_user`"; 
        if(mysqli_query($connect, $query_drop_tb_matrix_terminalisasi_user)){
            echo '<br>Berhasil drop tb_matrix_terminalisasi_user';
        }


        //create table tb_jawaban_user
        $query_create_tb_jawaban_user="CREATE TABLE tb_jawaban_user(id_jawaban int PRIMARY KEY AUTO_INCREMENT, ";

        for($i=1; $i<=$total_kriteria; $i++){

            $query_create_tb_jawaban_user .= " c_".$i." int, ";
                
        }

        $query_create_tb_jawaban_user .= "id_alternatif int, id_user int, FOREIGN KEY(id_alternatif) REFERENCES tb_alternatif(id_alternatif), FOREIGN KEY(id_user) REFERENCES tb_user(id_user))";

        if (mysqli_query($connect, $query_create_tb_jawaban_user)){   
                echo '<br>Berhasil create tb_jawaban_user';
        }



        //create table tb_matrix_terminalisasi_user
        $query_create_tb_matrix_terminalisasi_user="CREATE TABLE tb_matrix_terminalisasi_user(id_matrix_term int PRIMARY KEY AUTO_INCREMENT, ";

        for($i=1; $i<=$total_kriteria; $i++){

            $query_create_tb_matrix_terminalisasi_user .= " c_".$i." decimal(4,2), ";
                
        }

        $query_create_tb_matrix_terminalisasi_user .= "id_alternatif int, id_user int, FOREIGN KEY(id_alternatif) REFERENCES tb_alternatif(id_alternatif), FOREIGN KEY(id_user) REFERENCES tb_user(id_user))";

        if (mysqli_query($connect, $query_create_tb_matrix_terminalisasi_user)){   
                echo '<br>Berhasil create tb_matrix_terminalisasi_user';
                header("location:kriteria.php");
            
        }
    }

    
    

    
?>