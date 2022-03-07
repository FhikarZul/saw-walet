<?php

    include 'config/koneksi.php';

    $poin_pilihan_1 = $_POST['poin_pilihan_1'];
    $poin_pilihan_2 = $_POST['poin_pilihan_2'];
    $poin_pilihan_3 = $_POST['poin_pilihan_3'];
    $poin_pilihan_4 = $_POST['poin_pilihan_4'];
    $poin_pilihan_5 = $_POST['poin_pilihan_5'];
    $poin_pilihan_6 = $_POST['poin_pilihan_6'];
    $poin_pilihan_7 = $_POST['poin_pilihan_7'];
    $poin_pilihan_8 = $_POST['poin_pilihan_8'];

    $id_user = $_GET['id_user'];

    if($poin_pilihan_1 == 'null' || $poin_pilihan_2 == 'null' || $poin_pilihan_3 == 'null' || $poin_pilihan_4 == 'null' || $poin_pilihan_5 == 'null' || $poin_pilihan_6 == 'null' || $poin_pilihan_7 == 'null' || $poin_pilihan_8 == 'null'){
        header("location:step-2.php?m=1");
    }else{
        $query="INSERT INTO `tb_pilihan_user`(`kd_alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`,`c8`, `id_user`) VALUES ('a2','$poin_pilihan_1','$poin_pilihan_2','$poin_pilihan_3','$poin_pilihan_4','$poin_pilihan_5','$poin_pilihan_6','$poin_pilihan_7','$poin_pilihan_8','$id_user')"; 

    
        if (mysqli_query($connect, $query)){   
            echo 'step 1 berhasil';
            header("location:step-3.php");
       
        }
    }
?>