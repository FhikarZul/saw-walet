<?php

    
    include 'config/koneksi.php';
    session_start();
    $id_user = $_SESSION['id_user'];

    

    
    $sql_alternatif = "SELECT * FROM `tb_alternatif`";
    $result_alternatif=mysqli_query($connect,$sql_alternatif);
    $total_alternatif=mysqli_num_rows($result_alternatif);

    $sql_kriteria = "SELECT * FROM `tb_kriteria`";
    $result_kriteria=mysqli_query($connect,$sql_kriteria);
    $total_kriteria=mysqli_num_rows($result_kriteria);



    // normalisai matrix
    $query_delete = "DELETE FROM `tb_matrix_terminalisasi_user` WHERE `id_user`=".$id_user;
    if (mysqli_query($connect, $query_delete)){   
        echo 'clear matrix terminalisi<br>';
    }

    echo'<b>Normalisasi Matrix</b><br>';
    $sql= "SELECT * FROM `tb_jawaban_user` WHERE `id_user`=".$id_user;
    $query = mysqli_query($connect, $sql);
    
    $inc=1;
    while ($row = mysqli_fetch_array($query)){


            //insert matrix terminalisasi builder
            $query_insert="INSERT INTO `tb_matrix_terminalisasi_user`(";

            for($i=1; $i<=$total_kriteria; $i++){

                $query_insert .= " `c_".$i."`, ";
                
            }

            $query_insert .= " `id_alternatif`, `id_user` ) VALUES (";
            //insert matrix terminalisasi builder


            echo '<br> A'.$inc;
            
            for($i=1; $i<=$total_kriteria; $i++){
                

                $sql_status= "SELECT `status` FROM `tb_kriteria` WHERE `kode`='c_".$i."'";
                $query_status = mysqli_query($connect, $sql_status);
                        
                while ($row_status = mysqli_fetch_array($query_status)){
                     $status = $row_status['status'];   
                }
                
                if($status=='benefit'){
                    $sql_nilai= "SELECT max(`c_".$i."`) AS `tertinggi` FROM `tb_jawaban_user` WHERE `id_user`='$id_user'";
                }else{
                    $sql_nilai= "SELECT min(`c_".$i."`) AS `terendah` FROM `tb_jawaban_user` WHERE `id_user`='$id_user'";
                }

                $total;
                
                $query_nilai = mysqli_query($connect, $sql_nilai);
                        
                while ($row_nilai = mysqli_fetch_array($query_nilai)){

                    if($status=='benefit'){
                        $total = $row_nilai['tertinggi'];   
                    }else{
                        $total = $row_nilai['terendah'];   
                    }

                }
                
                if($status=='benefit'){
                    $kriteria = $row['c_'.$i]/$total;
                }else{
                    $kriteria = $total/$row['c_'.$i];
                }

               

                echo '<br>Total C'.$i.': '.$kriteria;

                
                //insert matrix terminalisasi builder
                if($i==$total_kriteria){
                    $query_insert .= " '".$kriteria."'";
                }else{
                    $query_insert .= " '".$kriteria."', ";
                }
                //insert matrix terminalisasi builder
                

                
                
            }

            

            //insert matrix terminalisasi builder
            $id_alternatif = $row['id_alternatif'];
            $query_insert .= ",'$id_alternatif', '$id_user')";
            echo '<br>Query: '.$query_insert;
            if (mysqli_query($connect, $query_insert)){   
                echo 'berhasil';
           
            }
            //insert matrix terminalisasi builder

            echo '<br>';
            

            $inc++;

    }

    // hitung nilai integral
    echo '<br><br>';
    $query_delete = "DELETE FROM `tb_hasil_analisis` WHERE `id_user`=".$id_user;
    if (mysqli_query($connect, $query_delete)){   
        echo 'clear hasil analisis<br>';
    }

    echo'<b>Hitung Nilai Integral</b><br>';
    $sql= "SELECT * FROM `tb_matrix_terminalisasi_user` WHERE `id_user`=".$id_user;
    $query = mysqli_query($connect, $sql);
    
   
    $inc=1;
    while ($row = mysqli_fetch_array($query)){
        $total = 0;

        for($i=1; $i<=$total_kriteria; $i++){

            $rating_kepentingan;
            $sql_kepentingan= "SELECT `rating_kepentingan` FROM `tb_kriteria` WHERE `kode`='c_".$i."'";
            $query_kepentingan = mysqli_query($connect, $sql_kepentingan);
                        
            while ($row_kepentingan = mysqli_fetch_array($query_kepentingan)){
                $rating_kepentingan = $row_kepentingan['rating_kepentingan'];   
            }

            $reg = ($row['c_'.$i]*$rating_kepentingan);
            
            $total = $total+$reg;
         
        }

       

        echo '<br>Total A'.$inc.': '.$total;

        $id_alternatif = $row['id_alternatif'];
        $query_insert = "INSERT INTO `tb_hasil_analisis`(`nilai_total`, `id_alternatif`, `id_user`) VALUES ('$total','$id_alternatif', '$id_user')";
        if (mysqli_query($connect, $query_insert)){   
            header("location:hasil-analisis.php");  
        }

        echo '<br>';

        $inc++;
    }

    

    
?>