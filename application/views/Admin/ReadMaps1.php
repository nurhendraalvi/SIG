<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="<?php echo base_url().'/GIS4/css/leaflet.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'/GIS4/css/qgis2web.css'?>"><link rel="stylesheet" href="<?php echo base_url().'/GIS4/css/fontawesome-all.min.css'?>">
        <style>
        #map {
            width: 1004px;
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

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/ReadDataIndex');?>">
          <span>Read Data</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/index.php/Admin/InsertIndex2');?>">
          <span>Insert Data Jalur</span></a>
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
                  <h6 class="m-0 font-weight-bold text-primary" align="center">Data Komoditas Daerah Istimewa Yogyakarta</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
            <div id="map">
        </div>
        <script src="<?php echo base_url().'/GIS4/js/qgis2web_expressions.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/leaflet.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/multi-style-layer.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/leaflet.rotatedMarker.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/leaflet.pattern.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/leaflet-hash.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/Autolinker.min.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/rbush.min.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/labelgun.min.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/js/labels.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYCombine_1.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYBeras_2.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYUbiKayu_3.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYJagung_4.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYCabaiMerah_5.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYBawangMerah_6.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYCabaiRawit_7.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYGula_8.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYDagingSapi_9.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYDagingAyam_10.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYTelurAyam_11.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DIYPoint_12.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/JatengPoint_13.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/BerasFIX4_14.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/JagungFIX3_15.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/UbiKayuFIX_16.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DagingAyamFix3_17.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/BawangMerahFIX3_18.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/CabaiRawitFIX2_19.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/CabaiMerahFIX2_20.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/DagingSapi_21.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/GulaFIX3_22.js'?>"></script>
        <script src="<?php echo base_url().'/GIS4/data/TelurAyamFix3_23.js'?>"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-8.73546767339857,109.07519669032857],[-6.61463405383,112.05031399232857]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('http://a.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
        function pop_DIYCombine_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">name</th>\
                        <td>' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYCombine_1_0(feature) {
            switch(String(feature.properties['name'])) {
                case 'Bantul Regency, Special Region of Yogyakarta, Indonesia':
                    return {
                pane: 'pane_DIYCombine_1',
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
                pane: 'pane_DIYCombine_1',
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
                pane: 'pane_DIYCombine_1',
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
                pane: 'pane_DIYCombine_1',
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
                pane: 'pane_DIYCombine_1',
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
                pane: 'pane_DIYCombine_1',
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
        map.createPane('pane_DIYCombine_1');
        map.getPane('pane_DIYCombine_1').style.zIndex = 401;
        map.getPane('pane_DIYCombine_1').style['mix-blend-mode'] = 'normal';
        var layer_DIYCombine_1 = new L.geoJson(json_DIYCombine_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYCombine_1',
            layerName: 'layer_DIYCombine_1',
            pane: 'pane_DIYCombine_1',
            onEachFeature: pop_DIYCombine_1,
            style: style_DIYCombine_1_0,
        });
        bounds_group.addLayer(layer_DIYCombine_1);
        map.addLayer(layer_DIYCombine_1);
        function pop_DIYBeras_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYBeras_2_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '0.0':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,110,67,1.0)',
                interactive: true,
            }
                    break;
                case '13270.0':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,186,111,1.0)',
                interactive: true,
            }
                    break;
                case '1716.9':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,232,165,1.0)',
                interactive: true,
            }
                    break;
                case '287.0':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,245,168,1.0)',
                interactive: true,
            }
                    break;
                case '3381.0':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(179,223,118,1.0)',
                interactive: true,
            }
                    break;
                case '468.6':
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(106,189,88,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYBeras_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYBeras_2');
        map.getPane('pane_DIYBeras_2').style.zIndex = 402;
        map.getPane('pane_DIYBeras_2').style['mix-blend-mode'] = 'normal';
        var layer_DIYBeras_2 = new L.geoJson(json_DIYBeras_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYBeras_2',
            layerName: 'layer_DIYBeras_2',
            pane: 'pane_DIYBeras_2',
            onEachFeature: pop_DIYBeras_2,
            style: style_DIYBeras_2_0,
        });
        bounds_group.addLayer(layer_DIYBeras_2);
        map.addLayer(layer_DIYBeras_2);
        function pop_DIYUbiKayu_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYUbiKayu_3_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYUbiKayu_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '0.0':
                    return {
                pane: 'pane_DIYUbiKayu_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,174,97,1.0)',
                interactive: true,
            }
                    break;
                case '10.1':
                    return {
                pane: 'pane_DIYUbiKayu_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,192,1.0)',
                interactive: true,
            }
                    break;
                case '65.6':
                    return {
                pane: 'pane_DIYUbiKayu_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,217,106,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYUbiKayu_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYUbiKayu_3');
        map.getPane('pane_DIYUbiKayu_3').style.zIndex = 403;
        map.getPane('pane_DIYUbiKayu_3').style['mix-blend-mode'] = 'normal';
        var layer_DIYUbiKayu_3 = new L.geoJson(json_DIYUbiKayu_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYUbiKayu_3',
            layerName: 'layer_DIYUbiKayu_3',
            pane: 'pane_DIYUbiKayu_3',
            onEachFeature: pop_DIYUbiKayu_3,
            style: style_DIYUbiKayu_3_0,
        });
        bounds_group.addLayer(layer_DIYUbiKayu_3);
        function pop_DIYJagung_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYJagung_4_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '0.0':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(234,99,62,1.0)',
                interactive: true,
            }
                    break;
                case '13270.0':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,174,97,1.0)',
                interactive: true,
            }
                    break;
                case '1716.9':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,215,145,1.0)',
                interactive: true,
            }
                    break;
                case '28.0':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,192,1.0)',
                interactive: true,
            }
                    break;
                case '287.0':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(211,236,149,1.0)',
                interactive: true,
            }
                    break;
                case '3381.0':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,217,106,1.0)',
                interactive: true,
            }
                    break;
                case '468.6':
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(96,184,85,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYJagung_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYJagung_4');
        map.getPane('pane_DIYJagung_4').style.zIndex = 404;
        map.getPane('pane_DIYJagung_4').style['mix-blend-mode'] = 'normal';
        var layer_DIYJagung_4 = new L.geoJson(json_DIYJagung_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYJagung_4',
            layerName: 'layer_DIYJagung_4',
            pane: 'pane_DIYJagung_4',
            onEachFeature: pop_DIYJagung_4,
            style: style_DIYJagung_4_0,
        });
        bounds_group.addLayer(layer_DIYJagung_4);
        function pop_DIYCabaiMerah_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYCabaiMerah_5_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '0.0':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,47,38,1.0)',
                interactive: true,
            }
                    break;
                case '1':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,69,48,1.0)',
                interactive: true,
            }
                    break;
                case '104.0':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,91,58,1.0)',
                interactive: true,
            }
                    break;
                case '112':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,113,69,1.0)',
                interactive: true,
            }
                    break;
                case '1260':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(244,135,79,1.0)',
                interactive: true,
            }
                    break;
                case '2':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(249,158,89,1.0)',
                interactive: true,
            }
                    break;
                case '20':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,177,100,1.0)',
                interactive: true,
            }
                    break;
                case '238':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,189,115,1.0)',
                interactive: true,
            }
                    break;
                case '264':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,201,129,1.0)',
                interactive: true,
            }
                    break;
                case '291.156':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,213,143,1.0)',
                interactive: true,
            }
                    break;
                case '2984':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,225,157,1.0)',
                interactive: true,
            }
                    break;
                case '30':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,237,171,1.0)',
                interactive: true,
            }
                    break;
                case '3086.0':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,249,185,1.0)',
                interactive: true,
            }
                    break;
                case '31250.0':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(249,253,186,1.0)',
                interactive: true,
            }
                    break;
                case '32':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(236,247,173,1.0)',
                interactive: true,
            }
                    break;
                case '4':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,241,160,1.0)',
                interactive: true,
            }
                    break;
                case '4090':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(209,236,147,1.0)',
                interactive: true,
            }
                    break;
                case '4943':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(196,230,135,1.0)',
                interactive: true,
            }
                    break;
                case '517.0':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(183,224,122,1.0)',
                interactive: true,
            }
                    break;
                case '52':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(169,219,109,1.0)',
                interactive: true,
            }
                    break;
                case '550':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,210,101,1.0)',
                interactive: true,
            }
                    break;
                case '6':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(130,200,95,1.0)',
                interactive: true,
            }
                    break;
                case '6230':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(109,190,89,1.0)',
                interactive: true,
            }
                    break;
                case '66':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(88,180,83,1.0)',
                interactive: true,
            }
                    break;
                case '69':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(67,170,77,1.0)',
                interactive: true,
            }
                    break;
                case '9915':
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(46,160,71,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYCabaiMerah_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYCabaiMerah_5');
        map.getPane('pane_DIYCabaiMerah_5').style.zIndex = 405;
        map.getPane('pane_DIYCabaiMerah_5').style['mix-blend-mode'] = 'normal';
        var layer_DIYCabaiMerah_5 = new L.geoJson(json_DIYCabaiMerah_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYCabaiMerah_5',
            layerName: 'layer_DIYCabaiMerah_5',
            pane: 'pane_DIYCabaiMerah_5',
            onEachFeature: pop_DIYCabaiMerah_5,
            style: style_DIYCabaiMerah_5_0,
        });
        bounds_group.addLayer(layer_DIYCabaiMerah_5);
        function pop_DIYBawangMerah_6(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYBawangMerah_6_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '0.0':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,52,40,1.0)',
                interactive: true,
            }
                    break;
                case '1':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(229,79,53,1.0)',
                interactive: true,
            }
                    break;
                case '10.0':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(236,106,65,1.0)',
                interactive: true,
            }
                    break;
                case '12.0':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,133,78,1.0)',
                interactive: true,
            }
                    break;
                case '162.9':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(250,161,91,1.0)',
                interactive: true,
            }
                    break;
                case '1792':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,182,106,1.0)',
                interactive: true,
            }
                    break;
                case '1849':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,196,123,1.0)',
                interactive: true,
            }
                    break;
                case '21':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,211,140,1.0)',
                interactive: true,
            }
                    break;
                case '21.5':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,226,158,1.0)',
                interactive: true,
            }
                    break;
                case '231':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,241,175,1.0)',
                interactive: true,
            }
                    break;
                case '2502':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,192,1.0)',
                interactive: true,
            }
                    break;
                case '2655':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(239,249,177,1.0)',
                interactive: true,
            }
                    break;
                case '3.6':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(223,242,161,1.0)',
                interactive: true,
            }
                    break;
                case '329':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,235,145,1.0)',
                interactive: true,
            }
                    break;
                case '4':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(191,228,129,1.0)',
                interactive: true,
            }
                    break;
                case '48':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(174,221,114,1.0)',
                interactive: true,
            }
                    break;
                case '510':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(153,211,102,1.0)',
                interactive: true,
            }
                    break;
                case '5181':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(128,199,95,1.0)',
                interactive: true,
            }
                    break;
                case '596':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(102,187,87,1.0)',
                interactive: true,
            }
                    break;
                case '6.0':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(77,175,80,1.0)',
                interactive: true,
            }
                    break;
                case '664':
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(51,162,72,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYBawangMerah_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYBawangMerah_6');
        map.getPane('pane_DIYBawangMerah_6').style.zIndex = 406;
        map.getPane('pane_DIYBawangMerah_6').style['mix-blend-mode'] = 'normal';
        var layer_DIYBawangMerah_6 = new L.geoJson(json_DIYBawangMerah_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYBawangMerah_6',
            layerName: 'layer_DIYBawangMerah_6',
            pane: 'pane_DIYBawangMerah_6',
            onEachFeature: pop_DIYBawangMerah_6,
            style: style_DIYBawangMerah_6_0,
        });
        bounds_group.addLayer(layer_DIYBawangMerah_6);
        function pop_DIYCabaiRawit_7(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYCabaiRawit_7_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '0.0':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,51,40,1.0)',
                interactive: true,
            }
                    break;
                case '1':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(229,77,52,1.0)',
                interactive: true,
            }
                    break;
                case '10':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,103,64,1.0)',
                interactive: true,
            }
                    break;
                case '115':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,129,76,1.0)',
                interactive: true,
            }
                    break;
                case '117':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(249,155,88,1.0)',
                interactive: true,
            }
                    break;
                case '127':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,178,101,1.0)',
                interactive: true,
            }
                    break;
                case '148':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,192,118,1.0)',
                interactive: true,
            }
                    break;
                case '154':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,206,134,1.0)',
                interactive: true,
            }
                    break;
                case '181':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,220,151,1.0)',
                interactive: true,
            }
                    break;
                case '19':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,234,167,1.0)',
                interactive: true,
            }
                    break;
                case '192':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,248,184,1.0)',
                interactive: true,
            }
                    break;
                case '2':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(248,252,185,1.0)',
                interactive: true,
            }
                    break;
                case '23':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,246,170,1.0)',
                interactive: true,
            }
                    break;
                case '235':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(217,239,155,1.0)',
                interactive: true,
            }
                    break;
                case '2415':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(201,232,140,1.0)',
                interactive: true,
            }
                    break;
                case '3':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(186,226,125,1.0)',
                interactive: true,
            }
                    break;
                case '45':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(170,219,110,1.0)',
                interactive: true,
            }
                    break;
                case '5':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(148,209,101,1.0)',
                interactive: true,
            }
                    break;
                case '57':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(123,197,93,1.0)',
                interactive: true,
            }
                    break;
                case '638':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(99,185,86,1.0)',
                interactive: true,
            }
                    break;
                case '8':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(74,173,79,1.0)',
                interactive: true,
            }
                    break;
                case '986':
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(50,162,72,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYCabaiRawit_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYCabaiRawit_7');
        map.getPane('pane_DIYCabaiRawit_7').style.zIndex = 407;
        map.getPane('pane_DIYCabaiRawit_7').style['mix-blend-mode'] = 'normal';
        var layer_DIYCabaiRawit_7 = new L.geoJson(json_DIYCabaiRawit_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYCabaiRawit_7',
            layerName: 'layer_DIYCabaiRawit_7',
            pane: 'pane_DIYCabaiRawit_7',
            onEachFeature: pop_DIYCabaiRawit_7,
            style: style_DIYCabaiRawit_7_0,
        });
        bounds_group.addLayer(layer_DIYCabaiRawit_7);
        function pop_DIYGula_8(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Lahan Tanam (Ha)</th>\
                        <td>' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas Aktivitas Tanam (Ha)</th>\
                        <td>' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah Produktivitas (Ton)</th>\
                        <td>' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Produk (Ton)</th>\
                        <td>' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Rata-Rata Produktivitas Lahan (Ha)</th>\
                        <td>' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYGula_8_0(feature) {
            switch(String(feature.properties['JPV'])) {
                case '0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '10149.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,46,38,1.0)',
                interactive: true,
            }
                    break;
                case '11':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,67,47,1.0)',
                interactive: true,
            }
                    break;
                case '15347.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,89,57,1.0)',
                interactive: true,
            }
                    break;
                case '162':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,110,67,1.0)',
                interactive: true,
            }
                    break;
                case '175':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,131,77,1.0)',
                interactive: true,
            }
                    break;
                case '1889':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(248,153,87,1.0)',
                interactive: true,
            }
                    break;
                case '203':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,174,97,1.0)',
                interactive: true,
            }
                    break;
                case '216':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,186,111,1.0)',
                interactive: true,
            }
                    break;
                case '2203.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,197,124,1.0)',
                interactive: true,
            }
                    break;
                case '22509.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,209,138,1.0)',
                interactive: true,
            }
                    break;
                case '24473.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,221,151,1.0)',
                interactive: true,
            }
                    break;
                case '254':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,232,165,1.0)',
                interactive: true,
            }
                    break;
                case '2584.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,179,1.0)',
                interactive: true,
            }
                    break;
                case '282':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,192,1.0)',
                interactive: true,
            }
                    break;
                case '33296.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,250,180,1.0)',
                interactive: true,
            }
                    break;
                case '34':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,245,168,1.0)',
                interactive: true,
            }
                    break;
                case '38':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(217,239,155,1.0)',
                interactive: true,
            }
                    break;
                case '43':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(204,234,143,1.0)',
                interactive: true,
            }
                    break;
                case '466.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(192,228,131,1.0)',
                interactive: true,
            }
                    break;
                case '5042.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(179,223,118,1.0)',
                interactive: true,
            }
                    break;
                case '5549.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,217,106,1.0)',
                interactive: true,
            }
                    break;
                case '57085.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,208,100,1.0)',
                interactive: true,
            }
                    break;
                case '5720.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(126,198,94,1.0)',
                interactive: true,
            }
                    break;
                case '58067.53':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(106,189,88,1.0)',
                interactive: true,
            }
                    break;
                case '618.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(86,179,82,1.0)',
                interactive: true,
            }
                    break;
                case '65':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(66,169,77,1.0)',
                interactive: true,
            }
                    break;
                case '73597.0':
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(46,160,71,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYGula_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYGula_8');
        map.getPane('pane_DIYGula_8').style.zIndex = 408;
        map.getPane('pane_DIYGula_8').style['mix-blend-mode'] = 'normal';
        var layer_DIYGula_8 = new L.geoJson(json_DIYGula_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYGula_8',
            layerName: 'layer_DIYGula_8',
            pane: 'pane_DIYGula_8',
            onEachFeature: pop_DIYGula_8,
            style: style_DIYGula_8_0,
        });
        bounds_group.addLayer(layer_DIYGula_8);
        function pop_DIYDagingSapi_9(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Banyaknya (Ekor)</th>\
                        <td>' + (feature.properties['Banyaknya'] !== null ? autolinker.link(feature.properties['Banyaknya'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['osm_id'] !== null ? autolinker.link(feature.properties['osm_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYDagingSapi_9_0(feature) {
            switch(String(feature.properties['Banyaknya'])) {
                case '0':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '3':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,39,34,1.0)',
                interactive: true,
            }
                    break;
                case '5':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,52,40,1.0)',
                interactive: true,
            }
                    break;
                case '38':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,66,47,1.0)',
                interactive: true,
            }
                    break;
                case '42':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,80,53,1.0)',
                interactive: true,
            }
                    break;
                case '43':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(233,94,60,1.0)',
                interactive: true,
            }
                    break;
                case '90':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,108,66,1.0)',
                interactive: true,
            }
                    break;
                case '923':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,122,73,1.0)',
                interactive: true,
            }
                    break;
                case '1689':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(244,136,79,1.0)',
                interactive: true,
            }
                    break;
                case '1904':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(247,150,86,1.0)',
                interactive: true,
            }
                    break;
                case '1968':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,164,92,1.0)',
                interactive: true,
            }
                    break;
                case '2005':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,176,99,1.0)',
                interactive: true,
            }
                    break;
                case '2036':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,184,108,1.0)',
                interactive: true,
            }
                    break;
                case '2957':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,191,117,1.0)',
                interactive: true,
            }
                    break;
                case '3050':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,199,126,1.0)',
                interactive: true,
            }
                    break;
                case '3312':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,206,135,1.0)',
                interactive: true,
            }
                    break;
                case '3749':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,214,143,1.0)',
                interactive: true,
            }
                    break;
                case '3866':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,221,152,1.0)',
                interactive: true,
            }
                    break;
                case '3973':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,229,161,1.0)',
                interactive: true,
            }
                    break;
                case '4141':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,237,170,1.0)',
                interactive: true,
            }
                    break;
                case '4297':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,179,1.0)',
                interactive: true,
            }
                    break;
                case '4449':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,252,188,1.0)',
                interactive: true,
            }
                    break;
                case '4677':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,254,188,1.0)',
                interactive: true,
            }
                    break;
                case '5390':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,250,180,1.0)',
                interactive: true,
            }
                    break;
                case '5453':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,247,172,1.0)',
                interactive: true,
            }
                    break;
                case '5973':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,243,164,1.0)',
                interactive: true,
            }
                    break;
                case '6019':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,240,156,1.0)',
                interactive: true,
            }
                    break;
                case '6069':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(210,236,148,1.0)',
                interactive: true,
            }
                    break;
                case '6449':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(201,232,140,1.0)',
                interactive: true,
            }
                    break;
                case '7626':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(193,229,132,1.0)',
                interactive: true,
            }
                    break;
                case '7808':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(185,225,124,1.0)',
                interactive: true,
            }
                    break;
                case '7940':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(177,222,116,1.0)',
                interactive: true,
            }
                    break;
                case '7950':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(168,218,108,1.0)',
                interactive: true,
            }
                    break;
                case '7965':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(156,213,103,1.0)',
                interactive: true,
            }
                    break;
                case '8196':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(143,206,99,1.0)',
                interactive: true,
            }
                    break;
                case '8972':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(130,200,95,1.0)',
                interactive: true,
            }
                    break;
                case '9029':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(117,194,92,1.0)',
                interactive: true,
            }
                    break;
                case '9204':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(104,188,88,1.0)',
                interactive: true,
            }
                    break;
                case '9291':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(91,181,84,1.0)',
                interactive: true,
            }
                    break;
                case '10671':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(78,175,80,1.0)',
                interactive: true,
            }
                    break;
                case '11976':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(65,169,76,1.0)',
                interactive: true,
            }
                    break;
                case '12592':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(52,163,72,1.0)',
                interactive: true,
            }
                    break;
                case '14989':
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(39,156,69,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYDagingSapi_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYDagingSapi_9');
        map.getPane('pane_DIYDagingSapi_9').style.zIndex = 409;
        map.getPane('pane_DIYDagingSapi_9').style['mix-blend-mode'] = 'normal';
        var layer_DIYDagingSapi_9 = new L.geoJson(json_DIYDagingSapi_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYDagingSapi_9',
            layerName: 'layer_DIYDagingSapi_9',
            pane: 'pane_DIYDagingSapi_9',
            onEachFeature: pop_DIYDagingSapi_9,
            style: style_DIYDagingSapi_9_0,
        });
        bounds_group.addLayer(layer_DIYDagingSapi_9);
        function pop_DIYDagingAyam_10(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Banyaknya (Ekor)</th>\
                        <td>' + (feature.properties['Banyaknya'] !== null ? autolinker.link(feature.properties['Banyaknya'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['osm_id'] !== null ? autolinker.link(feature.properties['osm_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYDagingAyam_10_0(feature) {
            switch(String(feature.properties['Banyaknya'])) {
                case '0':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '4000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,39,34,1.0)',
                interactive: true,
            }
                    break;
                case '6845':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(223,54,41,1.0)',
                interactive: true,
            }
                    break;
                case '10034':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,68,48,1.0)',
                interactive: true,
            }
                    break;
                case '10526':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,83,55,1.0)',
                interactive: true,
            }
                    break;
                case '11248':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(234,98,61,1.0)',
                interactive: true,
            }
                    break;
                case '12020':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,112,68,1.0)',
                interactive: true,
            }
                    break;
                case '12543':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,127,75,1.0)',
                interactive: true,
            }
                    break;
                case '15565':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(245,141,82,1.0)',
                interactive: true,
            }
                    break;
                case '19292':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(249,156,88,1.0)',
                interactive: true,
            }
                    break;
                case '19681':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,171,95,1.0)',
                interactive: true,
            }
                    break;
                case '20540':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,180,104,1.0)',
                interactive: true,
            }
                    break;
                case '20864':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,188,113,1.0)',
                interactive: true,
            }
                    break;
                case '24500':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,196,122,1.0)',
                interactive: true,
            }
                    break;
                case '25186':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,204,132,1.0)',
                interactive: true,
            }
                    break;
                case '26954':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,212,141,1.0)',
                interactive: true,
            }
                    break;
                case '29217':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,220,150,1.0)',
                interactive: true,
            }
                    break;
                case '35000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,228,160,1.0)',
                interactive: true,
            }
                    break;
                case '41889':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,236,169,1.0)',
                interactive: true,
            }
                    break;
                case '48016':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,178,1.0)',
                interactive: true,
            }
                    break;
                case '49096':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,252,188,1.0)',
                interactive: true,
            }
                    break;
                case '50000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,254,188,1.0)',
                interactive: true,
            }
                    break;
                case '53396':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,250,180,1.0)',
                interactive: true,
            }
                    break;
                case '56263':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(234,246,171,1.0)',
                interactive: true,
            }
                    break;
                case '60000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(225,242,163,1.0)',
                interactive: true,
            }
                    break;
                case '75000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(216,239,154,1.0)',
                interactive: true,
            }
                    break;
                case '88947':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(208,235,146,1.0)',
                interactive: true,
            }
                    break;
                case '92246':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(199,231,138,1.0)',
                interactive: true,
            }
                    break;
                case '95000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(190,228,129,1.0)',
                interactive: true,
            }
                    break;
                case '100000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(181,224,121,1.0)',
                interactive: true,
            }
                    break;
                case '134700':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(173,220,112,1.0)',
                interactive: true,
            }
                    break;
                case '137000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(163,216,105,1.0)',
                interactive: true,
            }
                    break;
                case '146000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(149,209,101,1.0)',
                interactive: true,
            }
                    break;
                case '150000':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(135,203,97,1.0)',
                interactive: true,
            }
                    break;
                case '160906':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(122,196,93,1.0)',
                interactive: true,
            }
                    break;
                case '169695':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(108,189,89,1.0)',
                interactive: true,
            }
                    break;
                case '170582':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(94,183,85,1.0)',
                interactive: true,
            }
                    break;
                case '172213':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(80,176,81,1.0)',
                interactive: true,
            }
                    break;
                case '203615':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(67,170,77,1.0)',
                interactive: true,
            }
                    break;
                case '209821':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(53,163,73,1.0)',
                interactive: true,
            }
                    break;
                case '1497964':
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(39,157,69,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYDagingAyam_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYDagingAyam_10');
        map.getPane('pane_DIYDagingAyam_10').style.zIndex = 410;
        map.getPane('pane_DIYDagingAyam_10').style['mix-blend-mode'] = 'normal';
        var layer_DIYDagingAyam_10 = new L.geoJson(json_DIYDagingAyam_10, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYDagingAyam_10',
            layerName: 'layer_DIYDagingAyam_10',
            pane: 'pane_DIYDagingAyam_10',
            onEachFeature: pop_DIYDagingAyam_10,
            style: style_DIYDagingAyam_10_0,
        });
        bounds_group.addLayer(layer_DIYDagingAyam_10);
        function pop_DIYTelurAyam_11(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahun</th>\
                        <td>' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Banyaknya (Ekor)</th>\
                        <td>' + (feature.properties['Banyaknya'] !== null ? autolinker.link(feature.properties['Banyaknya'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['osm_id'] !== null ? autolinker.link(feature.properties['osm_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYTelurAyam_11_0(feature) {
            switch(String(feature.properties['Banyaknya'])) {
                case '0':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case '930':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,38,34,1.0)',
                interactive: true,
            }
                    break;
                case '1400':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,51,40,1.0)',
                interactive: true,
            }
                    break;
                case '1997':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,64,46,1.0)',
                interactive: true,
            }
                    break;
                case '2154':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(229,78,52,1.0)',
                interactive: true,
            }
                    break;
                case '2358':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,91,58,1.0)',
                interactive: true,
            }
                    break;
                case '3000':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(236,104,65,1.0)',
                interactive: true,
            }
                    break;
                case '3080':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(239,118,71,1.0)',
                interactive: true,
            }
                    break;
                case '3300':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,131,77,1.0)',
                interactive: true,
            }
                    break;
                case '3421':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,144,83,1.0)',
                interactive: true,
            }
                    break;
                case '4064':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(249,158,89,1.0)',
                interactive: true,
            }
                    break;
                case '4528':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,171,95,1.0)',
                interactive: true,
            }
                    break;
                case '4547':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,180,103,1.0)',
                interactive: true,
            }
                    break;
                case '5112':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,187,112,1.0)',
                interactive: true,
            }
                    break;
                case '5464':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,194,120,1.0)',
                interactive: true,
            }
                    break;
                case '5569':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,201,129,1.0)',
                interactive: true,
            }
                    break;
                case '6410':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,209,137,1.0)',
                interactive: true,
            }
                    break;
                case '6478':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,216,146,1.0)',
                interactive: true,
            }
                    break;
                case '7200':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,223,154,1.0)',
                interactive: true,
            }
                    break;
                case '7885':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,230,163,1.0)',
                interactive: true,
            }
                    break;
                case '10791':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,237,171,1.0)',
                interactive: true,
            }
                    break;
                case '12461':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,245,180,1.0)',
                interactive: true,
            }
                    break;
                case '15010':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,252,188,1.0)',
                interactive: true,
            }
                    break;
                case '15088':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(252,254,188,1.0)',
                interactive: true,
            }
                    break;
                case '16600':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(244,250,181,1.0)',
                interactive: true,
            }
                    break;
                case '24273':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(236,247,173,1.0)',
                interactive: true,
            }
                    break;
                case '24901':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(228,244,165,1.0)',
                interactive: true,
            }
                    break;
                case '25200':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(220,240,158,1.0)',
                interactive: true,
            }
                    break;
                case '29350':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(212,237,150,1.0)',
                interactive: true,
            }
                    break;
                case '29390':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(204,233,142,1.0)',
                interactive: true,
            }
                    break;
                case '32365':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(196,230,135,1.0)',
                interactive: true,
            }
                    break;
                case '45400':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(188,227,127,1.0)',
                interactive: true,
            }
                    break;
                case '47512':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(180,223,119,1.0)',
                interactive: true,
            }
                    break;
                case '51528':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(172,220,112,1.0)',
                interactive: true,
            }
                    break;
                case '52982':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(163,216,105,1.0)',
                interactive: true,
            }
                    break;
                case '61705':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,210,101,1.0)',
                interactive: true,
            }
                    break;
                case '63906':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(138,204,98,1.0)',
                interactive: true,
            }
                    break;
                case '88109':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(126,198,94,1.0)',
                interactive: true,
            }
                    break;
                case '113550':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(113,192,90,1.0)',
                interactive: true,
            }
                    break;
                case '124639':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(101,186,87,1.0)',
                interactive: true,
            }
                    break;
                case '127200':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(88,180,83,1.0)',
                interactive: true,
            }
                    break;
                case '148400':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(76,174,79,1.0)',
                interactive: true,
            }
                    break;
                case '152320':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(63,168,76,1.0)',
                interactive: true,
            }
                    break;
                case '223662':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(51,162,72,1.0)',
                interactive: true,
            }
                    break;
                case '445670':
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(38,156,68,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_DIYTelurAyam_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_DIYTelurAyam_11');
        map.getPane('pane_DIYTelurAyam_11').style.zIndex = 411;
        map.getPane('pane_DIYTelurAyam_11').style['mix-blend-mode'] = 'normal';
        var layer_DIYTelurAyam_11 = new L.geoJson(json_DIYTelurAyam_11, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYTelurAyam_11',
            layerName: 'layer_DIYTelurAyam_11',
            pane: 'pane_DIYTelurAyam_11',
            onEachFeature: pop_DIYTelurAyam_11,
            style: style_DIYTelurAyam_11_0,
        });
        bounds_group.addLayer(layer_DIYTelurAyam_11);
        function pop_DIYPoint_12(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Wilayah'] !== null ? autolinker.link(feature.properties['Wilayah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DIYPoint_12_0() {
            return {
                pane: 'pane_DIYPoint_12',
                radius: 2.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_DIYPoint_12');
        map.getPane('pane_DIYPoint_12').style.zIndex = 412;
        map.getPane('pane_DIYPoint_12').style['mix-blend-mode'] = 'normal';
        var layer_DIYPoint_12 = new L.geoJson(json_DIYPoint_12, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYPoint_12',
            layerName: 'layer_DIYPoint_12',
            pane: 'pane_DIYPoint_12',
            onEachFeature: pop_DIYPoint_12,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DIYPoint_12_0(feature));
            },
        });
        bounds_group.addLayer(layer_DIYPoint_12);
        map.addLayer(layer_DIYPoint_12);
        function pop_JatengPoint_13(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Wilayah'] !== null ? autolinker.link(feature.properties['Wilayah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JatengPoint_13_0() {
            return {
                pane: 'pane_JatengPoint_13',
                radius: 2.0,
                opacity: 1,
                color: 'rgba(128,17,25,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,30,42,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_JatengPoint_13');
        map.getPane('pane_JatengPoint_13').style.zIndex = 413;
        map.getPane('pane_JatengPoint_13').style['mix-blend-mode'] = 'normal';
        var layer_JatengPoint_13 = new L.geoJson(json_JatengPoint_13, {
            attribution: '',
            interactive: true,
            dataVar: 'json_JatengPoint_13',
            layerName: 'layer_JatengPoint_13',
            pane: 'pane_JatengPoint_13',
            onEachFeature: pop_JatengPoint_13,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_JatengPoint_13_0(feature));
            },
        });
        bounds_group.addLayer(layer_JatengPoint_13);
        map.addLayer(layer_JatengPoint_13);
        var baseMaps = {};
        L.control.layers(baseMaps,{'Jateng Point': layer_JatengPoint_13,'DIY Point': layer_DIYPoint_12,'DIY Beras<br />': layer_DIYBeras_2,'DIY Telur Ayam <br />': layer_DIYTelurAyam_11,'DIY Daging Ayam<br/>': layer_DIYDagingAyam_10,'DIY Daging Sapi<br/>': layer_DIYDagingSapi_9,'DIY Gula Pasir<br/>': layer_DIYGula_8,'DIY Cabai Rawit<br />': layer_DIYCabaiRawit_7,'DIY Bawang Merah<br />': layer_DIYBawangMerah_6,'DIY Cabai Merah<br />': layer_DIYCabaiMerah_5,'DIY Jagung<br />': layer_DIYJagung_4,'DIY Ubi Kayu<br />': layer_DIYUbiKayu_3,'DIY layer<br />': layer_DIYCombine_1,"OpenStreetMap": layer_OpenStreetMap_0,}).addTo(map);
        setBounds();
        </script>           
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
