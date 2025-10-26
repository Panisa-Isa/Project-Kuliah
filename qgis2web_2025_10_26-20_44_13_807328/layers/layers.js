var wms_layers = [];


        var lyr_OpenStreetMap_0 = new ol.layer.Tile({
            'title': 'OpenStreetMap',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
            attributions: ' ',
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });

        var lyr_GoogleSatelite_1 = new ol.layer.Tile({
            'title': 'Google Satelite',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
            attributions: ' ',
                url: 'http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}'
            })
        });
var format_Garis_2 = new ol.format.GeoJSON();
var features_Garis_2 = format_Garis_2.readFeatures(json_Garis_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Garis_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Garis_2.addFeatures(features_Garis_2);
var lyr_Garis_2 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Garis_2, 
                style: style_Garis_2,
                popuplayertitle: 'Garis',
                interactive: true,
    title: 'Garis<br />\
    <img src="styles/legend/Garis_2_0.png" /> Jalan Kendaraan<br />\
    <img src="styles/legend/Garis_2_1.png" /> Jalan Pejalan Kaki<br />\
    <img src="styles/legend/Garis_2_2.png" /> <br />' });
var format_Gedung_3 = new ol.format.GeoJSON();
var features_Gedung_3 = format_Gedung_3.readFeatures(json_Gedung_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Gedung_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Gedung_3.addFeatures(features_Gedung_3);
var lyr_Gedung_3 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Gedung_3, 
                style: style_Gedung_3,
                popuplayertitle: 'Gedung',
                interactive: true,
    title: 'Gedung<br />\
    <img src="styles/legend/Gedung_3_0.png" /> dll<br />\
    <img src="styles/legend/Gedung_3_1.png" /> Fasilitas Publik<br />\
    <img src="styles/legend/Gedung_3_2.png" /> Gedung Akademik<br />\
    <img src="styles/legend/Gedung_3_3.png" /> Gedung Belajar<br />\
    <img src="styles/legend/Gedung_3_4.png" /> Parkiran<br />' });
var format_Titik_4 = new ol.format.GeoJSON();
var features_Titik_4 = format_Titik_4.readFeatures(json_Titik_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Titik_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Titik_4.addFeatures(features_Titik_4);
var lyr_Titik_4 = new ol.layer.Vector({
                declutter: false,
                source:jsonSource_Titik_4, 
                style: style_Titik_4,
                popuplayertitle: 'Titik',
                interactive: true,
                title: '<img src="styles/legend/Titik_4.png" /> Titik'
            });

lyr_OpenStreetMap_0.setVisible(true);lyr_GoogleSatelite_1.setVisible(true);lyr_Garis_2.setVisible(true);lyr_Gedung_3.setVisible(true);lyr_Titik_4.setVisible(true);
var layersList = [lyr_OpenStreetMap_0,lyr_GoogleSatelite_1,lyr_Garis_2,lyr_Gedung_3,lyr_Titik_4];
lyr_Garis_2.set('fieldAliases', {'id': 'id', 'NmJalan': 'NmJalan', });
lyr_Gedung_3.set('fieldAliases', {'id': 'id', 'NmGedung': 'NmGedung', 'JnGedung': 'JnGedung', });
lyr_Titik_4.set('fieldAliases', {'id': 'id', 'Nm': 'Nm', });
lyr_Garis_2.set('fieldImages', {'id': 'TextEdit', 'NmJalan': 'TextEdit', });
lyr_Gedung_3.set('fieldImages', {'id': 'TextEdit', 'NmGedung': 'TextEdit', 'JnGedung': 'TextEdit', });
lyr_Titik_4.set('fieldImages', {'id': 'TextEdit', 'Nm': 'TextEdit', });
lyr_Garis_2.set('fieldLabels', {'id': 'no label', 'NmJalan': 'no label', });
lyr_Gedung_3.set('fieldLabels', {'id': 'no label', 'NmGedung': 'no label', 'JnGedung': 'no label', });
lyr_Titik_4.set('fieldLabels', {'id': 'no label', 'Nm': 'no label', });
lyr_Titik_4.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});