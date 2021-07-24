<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="stylesheet" href="<?php echo base_url().'GIS/css/leaflet.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url().'GIS/css/qgis2web.css'?>"><link rel="stylesheet" href="GIS/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'css/leaflet-control-geocoder.Geocoder.css'?>">
        <style>
        #map {
            width: 704px;
            height: 501px;
        }
        </style>
  <title>Admin GIS</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'vendor/fontawesome-free/css/all.min.css" rel="stylesheet'?>" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'css/sb-admin-2.min.css" rel="stylesheet'?>">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/MapsIndex1');?>">
          <span>Maps Poligon</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/MapsIndex2');?>">
          <span>Maps Point</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/InsertIndex');?>">
          <span>Insert Data</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/InsertIndex2');?>">
          <span>Insert Data Jalur</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/ReadDataIndex');?>">
          <span>Read Data</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->

          

            <!-- Area Chart -->
            <div class="card shadow">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" align="center">Ubah Data Komoditas Daerah Istimewa Yogyakarta</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
                    <table align="center"><tr><td>
                       <?php
                    foreach ($komoditas as $data) {
                      
                  ?>
                  <form action="<?php echo base_url().'index.php/Admin/UpdateData'; ?>" method="POST">
                      <table align="center">
                        <tr>
                          <td>Wilayah</td>
                          <td>:</td>
                          <td colspan="9">
                              <select id="inputState" class="form-control" name="wil">
                                <?php 
                                    foreach ($wilayah as $key) {
                                      echo "<option value='$key->Id_Wilayah'>".$key->Kab_Kota."</option>";
                                    }
                                  ?>
                              </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Kecamatan</td>
                          <td>:</td>
                          <td colspan="9">
                              <select id="inputState" class="form-control" name="kec">
                                <?php 
                                    foreach ($kecamatan as $key) {
                                      echo "<option value='$key->ID'>".$key->Kecamatan."</option>";
                                    }
                                  ?>
                              </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Jenis</td>
                          <td>:</td>
                          <td colspan="9">
                              <select id="inputState" class="form-control" name="jenis">
                                <?php 
                                    foreach ($jenis as $key) {
                                      echo "<option value='$key->Id_Jenis'>".$key->Jenis."</option>";
                                    }
                                  ?>
                              </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Tahun</td>
                          <td>:</td>
                          <td colspan="9"><input type="number" name="year" class="form-control form-control-user" value="<?php echo $data->Tahun ?>"></td>
                        </tr>
                        <tr>
                          <td>Luas Lahan Tanam</td>
                          <td>:</td>
                          <td colspan="9"><input type="number" name="LLT" class="form-control form-control-user" value="<?php echo $data->Luas_Lahan_Tanam ?>"></td>
                        </tr>
                        <tr>
                          <td>Luas Aktivitas Tanam</td>
                          <td>:</td>
                          <td colspan="9"><input type="number" name="LAT" class="form-control form-control-user" value="<?php echo $data->Luas_Aktivitas_Tanam ?>"></td>
                        </tr>
                        <tr>
                          <td>Jumlah Produktivitas</td>
                          <td>:</td>
                          <td colspan="9"><input type="number" name="JP" class="form-control form-control-user" value="<?php echo $data->Jumlah_Produktivitas ?>"></td>
                        </tr>
                        <tr>
                          <td>Rata Rata Produktivitas Produk</td>
                          <td>:</td>
                          <td colspan="9"><input type="number" name="RRPP" class="form-control form-control-user" value="<?php echo $data->Rata_Rata_Produktivitas_Produk ?>"></td>
                        </tr>
                        <tr>
                          <td>Rata Rata Produktivitas Lahan</td>
                          <td>:</td>
                          <td colspan="9"><input type="number" name="RRPL" class="form-control form-control-user" value="<?php echo $data->Rata_Rata_Produktivitas_Lahan ?>"></td>
                        </tr>
                        <tr>
                          <td colspan="9"><input type="submit" class="btn btn-success btn-user btn-block" name="submit" value="Submit"></td>
                        </tr>
                       
                      </table>
                    </form>   
                    <?php } ?>
                    </td></tr></table>
                  
                </div>
                </div>
            
        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
