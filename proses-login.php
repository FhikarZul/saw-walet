<?php 
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	include "config/koneksi.php";
							
	$sql = "SELECT * FROM `tb_user` WHERE `username`='$username' AND `password`='$password'";
	$query = mysqli_query($connect, $sql);       
	$cek = mysqli_num_rows($query);

	if($cek > 0){
		while ($row = mysqli_fetch_array($query)){

			$user_id = $row['id_user'];
			$level = $row['level'];
			// $umkm_id;
			

			// $sql = "SELECT * FROM `tb_umkm` WHERE `id_admin`='$admin_id'";
            // $query = mysqli_query($connect, $sql);
                        
            // while ($row = mysqli_fetch_array($query)){
			// 	$umkm_id = $row['id_umkm'];
			// }

			if($level=='admin'){

				$_SESSION['id_user'] = $user_id;
				$_SESSION['status'] = "login";
				header("location:admin/index.php");

			}else if($level=='user'){
				$_SESSION['id_user'] = $user_id;
				$_SESSION['status'] = "login";
				header("location:index.php");
			}
		}
	}else{
		header("location:login.php?m=gagal");
	}
                                    
?>