<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="<?php echo base_url().'GIS/css/leaflet.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'GIS/css/qgis2web.css'?>"><link rel="stylesheet" href="css/fontawesome-all.min.css">
         <link rel="stylesheet" href="<?php echo base_url().'css/leaflet-control-geocoder.Geocoder.css'?>">
        <style>
        #map {
            width: 704px;
            height: 501px;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
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
        <script src="<?php echo base_url().'GIS/data/DIYCombine_1.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/SlemanKecSample_2.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/GunungKidulKec_3.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/BantulKec_4.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/YogyakartaKec_5.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/KulonProgoKec_6.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/Jateng2_7.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/DIYPoint_8.js'?>"></script>
        <script src="<?php echo base_url().'GIS/data/JatengPoint_9.js'?>"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-9.28543479689319,108.61290647363526],[-7.144882442325839,111.62426469589235]]);
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
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
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
        function pop_SlemanKecSample_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPV'] !== null ? autolinker.link(feature.properties['RRPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_SlemanKecSample_2_0(feature) {
            switch(String(feature.properties['LAT'])) {
                case '0':
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(24,215,24,1.0)',
                interactive: true,
            }
                    break;
                case '40':
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(157,241,73,1.0)',
                interactive: true,
            }
                    break;
                case '206':
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(233,254,65,1.0)',
                interactive: true,
            }
                    break;
                case '242':
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,1,1.0)',
                interactive: true,
            }
                    break;
                case '466':
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(249,91,0,1.0)',
                interactive: true,
            }
                    break;
                case '679':
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,8,5,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_SlemanKecSample_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,0,16,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_SlemanKecSample_2');
        map.getPane('pane_SlemanKecSample_2').style.zIndex = 402;
        map.getPane('pane_SlemanKecSample_2').style['mix-blend-mode'] = 'normal';
        var layer_SlemanKecSample_2 = new L.geoJson(json_SlemanKecSample_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_SlemanKecSample_2',
            layerName: 'layer_SlemanKecSample_2',
            pane: 'pane_SlemanKecSample_2',
            onEachFeature: pop_SlemanKecSample_2,
            style: style_SlemanKecSample_2_0,
        });
        bounds_group.addLayer(layer_SlemanKecSample_2);
        map.addLayer(layer_SlemanKecSample_2);
        function pop_GunungKidulKec_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['osm_id'] !== null ? autolinker.link(feature.properties['osm_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_GunungKidulKec_3_0(feature) {
            switch(String(feature.properties['LAT'])) {
                case '513.7':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,172,50,1.0)',
                interactive: true,
            }
                    break;
                case '1058.6':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(69,185,45,1.0)',
                interactive: true,
            }
                    break;
                case '1327.1':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(109,198,39,1.0)',
                interactive: true,
            }
                    break;
                case '1704.3':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(150,212,34,1.0)',
                interactive: true,
            }
                    break;
                case '1975':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(191,225,29,1.0)',
                interactive: true,
            }
                    break;
                case '2463':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,232,24,1.0)',
                interactive: true,
            }
                    break;
                case '2652':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(224,234,18,1.0)',
                interactive: true,
            }
                    break;
                case '2827':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(233,235,11,1.0)',
                interactive: true,
            }
                    break;
                case '3048':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,237,5,1.0)',
                interactive: true,
            }
                    break;
                case '3073.9':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,236,0,1.0)',
                interactive: true,
            }
                    break;
                case '3113.9':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(252,193,0,1.0)',
                interactive: true,
            }
                    break;
                case '3162':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,150,0,1.0)',
                interactive: true,
            }
                    break;
                case '3297':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,107,0,1.0)',
                interactive: true,
            }
                    break;
                case '3602':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,64,0,1.0)',
                interactive: true,
            }
                    break;
                case '3963.7':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,38,1,1.0)',
                interactive: true,
            }
                    break;
                case '4158':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,29,1,1.0)',
                interactive: true,
            }
                    break;
                case '5067':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,19,1,1.0)',
                interactive: true,
            }
                    break;
                case '5921':
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,10,1,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_GunungKidulKec_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,1,1,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_GunungKidulKec_3');
        map.getPane('pane_GunungKidulKec_3').style.zIndex = 403;
        map.getPane('pane_GunungKidulKec_3').style['mix-blend-mode'] = 'normal';
        var layer_GunungKidulKec_3 = new L.geoJson(json_GunungKidulKec_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_GunungKidulKec_3',
            layerName: 'layer_GunungKidulKec_3',
            pane: 'pane_GunungKidulKec_3',
            onEachFeature: pop_GunungKidulKec_3,
            style: style_GunungKidulKec_3_0,
        });
        bounds_group.addLayer(layer_GunungKidulKec_3);
        map.addLayer(layer_GunungKidulKec_3);
        function pop_BantulKec_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPV'] !== null ? autolinker.link(feature.properties['RRPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BantulKec_4_0(feature) {
            switch(String(feature.properties['LAT'])) {
                case '0':
                    return {
                pane: 'pane_BantulKec_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(24,215,43,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_BantulKec_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(186,43,43,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_BantulKec_4');
        map.getPane('pane_BantulKec_4').style.zIndex = 404;
        map.getPane('pane_BantulKec_4').style['mix-blend-mode'] = 'normal';
        var layer_BantulKec_4 = new L.geoJson(json_BantulKec_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BantulKec_4',
            layerName: 'layer_BantulKec_4',
            pane: 'pane_BantulKec_4',
            onEachFeature: pop_BantulKec_4,
            style: style_BantulKec_4_0,
        });
        bounds_group.addLayer(layer_BantulKec_4);
        map.addLayer(layer_BantulKec_4);
        function pop_YogyakartaKec_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPV'] !== null ? autolinker.link(feature.properties['RRPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_YogyakartaKec_5_0(feature) {
            switch(String(feature.properties['LAT'])) {
                case '0':
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(24,215,24,1.0)',
                interactive: true,
            }
                    break;
                case '1':
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(160,241,72,1.0)',
                interactive: true,
            }
                    break;
                case '4':
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(233,242,67,1.0)',
                interactive: true,
            }
                    break;
                case '5':
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,217,5,1.0)',
                interactive: true,
            }
                    break;
                case '10':
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(250,105,1,1.0)',
                interactive: true,
            }
                    break;
                case '32':
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,47,15,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_YogyakartaKec_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(186,47,43,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_YogyakartaKec_5');
        map.getPane('pane_YogyakartaKec_5').style.zIndex = 405;
        map.getPane('pane_YogyakartaKec_5').style['mix-blend-mode'] = 'normal';
        var layer_YogyakartaKec_5 = new L.geoJson(json_YogyakartaKec_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_YogyakartaKec_5',
            layerName: 'layer_YogyakartaKec_5',
            pane: 'pane_YogyakartaKec_5',
            onEachFeature: pop_YogyakartaKec_5,
            style: style_YogyakartaKec_5_0,
        });
        bounds_group.addLayer(layer_YogyakartaKec_5);
        map.addLayer(layer_YogyakartaKec_5);
        function pop_KulonProgoKec_6(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LLT'] !== null ? autolinker.link(feature.properties['LLT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LAT'] !== null ? autolinker.link(feature.properties['LAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JPV'] !== null ? autolinker.link(feature.properties['JPV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPP'] !== null ? autolinker.link(feature.properties['RRPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RRPL'] !== null ? autolinker.link(feature.properties['RRPL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tahun'] !== null ? autolinker.link(feature.properties['Tahun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KulonProgoKec_6_0(feature) {
            switch(String(feature.properties['LAT'])) {
                case '0':
                    return {
                pane: 'pane_KulonProgoKec_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(24,215,69,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_KulonProgoKec_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(186,50,43,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_KulonProgoKec_6');
        map.getPane('pane_KulonProgoKec_6').style.zIndex = 406;
        map.getPane('pane_KulonProgoKec_6').style['mix-blend-mode'] = 'normal';
        var layer_KulonProgoKec_6 = new L.geoJson(json_KulonProgoKec_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KulonProgoKec_6',
            layerName: 'layer_KulonProgoKec_6',
            pane: 'pane_KulonProgoKec_6',
            onEachFeature: pop_KulonProgoKec_6,
            style: style_KulonProgoKec_6_0,
        });
        bounds_group.addLayer(layer_KulonProgoKec_6);
        map.addLayer(layer_KulonProgoKec_6);
        function pop_Jateng2_7(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Jateng2_7_0() {
            return {
                pane: 'pane_Jateng2_7',
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
        map.createPane('pane_Jateng2_7');
        map.getPane('pane_Jateng2_7').style.zIndex = 407;
        map.getPane('pane_Jateng2_7').style['mix-blend-mode'] = 'normal';
        var layer_Jateng2_7 = new L.geoJson(json_Jateng2_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Jateng2_7',
            layerName: 'layer_Jateng2_7',
            pane: 'pane_Jateng2_7',
            onEachFeature: pop_Jateng2_7,
            style: style_Jateng2_7_0,
        });
        bounds_group.addLayer(layer_Jateng2_7);
        map.addLayer(layer_Jateng2_7);
        function pop_DIYPoint_8(feature, layer) {
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

        function style_DIYPoint_8_0() {
            return {
                pane: 'pane_DIYPoint_8',
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
        map.createPane('pane_DIYPoint_8');
        map.getPane('pane_DIYPoint_8').style.zIndex = 408;
        map.getPane('pane_DIYPoint_8').style['mix-blend-mode'] = 'normal';
        var layer_DIYPoint_8 = new L.geoJson(json_DIYPoint_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DIYPoint_8',
            layerName: 'layer_DIYPoint_8',
            pane: 'pane_DIYPoint_8',
            onEachFeature: pop_DIYPoint_8,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DIYPoint_8_0(feature));
            },
        });
        bounds_group.addLayer(layer_DIYPoint_8);
        map.addLayer(layer_DIYPoint_8);
        function pop_JatengPoint_9(feature, layer) {
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

        function style_JatengPoint_9_0() {
            return {
                pane: 'pane_JatengPoint_9',
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
        map.createPane('pane_JatengPoint_9');
        map.getPane('pane_JatengPoint_9').style.zIndex = 409;
        map.getPane('pane_JatengPoint_9').style['mix-blend-mode'] = 'normal';
        var layer_JatengPoint_9 = new L.geoJson(json_JatengPoint_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_JatengPoint_9',
            layerName: 'layer_JatengPoint_9',
            pane: 'pane_JatengPoint_9',
            onEachFeature: pop_JatengPoint_9,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_JatengPoint_9_0(feature));
            },
        });
        bounds_group.addLayer(layer_JatengPoint_9);
        map.addLayer(layer_JatengPoint_9);
        setBounds();
        </script>
    </body>
</html>
