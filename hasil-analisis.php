
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/jsgrid-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 03:00:45 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>SAW Walet</title>
   <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/jsgrid.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
   


    <!-- Session   -->
    <?php 
	    session_start();
    
      if($_SESSION['status']!="login"){
        header("location:login.php");
      }
	    
	  ?>

    <div class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  	

    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html">
            <img style="width: 90px;" class="img-fluid" src="assets/images/logo.png" alt="">
            </a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="proses-logout.php"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>


          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center">
           
              <img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">Online</span></div>
           
          

          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Menu</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link" href="mulai.php"><i data-feather="airplay"></i><span>Mulai Analisa</span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link" href="setting.php"><i data-feather="layout"></i><span>Pengaturan</span></a>
                  </li>


      
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          
          



          <!-- Container-fluid starts-->
          <div class="container-fluid">
          
          <div class="row">


            <!-- normalisasi matrix -->
          <div class="col-sm-12">
                <div class="card" style="margin-top: 20px">
                    
                  <div class="card-header pb-0">
                    <h5>Normalisasi Matrix</h5>
                  </div>

                  
                  <div class="card-body">
                  <div class="card">
                 
                  <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>

                          <th scope="col">Nama Kecamatan</th>
                          <?php
                              
                              include 'config/koneksi.php';

                              $id_user = $_SESSION['id_user'];

                              $sql = "SELECT * FROM `tb_kriteria`";
                              $result=mysqli_query($connect,$sql);
                              $total_kriteria=mysqli_num_rows($result);

                              for($i=1; $i<=$total_kriteria; $i++){
                                 echo ' <th scope="col">C'.$i.'</th>'; 
                              }

                          ?>

                          
                         
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php

                        
                        
                        $sql = "SELECT ";
                                                
                                                
                        for($i=1; $i<=$total_kriteria; $i++){

                          $sql .= " `c_".$i."`, ";
                          
                        }
                              

                        $sql .=  " `tb_alternatif`.alternatif FROM `tb_matrix_terminalisasi_user`, `tb_alternatif` WHERE `tb_alternatif`.id_alternatif=`tb_matrix_terminalisasi_user`.id_alternatif AND `id_user`='$id_user'";
                        $query = mysqli_query($connect, $sql);
                   
                        
                        while ($row = mysqli_fetch_array($query)){
                        
                          echo '<tr>
                          <td>'.$row['alternatif'].'</td>';
                          
                          for($i=1; $i<=$total_kriteria; $i++){

                            echo '<td>'.$row['c_'.$i].'</td>';
                            
                          }

                          
                          echo '</tr>';
                                
                         
                        }
                      ?>
                        
            
                      </tbody>
                    </table>
    
                  </div>   
                </div>
                </div>
                </div>
                </div>
                </div>



                <!-- matrix terminalisasi -->
                <div class="col-sm-12">
                <div class="card" style="margin-top: 20px">
                    
                  <div class="card-header pb-0">
                    <h5>Matrix Terminalisasi</h5>
                  </div>

                  
                  <div class="card-body">
                  <div class="card">
                 
                  <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>

                          <th scope="col">Nama Kecamatan</th>
                          <?php
                              
                              

                              $sql = "SELECT * FROM `tb_kriteria`";
                              $query = mysqli_query($connect, $sql);
                              while ($row = mysqli_fetch_array($query)){
                                echo ' <th scope="col">'.$row['rating_kepentingan'].'</th>'; 
                              }


                          ?>

                          
                         
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php

                        
                        
                        $sql = "SELECT ";
                                                
                                                
                        for($i=1; $i<=$total_kriteria; $i++){

                          $sql .= " `c_".$i."`, ";
                          
                        }
                              

                        $sql .=  " `tb_alternatif`.alternatif FROM `tb_matrix_terminalisasi_user`, `tb_alternatif` WHERE `tb_alternatif`.id_alternatif=`tb_matrix_terminalisasi_user`.id_alternatif AND `id_user`='$id_user'";
                        $query = mysqli_query($connect, $sql);
                   
                        
                        while ($row = mysqli_fetch_array($query)){
                        
                          echo '<tr>
                          <td>'.$row['alternatif'].'</td>';
                          
                          for($i=1; $i<=$total_kriteria; $i++){

                            echo '<td>'.$row['c_'.$i].'</td>';
                            
                          }

                          
                          echo '</tr>';
                                
                         
                        }
                      ?>
                        
            
                      </tbody>
                    </table>
    
                  </div>   
                </div>
                </div>
                </div>
                </div>
              



              <!-- hasil analisis -->
              <div class="col-sm-12">
                <div class="card">
                    
                  <div class="card-header pb-0">
                    <h5>Hasil Analisis</h5>
                  </div>

                  
                  <div class="card-body">
                  <div class="card">
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">Nilai Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                    
                      <?php

                       
                  

                        $sql = "SELECT `tb_alternatif`.alternatif, `nilai_total` FROM `tb_hasil_analisis`,`tb_alternatif` WHERE `tb_alternatif`.id_alternatif = `tb_hasil_analisis`.id_alternatif AND `id_user`='$id_user' ORDER BY `nilai_total` DESC";
                        $query = mysqli_query($connect, $sql);
                   
                        
                        while ($row = mysqli_fetch_array($query)){
                        
                          echo '<tr>
                                    <td>'.$row['alternatif'].'</td>
                                    <td>'.$row['nilai_total'].'</td>
                                </tr>';
                                
                         
                        }
                      ?>
                        
            
                      </tbody>
                    </table>




                    
                  </div>
                

                  
                  
                     


                  
                  
                </div>
                <?php

                  $sql = "SELECT `tb_alternatif`.alternatif, max(`nilai_total`) AS `nilai_total` FROM `tb_hasil_analisis` ,`tb_alternatif` WHERE `tb_alternatif`.id_alternatif = `tb_hasil_analisis`.id_alternatif AND `id_user`='$id_user' ORDER BY `nilai_total` DESC";
                  $query = mysqli_query($connect, $sql);
                                       
                  while ($row = mysqli_fetch_array($query)){

                      echo '
                        
                        <p>Berdasarkan analisis menggunakan metode SAW Sub, wilayah yang memiliki tempat yang layak<br> dan baik untuk dijadikan sebagai tempat budi daya burung walet ialah kecamatan <b>'.$row['alternatif'].'</b> <br>yang memiliki total nilai integral tertinggi, yaitu <b>'.$row['nilai_total'].'<b>.
                        
                        ';

                  }
                ?>
                </div>
                
                     
                     
                  
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
            
          <!-- Container-fluid Ends-->
        
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="assets/js/jsgrid/griddata.js"></script>
    <script src="assets/js/jsgrid/jsgrid.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

   
  </body>
</html>