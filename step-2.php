
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
            <div class="logo-wrapper">
              <a href="index.php">
                <img style="width: 90px;" class="img-fluid" src="assets/images/logo.png" alt="">
              </a></div>
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
            

            </i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="">
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
                  <li class="dropdown"><a class="nav-link" href="step-1.php"><i data-feather="airplay"></i><span>Mulai Analisa</span></a>
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
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Kecamatan Sarudu</h3>
                  <ol class="breadcrumb">
                   
                    <li class="breadcrumb-item">Tahap 2/6<li>
                  </ol>
                </div>
                
              </div>
            </div>
          </div>



          <!-- Container-fluid starts-->
          <div class="container-fluid">
          

            <div class="row">
              <div class="col-sm-12">
              <?php 
                  if(isset($_GET['m'])){
                    if($_GET['m'] == "1"){
                      echo '<p style="color: red;">Semua kriteria harus dipilih!</p>';
                    }
                  }
                ?>
                <div class="card">
                    
                

                        <?php

                          include "config/koneksi.php";
                          $id_user = $_SESSION['id_user'];

                          $sql = "SELECT * FROM `tb_kriteria`";
                          $query = mysqli_query($connect, $sql);

                          $c1;
                          $c2;
                          $c3;
                          $c4;
                          $c5;
                          $c6;
                          $c7;
                          $c8;

                          while ($row = mysqli_fetch_array($query)){
                         
                            if($row['kd_kriteria']=='c1'){
                              $c1 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c2'){
                              $c2 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c3'){
                              $c3 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c4'){
                              $c4 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c5'){
                              $c5 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c6'){
                              $c6 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c7'){
                              $c7 = $row['ket_kriteria'];
                            }else if($row['kd_kriteria']=='c8'){
                              $c8 = $row['ket_kriteria'];
                            }
                          }

                       
                           

                          echo '<form class="form theme-form" action="proses-step-2.php?id_user='.$id_user.'" method="post">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">

                         <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">1. '.$c1.'</label>
                            <div class="col-sm-9">
                              <select class="form-select digits" id="id" name="poin_pilihan_1">
                                  <option value="null">Pilih</option>
                                  <option value="4">Sangat Tinggi (750 mdpl - 1000 mdpl)</option>
                                  <option value="3">Tinggi (500 mdpl - 750 mdpl)</option>
                                  <option value="2">Cukup Tinggi (250 mdpl - 500 mdpl)</option>
                                  <option value="1">Kurang Tinggi (0 mdpl - 250 mdpl)</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">2. '.$c2.'</label>
                            <div class="col-sm-9">
                              <select class="form-select digits" id="id" name="poin_pilihan_2">
                                  <option value="null">Pilih</option>
                                  <option value="4">Sangat Ramai (>300 km)</option>
                                  <option value="3">Ramai (200 km - 300 km)</option>
                                  <option value="2">Cukup Ramai (100 km - 200 km)</option>
                                  <option value="1">Kurang Ramai (20 km - 100 km)</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label">3. '.$c3.'</label>
                          <div class="col-sm-9">
                            <select class="form-select digits" id="id" name="poin_pilihan_3">
                                <option value="null">Pilih</option>
                                <option value="4">Sangat Dekat (1 km - 25 km)</option>
                                <option value="3">Dekat (25 km - 50 km)</option>
                                <option value="2">Cukup Dekat Baik (50 km - 75 km)</option>
                                <option value="1">Kurang Dekat (75 km - 100 km)</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label">4. '.$c4.'</label>
                          <div class="col-sm-9">
                            <select class="form-select digits" id="id" name="poin_pilihan_4">
                                <option value="null">Pilih</option>
                                <option value="4">Sangat Tinggi (>247 mm)</option>
                                <option value="3">Tinggi (247 mm - 177 mm)</option>
                                <option value="2">Cukup Tinggi (177 mm - 107 mm)</option>
                                <option value="1">Rendah (107 mm - 37 mm)</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label">5. '.$c5.'</label>
                          <div class="col-sm-9">
                            <select class="form-select digits" id="id" name="poin_pilihan_5">
                                <option value="null">Pilih</option>
                                <option value="4">Sangat Banyak (5 - 10)</option>
                                <option value="3">Banyak (10 - 15)</option>
                                <option value="2">Cukup Banyak (15 - 20)</option>
                                <option value="1">Kurang Banyak (>20)</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label">6. '.$c6.'</label>
                          <div class="col-sm-9">
                            <select class="form-select digits" id="id" name="poin_pilihan_6">
                                <option value="null">Pilih</option>
                                <option value="4">Sangat Dekat (1 km - 7,5 km)</option>
                                <option value="3">Dekat (7,5 km - 15 km)</option>
                                <option value="2">Cukup Dekat (15 km - 22,5 km)</option>
                                <option value="1">Jauh (22,5 km - 30 km)</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label">7. '.$c7.'</label>
                          <div class="col-sm-9">
                            <select class="form-select digits" id="id" name="poin_pilihan_7">
                                <option value="null">Pilih</option>
                                <option value="4">Sangat Dekat (1 km - 7,5 km)</option>
                                <option value="3">Dekat (7,5 km - 15 km)</option>
                                <option value="2">Cukup Dekat (15 km - 22,5 km)</option>
                                <option value="1">Jauh (22,5 km - 30 km)</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-sm-3 col-form-label">8. '.$c8.'</label>
                          <div class="col-sm-9">
                            <select class="form-select digits" id="id" name="poin_pilihan_8">
                                <option value="null">Pilih</option>
                                <option value="4">Sangat Mahal (110 - 150 juta)</option>
                                <option value="3">Mahal (90 - 110 juta)</option>
                                <option value="2">Cukup Mahal (70 - 90 juta)</option>
                                <option value="1">Murah (50 - 70 juta)</option>
                            </select>
                          </div>
                        </div>

                          
                          
                          
                          ';

                          

                ?>        
                            

                        
                         
                        </div>
                      </div>
                    </div>

                    <div class="card-footer text-end">
                      <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Selanjutnya</button>
                       
                      </div>
                    </div>
                  </form>
                 
                  
                
                  </div>
                </div>
              </div>
           
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
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