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
  <title>SB Admin 2 - Dashboard</title>

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
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
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
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
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
            
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" align="center">Peta Daerah Istimewa Yogyakarta</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <div id="map" style="width: 1050px; height: 300px;" align="center">
                    </div>
                    <script src="<?php echo base_url().'GIS/js/qgis2web_expressions.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/leaflet.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/leaflet.rotatedMarker.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/leaflet.pattern.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/leaflet-hash.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/Autolinker.min.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/rbush.min.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/labelgun.min.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/labels.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/js/leaflet-control-geocoder.Geocoder.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/DIYCombine_0.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/SlemanKecSample_1.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/GunungKidulKec_2.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/BantulKec_3.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/YogyakartaKec_4.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/KulonProgoKec_5.js'?>"></script>
                    <script src="<?php echo base_url().'GIS/data/Jateng2_6.js'?>"></script>
                    <script>
                    var map = L.map('map', {
                        zoomControl:true, maxZoom:28, minZoom:1
                    }).fitBounds([[-8.330872278068401,110.1497594438695],[-7.458628499551503,111.37684387777503]]);
                    var hash = new L.Hash(map);
                    map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
                    var bounds_group = new L.featureGroup([]);
                    function setBounds() {
                    }
                    function pop_DIYCombine_0(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['id'] !== null ? Autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['name'] !== null ? Autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_DIYCombine_0_0(feature) {
                        switch(String(feature.properties['name'])) {
                            case 'Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_DIYCombine_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,245,240,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Gunung Kidul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_DIYCombine_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,204,184,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_DIYCombine_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,143,111,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_DIYCombine_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(244,77,55,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_DIYCombine_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(197,22,27,1.0)',
                            interactive: true,
                        }
                                break;
                            default:
                                return {
                            pane: 'pane_DIYCombine_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,0,13,1.0)',
                            interactive: true,
                        }
                                break;
                        }
                    }
                    map.createPane('pane_DIYCombine_0');
                    map.getPane('pane_DIYCombine_0').style.zIndex = 400;
                    map.getPane('pane_DIYCombine_0').style['mix-blend-mode'] = 'normal';
                    var layer_DIYCombine_0 = new L.geoJson(json_DIYCombine_0, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_DIYCombine_0',
                        layerName: 'layer_DIYCombine_0',
                        pane: 'pane_DIYCombine_0',
                        onEachFeature: pop_DIYCombine_0,
                        style: style_DIYCombine_0_0,
                    });
                    bounds_group.addLayer(layer_DIYCombine_0);
                    map.addLayer(layer_DIYCombine_0);
                    function pop_SlemanKecSample_1(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['id'] !== null ? Autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['name'] !== null ? Autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_SlemanKecSample_1_0(feature) {
                        switch(String(feature.properties['name'])) {
                            case 'Berbah, Sleman Regency, Special Region of Yogyakarta, 55573, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,245,240,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Cangkringan, Sleman Regency, Special Region of Yogyakarta, 55583, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,235,225,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Depok, Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(254,223,209,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Gamping, Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,204,184,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Godean, Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,185,159,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kalasan, Sleman Regency, Special Region of Yogyakarta, 55571, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,164,135,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Minggir, Sleman Regency, Special Region of Yogyakarta, 55562, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,143,111,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Mlati, Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,122,90,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Moyudan, Sleman Regency, Special Region of Yogyakarta, 55563, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(250,101,71,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pakem, Sleman Regency, Special Region of Yogyakarta, 55582, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(244,77,55,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Prambanan, Sleman Regency, Special Region of Yogyakarta, 55572, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(235,54,42,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Seyegan, Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(216,36,34,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Sleman, Sleman Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(197,22,27,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Tempel, Sleman Regency, Special Region of Yogyakarta, 55552, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(176,17,23,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Turi, Sleman Regency, Special Region of Yogyakarta, 555551, Indonesia':
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(144,10,18,1.0)',
                            interactive: true,
                        }
                                break;
                            default:
                                return {
                            pane: 'pane_SlemanKecSample_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,0,13,1.0)',
                            interactive: true,
                        }
                                break;
                        }
                    }
                    map.createPane('pane_SlemanKecSample_1');
                    map.getPane('pane_SlemanKecSample_1').style.zIndex = 401;
                    map.getPane('pane_SlemanKecSample_1').style['mix-blend-mode'] = 'normal';
                    var layer_SlemanKecSample_1 = new L.geoJson(json_SlemanKecSample_1, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_SlemanKecSample_1',
                        layerName: 'layer_SlemanKecSample_1',
                        pane: 'pane_SlemanKecSample_1',
                        onEachFeature: pop_SlemanKecSample_1,
                        style: style_SlemanKecSample_1_0,
                    });
                    bounds_group.addLayer(layer_SlemanKecSample_1);
                    map.addLayer(layer_SlemanKecSample_1);
                    function pop_GunungKidulKec_2(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['pkuid'] !== null ? Autolinker.link(feature.properties['pkuid'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['Ketinggian'] !== null ? Autolinker.link(feature.properties['Ketinggian'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['Keterangan'] !== null ? Autolinker.link(feature.properties['Keterangan'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['Luas Perkebunan'] !== null ? Autolinker.link(feature.properties['Luas Perkebunan'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['Luas Pertanian'] !== null ? Autolinker.link(feature.properties['Luas Pertanian'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_GunungKidulKec_2_0(feature) {
                        switch(String(feature.properties['Kecamatan'])) {
                            case 'Gedangsari':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,245,240,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Girisubo':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,236,227,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Karangmojo':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,226,213,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Ngawen':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(254,211,193,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Nglipar':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,194,170,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Paliyan':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,176,149,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Panggang':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,158,127,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Patuk':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,139,107,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Playen':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,121,89,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Ponjong':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(251,103,72,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Purwosari':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(245,81,58,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Rongkop':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,60,44,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Saptosari':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(224,44,37,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Semanu':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,28,30,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Semin':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(189,20,26,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Tanjungsari':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(171,16,22,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Tepus':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(140,8,17,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Wonosari':
                                return {
                            pane: 'pane_GunungKidulKec_2',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,0,13,1.0)',
                            interactive: true,
                        }
                                break;
                        }
                    }
                    map.createPane('pane_GunungKidulKec_2');
                    map.getPane('pane_GunungKidulKec_2').style.zIndex = 402;
                    map.getPane('pane_GunungKidulKec_2').style['mix-blend-mode'] = 'normal';
                    var layer_GunungKidulKec_2 = new L.geoJson(json_GunungKidulKec_2, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_GunungKidulKec_2',
                        layerName: 'layer_GunungKidulKec_2',
                        pane: 'pane_GunungKidulKec_2',
                        onEachFeature: pop_GunungKidulKec_2,
                        style: style_GunungKidulKec_2_0,
                    });
                    bounds_group.addLayer(layer_GunungKidulKec_2);
                    map.addLayer(layer_GunungKidulKec_2);
                    function pop_BantulKec_3(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['id'] !== null ? Autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['name'] !== null ? Autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_BantulKec_3_0(feature) {
                        switch(String(feature.properties['name'])) {
                            case 'Bambanglipuro, bantul':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,245,240,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Banguntapan, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,236,227,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Bantul, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,226,213,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Dlingo, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(254,211,193,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Imogiri, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,194,170,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Jetis, Bantul Regency, Special Region of Yogyakarta, 55781, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,176,149,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kasihan, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,158,127,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kretek, Bantul Regency, Special Region of Yogyakarta, 55772, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,139,107,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pajangan, Bantul Regency, Special Region of Yogyakarta, 55751, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,121,89,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pandak, Bantul Regency, Special Region of Yogyakarta, 55761, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(251,103,72,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Piyungan, Bantul Regency, Special Region of Yogyakarta, 55792, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(245,81,58,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pleret, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,60,44,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pundong, Bantul Regency, Special Region of Yogyakarta, 55771, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(224,44,37,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Sanden, Bantul Regency, Special Region of Yogyakarta, 55763, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,28,30,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Sedayu, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(189,20,26,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Sewon, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(171,16,22,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Srandakan, Bantul Regency, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(140,8,17,1.0)',
                            interactive: true,
                        }
                                break;
                            default:
                                return {
                            pane: 'pane_BantulKec_3',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,0,13,1.0)',
                            interactive: true,
                        }
                                break;
                        }
                    }
                    map.createPane('pane_BantulKec_3');
                    map.getPane('pane_BantulKec_3').style.zIndex = 403;
                    map.getPane('pane_BantulKec_3').style['mix-blend-mode'] = 'normal';
                    var layer_BantulKec_3 = new L.geoJson(json_BantulKec_3, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_BantulKec_3',
                        layerName: 'layer_BantulKec_3',
                        pane: 'pane_BantulKec_3',
                        onEachFeature: pop_BantulKec_3,
                        style: style_BantulKec_3_0,
                    });
                    bounds_group.addLayer(layer_BantulKec_3);
                    map.addLayer(layer_BantulKec_3);
                    function pop_YogyakartaKec_4(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['id'] !== null ? Autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['name'] !== null ? Autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_YogyakartaKec_4_0(feature) {
                        switch(String(feature.properties['name'])) {
                            case 'Danurejan, Yogyakarta, Special Region of Yogyakarta, 55211, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,245,240,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Gedongtengen, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,234,224,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Gondokusuman, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(254,221,205,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Gondomanan, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,200,178,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Jetis, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,179,152,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kotagede, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,156,126,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kraton, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,134,102,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Mantrijeron, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,112,80,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Mergangsan, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(247,87,62,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Ngampilan, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(240,61,45,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pakualaman, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(222,41,36,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Tegalrejo, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,23,28,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Umbulharjo, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(179,18,23,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Wirobrajan, Yogyakarta, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(147,10,18,1.0)',
                            interactive: true,
                        }
                                break;
                            default:
                                return {
                            pane: 'pane_YogyakartaKec_4',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,0,13,1.0)',
                            interactive: true,
                        }
                                break;
                        }
                    }
                    map.createPane('pane_YogyakartaKec_4');
                    map.getPane('pane_YogyakartaKec_4').style.zIndex = 404;
                    map.getPane('pane_YogyakartaKec_4').style['mix-blend-mode'] = 'normal';
                    var layer_YogyakartaKec_4 = new L.geoJson(json_YogyakartaKec_4, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_YogyakartaKec_4',
                        layerName: 'layer_YogyakartaKec_4',
                        pane: 'pane_YogyakartaKec_4',
                        onEachFeature: pop_YogyakartaKec_4,
                        style: style_YogyakartaKec_4_0,
                    });
                    bounds_group.addLayer(layer_YogyakartaKec_4);
                    map.addLayer(layer_YogyakartaKec_4);
                    function pop_KulonProgoKec_5(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['id'] !== null ? Autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['name'] !== null ? Autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_KulonProgoKec_5_0(feature) {
                        switch(String(feature.properties['name'])) {
                            case 'Galur, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,245,240,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Girimulyo, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,232,221,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kalibawang, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(254,214,196,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Kokap, Kulon Progo, Special Region of Yogyakarta, 55653, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,190,165,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Lendah, Kulon Progo, Special Region of Yogyakarta, 55663, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,164,135,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Nanggulan, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,138,106,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Panjatan, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(252,112,80,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Pengasih, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(246,83,59,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Samigaluh, Kulon Progo, Special Region of Yogyakarta, 55673, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(235,54,42,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Sentolo, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(212,32,32,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Temon, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(186,20,25,1.0)',
                            interactive: true,
                        }
                                break;
                            case 'Wates, Kulon Progo, Special Region of Yogyakarta, Indonesia':
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(155,12,19,1.0)',
                            interactive: true,
                        }
                                break;
                            default:
                                return {
                            pane: 'pane_KulonProgoKec_5',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(103,0,13,1.0)',
                            interactive: true,
                        }
                                break;
                        }
                    }
                    map.createPane('pane_KulonProgoKec_5');
                    map.getPane('pane_KulonProgoKec_5').style.zIndex = 405;
                    map.getPane('pane_KulonProgoKec_5').style['mix-blend-mode'] = 'normal';
                    var layer_KulonProgoKec_5 = new L.geoJson(json_KulonProgoKec_5, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_KulonProgoKec_5',
                        layerName: 'layer_KulonProgoKec_5',
                        pane: 'pane_KulonProgoKec_5',
                        onEachFeature: pop_KulonProgoKec_5,
                        style: style_KulonProgoKec_5_0,
                    });
                    bounds_group.addLayer(layer_KulonProgoKec_5);
                    map.addLayer(layer_KulonProgoKec_5);
                    function pop_Jateng2_6(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['id'] !== null ? Autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['name'] !== null ? Autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_Jateng2_6_0() {
                        return {
                            pane: 'pane_Jateng2_6',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(190,178,151,1.0)',
                            interactive: true,
                        }
                    }
                    map.createPane('pane_Jateng2_6');
                    map.getPane('pane_Jateng2_6').style.zIndex = 406;
                    map.getPane('pane_Jateng2_6').style['mix-blend-mode'] = 'normal';
                    var layer_Jateng2_6 = new L.geoJson(json_Jateng2_6, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_Jateng2_6',
                        layerName: 'layer_Jateng2_6',
                        pane: 'pane_Jateng2_6',
                        onEachFeature: pop_Jateng2_6,
                        style: style_Jateng2_6_0,
                    });
                    bounds_group.addLayer(layer_Jateng2_6);
                    map.addLayer(layer_Jateng2_6);
                    var osmGeocoder = new L.Control.Geocoder({
                        collapsed: true,
                        position: 'topleft',
                        text: 'Search',
                        title: 'Testing'
                    }).addTo(map);
                    document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
                    .className += ' fa fa-search';
                    document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
                    .title += 'Search for a place';
                    var baseMaps = {};
                        L.control.layers(baseMaps,{'<img src="legend/Jateng2_6.png" /> Jateng2': layer_Jateng2_6,'Kulon Progo Kec<br /><table><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_GalurKulonProgoSpecialRegionofYogyakartaIndonesia0.png" /></td><td>Galur, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_GirimulyoKulonProgoSpecialRegionofYogyakartaIndonesia1.png" /></td><td>Girimulyo, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_KalibawangKulonProgoSpecialRegionofYogyakartaIndonesia2.png" /></td><td>Kalibawang, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_KokapKulonProgoSpecialRegionofYogyakarta55653Indonesia3.png" /></td><td>Kokap, Kulon Progo, Special Region of Yogyakarta, 55653, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_LendahKulonProgoSpecialRegionofYogyakarta55663Indonesia4.png" /></td><td>Lendah, Kulon Progo, Special Region of Yogyakarta, 55663, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_NanggulanKulonProgoSpecialRegionofYogyakartaIndonesia5.png" /></td><td>Nanggulan, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_PanjatanKulonProgoSpecialRegionofYogyakartaIndonesia6.png" /></td><td>Panjatan, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_PengasihKulonProgoSpecialRegionofYogyakartaIndonesia7.png" /></td><td>Pengasih, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_SamigaluhKulonProgoSpecialRegionofYogyakarta55673Indonesia8.png" /></td><td>Samigaluh, Kulon Progo, Special Region of Yogyakarta, 55673, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_SentoloKulonProgoSpecialRegionofYogyakartaIndonesia9.png" /></td><td>Sentolo, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_TemonKulonProgoSpecialRegionofYogyakartaIndonesia10.png" /></td><td>Temon, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_WatesKulonProgoSpecialRegionofYogyakartaIndonesia11.png" /></td><td>Wates, Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/KulonProgoKec_5_12.png" /></td><td></td></tr></table>': layer_KulonProgoKec_5,'Yogyakarta Kec<br /><table><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_DanurejanYogyakartaSpecialRegionofYogyakarta55211Indonesia0.png" /></td><td>Danurejan, Yogyakarta, Special Region of Yogyakarta, 55211, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_GedongtengenYogyakartaSpecialRegionofYogyakartaIndonesia1.png" /></td><td>Gedongtengen, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_GondokusumanYogyakartaSpecialRegionofYogyakartaIndonesia2.png" /></td><td>Gondokusuman, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_GondomananYogyakartaSpecialRegionofYogyakartaIndonesia3.png" /></td><td>Gondomanan, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_JetisYogyakartaSpecialRegionofYogyakartaIndonesia4.png" /></td><td>Jetis, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_KotagedeYogyakartaSpecialRegionofYogyakartaIndonesia5.png" /></td><td>Kotagede, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_KratonYogyakartaSpecialRegionofYogyakartaIndonesia6.png" /></td><td>Kraton, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_MantrijeronYogyakartaSpecialRegionofYogyakartaIndonesia7.png" /></td><td>Mantrijeron, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_MergangsanYogyakartaSpecialRegionofYogyakartaIndonesia8.png" /></td><td>Mergangsan, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_NgampilanYogyakartaSpecialRegionofYogyakartaIndonesia9.png" /></td><td>Ngampilan, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_PakualamanYogyakartaSpecialRegionofYogyakartaIndonesia10.png" /></td><td>Pakualaman, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_TegalrejoYogyakartaSpecialRegionofYogyakartaIndonesia11.png" /></td><td>Tegalrejo, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_UmbulharjoYogyakartaSpecialRegionofYogyakartaIndonesia12.png" /></td><td>Umbulharjo, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_WirobrajanYogyakartaSpecialRegionofYogyakartaIndonesia13.png" /></td><td>Wirobrajan, Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/YogyakartaKec_4_14.png" /></td><td></td></tr></table>': layer_YogyakartaKec_4,'Bantul Kec<br /><table><tr><td style="text-align: center;"><img src="legend/BantulKec_3_Bambanglipurobantul0.png" /></td><td>Bambanglipuro, bantul</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_BanguntapanBantulRegencySpecialRegionofYogyakartaIndonesia1.png" /></td><td>Banguntapan, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_BantulBantulRegencySpecialRegionofYogyakartaIndonesia2.png" /></td><td>Bantul, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_DlingoBantulRegencySpecialRegionofYogyakartaIndonesia3.png" /></td><td>Dlingo, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_ImogiriBantulRegencySpecialRegionofYogyakartaIndonesia4.png" /></td><td>Imogiri, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_JetisBantulRegencySpecialRegionofYogyakarta55781Indonesia5.png" /></td><td>Jetis, Bantul Regency, Special Region of Yogyakarta, 55781, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_KasihanBantulRegencySpecialRegionofYogyakartaIndonesia6.png" /></td><td>Kasihan, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_KretekBantulRegencySpecialRegionofYogyakarta55772Indonesia7.png" /></td><td>Kretek, Bantul Regency, Special Region of Yogyakarta, 55772, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_PajanganBantulRegencySpecialRegionofYogyakarta55751Indonesia8.png" /></td><td>Pajangan, Bantul Regency, Special Region of Yogyakarta, 55751, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_PandakBantulRegencySpecialRegionofYogyakarta55761Indonesia9.png" /></td><td>Pandak, Bantul Regency, Special Region of Yogyakarta, 55761, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_PiyunganBantulRegencySpecialRegionofYogyakarta55792Indonesia10.png" /></td><td>Piyungan, Bantul Regency, Special Region of Yogyakarta, 55792, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_PleretBantulRegencySpecialRegionofYogyakartaIndonesia11.png" /></td><td>Pleret, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_PundongBantulRegencySpecialRegionofYogyakarta55771Indonesia12.png" /></td><td>Pundong, Bantul Regency, Special Region of Yogyakarta, 55771, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_SandenBantulRegencySpecialRegionofYogyakarta55763Indonesia13.png" /></td><td>Sanden, Bantul Regency, Special Region of Yogyakarta, 55763, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_SedayuBantulRegencySpecialRegionofYogyakartaIndonesia14.png" /></td><td>Sedayu, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_SewonBantulRegencySpecialRegionofYogyakartaIndonesia15.png" /></td><td>Sewon, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_SrandakanBantulRegencySpecialRegionofYogyakartaIndonesia16.png" /></td><td>Srandakan, Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/BantulKec_3_17.png" /></td><td></td></tr></table>': layer_BantulKec_3,'Gunung Kidul Kec<br /><table><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Gedangsari0.png" /></td><td>Gedangsari</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Girisubo1.png" /></td><td>Girisubo</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Karangmojo2.png" /></td><td>Karangmojo</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Ngawen3.png" /></td><td>Ngawen</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Nglipar4.png" /></td><td>Nglipar</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Paliyan5.png" /></td><td>Paliyan</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Panggang6.png" /></td><td>Panggang</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Patuk7.png" /></td><td>Patuk</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Playen8.png" /></td><td>Playen</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Ponjong9.png" /></td><td>Ponjong</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Purwosari10.png" /></td><td>Purwosari</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Rongkop11.png" /></td><td>Rongkop</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Saptosari12.png" /></td><td>Saptosari</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Semanu13.png" /></td><td>Semanu</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Semin14.png" /></td><td>Semin</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Tanjungsari15.png" /></td><td>Tanjungsari</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Tepus16.png" /></td><td>Tepus</td></tr><tr><td style="text-align: center;"><img src="legend/GunungKidulKec_2_Wonosari17.png" /></td><td>Wonosari</td></tr></table>': layer_GunungKidulKec_2,'Sleman Kec Sample<br /><table><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_BerbahSlemanRegencySpecialRegionofYogyakarta55573Indonesia0.png" /></td><td>Berbah, Sleman Regency, Special Region of Yogyakarta, 55573, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_CangkringanSlemanRegencySpecialRegionofYogyakarta55583Indonesia1.png" /></td><td>Cangkringan, Sleman Regency, Special Region of Yogyakarta, 55583, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_DepokSlemanRegencySpecialRegionofYogyakartaIndonesia2.png" /></td><td>Depok, Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_GampingSlemanRegencySpecialRegionofYogyakartaIndonesia3.png" /></td><td>Gamping, Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_GodeanSlemanRegencySpecialRegionofYogyakartaIndonesia4.png" /></td><td>Godean, Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_KalasanSlemanRegencySpecialRegionofYogyakarta55571Indonesia5.png" /></td><td>Kalasan, Sleman Regency, Special Region of Yogyakarta, 55571, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_MinggirSlemanRegencySpecialRegionofYogyakarta55562Indonesia6.png" /></td><td>Minggir, Sleman Regency, Special Region of Yogyakarta, 55562, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_MlatiSlemanRegencySpecialRegionofYogyakartaIndonesia7.png" /></td><td>Mlati, Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_MoyudanSlemanRegencySpecialRegionofYogyakarta55563Indonesia8.png" /></td><td>Moyudan, Sleman Regency, Special Region of Yogyakarta, 55563, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_PakemSlemanRegencySpecialRegionofYogyakarta55582Indonesia9.png" /></td><td>Pakem, Sleman Regency, Special Region of Yogyakarta, 55582, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_PrambananSlemanRegencySpecialRegionofYogyakarta55572Indonesia10.png" /></td><td>Prambanan, Sleman Regency, Special Region of Yogyakarta, 55572, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_SeyeganSlemanRegencySpecialRegionofYogyakartaIndonesia11.png" /></td><td>Seyegan, Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_SlemanSlemanRegencySpecialRegionofYogyakartaIndonesia12.png" /></td><td>Sleman, Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_TempelSlemanRegencySpecialRegionofYogyakarta55552Indonesia13.png" /></td><td>Tempel, Sleman Regency, Special Region of Yogyakarta, 55552, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_TuriSlemanRegencySpecialRegionofYogyakarta555551Indonesia14.png" /></td><td>Turi, Sleman Regency, Special Region of Yogyakarta, 555551, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/SlemanKecSample_1_15.png" /></td><td></td></tr></table>': layer_SlemanKecSample_1,'DIY Combine<br /><table><tr><td style="text-align: center;"><img src="legend/DIYCombine_0_BantulRegencySpecialRegionofYogyakartaIndonesia0.png" /></td><td>Bantul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/DIYCombine_0_GunungKidulRegencySpecialRegionofYogyakartaIndonesia1.png" /></td><td>Gunung Kidul Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/DIYCombine_0_KulonProgoSpecialRegionofYogyakartaIndonesia2.png" /></td><td>Kulon Progo, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/DIYCombine_0_SlemanRegencySpecialRegionofYogyakartaIndonesia3.png" /></td><td>Sleman Regency, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/DIYCombine_0_YogyakartaSpecialRegionofYogyakartaIndonesia4.png" /></td><td>Yogyakarta, Special Region of Yogyakarta, Indonesia</td></tr><tr><td style="text-align: center;"><img src="legend/DIYCombine_0_5.png" /></td><td></td></tr></table>': layer_DIYCombine_0,}).addTo(map);
                        setBounds();
                        </script>
                  </div>
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
