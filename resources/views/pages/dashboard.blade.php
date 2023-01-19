@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="dashboardtitle pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">DASHBOARD </h1>           
      </div>
    <div class="w-full px-4 flex flex-wrap ">
    <div class="w-1/5  px-4 " id="selecttahun">
<select id="selecttahun" class="bg-transparent border border-white text-black font-bold text-sm rounded-full focus:ring-white focus:border-white block w-full p-2.5">
  <option selected>Tahun</option>
  <option value="A">2021</option>
  <option value="B">2020</option>
  <option value="C">2019</option>
  <option value="D">2018</option>
  <option value="E">2017</option>
  <option value="F">2016</option>
  <option value="G">2015</option>
  <option value="H">2014</option>
  <option value="I">2013</option>
  <option value="J">2012</option>
  <option value="K">2011</option>
</select>
    </div>
   
    <div class="w-1/5 px-4" id="selectancaman">
<select id="selectancaman" class="bg-transparent border border-white text-black font-bold text-sm rounded-full focus:ring-white focus:border-white block w-full p-2.5">
  <option selected>Ancaman</option>
  <option value="A">Jalan dan Jembatan</option>
  <option value="B">Pengembangan Wilayah dan Kawasan</option>
  <option value="C">Transportasi</option>
  <option value="D">Infrastruktur Sumber Daya Air</option>
  <option value="D">Energi dan Teknologi</option>
  <option value="D">Lainnya</option>
</select>
    </div>
   
    <div class="w-1/5  px-4" id="selectwilayah">
<select id="selectwilayah" class="bg-transparent border border-white text-black font-bold text-sm rounded-full focus:ring-white focus:border-white block w-full p-2.5">
  <option selected>Wilayah</option>
  <option value="A">Jawa</option>
  <option value="B">Sulawesi</option>
  <option value="C">Kalimantan</option>
  <option value="D">Sumatera</option>
  <option value="E">Nusa Tenggara - Bali</option>
  <option value="F">Maluku - Papua</option>
</select>
    </div>
   
    <div class="w-1/5 px-4" id="Kategori">
<select id="Kategori" class="bg-transparent border border-white text-black text-sm font-bold rounded-full focus:ring-white focus:border-white block w-full p-2.5">
  <option selected>Kategori</option>
  <option value="A">Proyek Strategis Nasional</option>
  <option value="B">Izin Usaha Pertambangan</option>
  <option value="C">Izin Usaha Perkebunan</option>
  <option value="D">Titik Bencana</option>
  <option value="E">Ibu Kota Nusantara</option>
  <option value="F">Izin Usaha Kehutanan</option>
  <option value="G">Kawasan Strategis Pariwisata Nasional</option>
</select>
    </div>
    <div class="w-1/5 px-4" id="selectyear">
<button type="button" class="py-2.5 px-10  mb-10 text-base font-extrabold text-black focus:outline-none bg-green2 rounded-full border border-white hover:bg-transparent hover:text-white focus:z-10 focus:ring-2 focus:ring-white">Tampilkan Data</button>
    </div>
</div>
  <div class="" id="map">
    </div>
<style type="text/css"> @import url(css/peta.css);</style>
<script>
  var map = L.map('map').setView([-3.2940821535867415, 121.79623429824217], 5);
  var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);
    L.geoJSON(data).addTo(map);
    
  var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
  });

  var baseMaps = {
    "OpenStreetMap": osm,
    "Satelit": Esri_WorldImagery
  };

  L.control.layers(baseMaps).addTo(map);

  // Titik Bencana
    
  var marker = L.marker([-9.81546913156803, 123.75580899706989], {alt: 'Nusa Tenggara Timur'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 3%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 1%<br>'+ '<b>Puting Beliung</b> : 5%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-7.8880119465213845, 110.43523643306322], {alt: 'D.I. Yogyakarta'}).addTo(map)
		  .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 1%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 74%<br>'
      + '<b>Tanah Longsor</b> : 46%<br>');
  var marker = L.marker([-7.725523917759712, 112.70376040762439], {alt: 'Jawa Timur'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 80%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 19%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-7.269479269718359, 110.21489505345042], {alt: 'Jawa Tengah'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 80%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 1%<br>'+ '<b>Puting Beliung</b> : 85%<br>'
      + '<b>Tanah Longsor</b> : 83%<br>');
  var marker = L.marker([-6.931062321805244, 107.60446372802963], {alt: 'Jawa Barat'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 80%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 82%<br>'
      + '<b>Tanah Longsor</b> : 85%<br>');
  var marker = L.marker([-6.1774302021737775, 106.8278689958273], {alt: 'DKI Jakarta'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 15%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-6.425213619013684, 106.12549720235651], {alt: 'Banten'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 27%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 1%<br>'+ '<b>Puting Beliung</b> : 11%<br>'
      + '<b>Tanah Longsor</b> : 2%<br>');
  var marker = L.marker([-4.9255556504814635, 104.99725408065451], {alt: 'Bandar Lampung'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 14%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 7%<br>'
      + '<b>Tanah Longsor</b> : 1%<br>');
  var marker = L.marker([-3.137957209269209, 104.19529092013076], {alt: 'Sumatera Selatan'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 27%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 2%<br>'+ '<b>Puting Beliung</b> : 3%<br>'
      + '<b>Tanah Longsor</b> : 4%<br>');
  var marker = L.marker([-3.591324441494194, 102.38067223837494], {alt: 'Bengkulu'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 7%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 1%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-1.7736730700578605, 102.67031708453304], {alt: 'Jambi'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 10%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 1%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-2.4144201278709816, 106.15533253285524], {alt: 'Kepulauan Bangka Belitung'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 1%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 2%<br>'+ '<b>Puting Beliung</b> : 3%<br>'
      + '<b>Tanah Longsor</b> : 1%<br>');
  var marker = L.marker([-0.864121805357342, 100.41951422472646], {alt: 'Sumatra Barat'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 32%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 2%<br>'+ '<b>Puting Beliung</b> : 19%<br>'
      + '<b>Tanah Longsor</b> : 15%<br>');
  var marker = L.marker([0.5697518158776403, 101.79158151187934], {alt: 'Kepulauan Riau'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 1%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 5%<br>'+ '<b>Puting Beliung</b> : 1%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([1.0105553622038514, 104.44613847631187], {alt: 'Tanjung Pinang/ Riau'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 2%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 8%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 3%<br>');
  var marker = L.marker([2.1025431508515595, 99.04888990284736], {alt: 'Rantau Prapat/ Sumatra Utara'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 18%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 8%<br>'+ '<b>Puting Beliung</b> : 11%<br>'
      + '<b>Tanah Longsor</b> : 6%<br>');
  var marker = L.marker([4.222710232646044, 96.85957098597444], {alt: 'Aceh'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 49%<br>' 
      + '<b>Gempa Bumi</b> : 2%<br>' + '<b>Kebakaran</b> : 81%<br>'+ '<b>Puting Beliung</b> : 42%<br>'
      + '<b>Tanah Longsor</b> : 6%<br>');
  var marker = L.marker([0.00939683410677837, 111.15522535454956], {alt: 'Kalimantan Barat'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 22%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 5%<br>'
      + '<b>Tanah Longsor</b> : 2%<br>');
  var marker = L.marker([-1.5623081779314458, 113.41579236745885], {alt: 'Kalimantan Tengah'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 24%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 7%<br>'+ '<b>Puting Beliung</b> : 1%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-3.0830241097093, 115.35870051603534], {alt: 'Kalimantan Selatan'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 28%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 8%<br>'
      + '<b>Tanah Longsor</b> : 2%<br>');
  var marker = L.marker([0.49169962318622623, 116.3917114747772], {alt: 'Kalimantan Timur'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 10%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 18%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 3%<br>');
  var marker = L.marker([2.942388627327679, 115.84607933984142], {alt: 'Kalimantan Utara'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 1%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 19%<br>'+ '<b>Puting Beliung</b> : 2%<br>'
      + '<b>Tanah Longsor</b> : 1%<br>');
  var marker = L.marker([-2.4438119131036435, 119.3393233162067], {alt: 'Sulawesi Barat'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 3%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 1%<br>'
      + '<b>Tanah Longsor</b> : 2%<br>');
  var marker = L.marker([-3.6627260904504886, 120.2210010457096], {alt: 'Sulawesi Selatan'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 39%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 39%<br>'
      + '<b>Tanah Longsor</b> : 18%<br>');
  var marker = L.marker([-1.0751820446911227, 120.35099263434255], {alt: 'Sulawesi Tengah'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 18%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 1%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-4.050640031181969, 122.01560189391701], {alt: 'Sulawesi Tenggara'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 6%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 5%<br>'
      + '<b>Tanah Longsor</b> : 2%<br>');
  var marker = L.marker([0.9908764205767224, 124.57288860032887], {alt: 'Sulawesi Utara'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 8%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([0.6559092583829357, 122.3492236897484], {alt: 'Gorontalo'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 18%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 2%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([0.6909954628791868, 127.88142732858879], {alt: 'Maluku Utara'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 11%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 2%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-2.9510854845892704, 129.351784650328], {alt: 'Maluku'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 5%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 2%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-2.1552339037010126, 132.97114906815824], {alt: 'Papua Barat'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 6%<br>' 
      + '<b>Gempa Bumi</b> : 0%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 1%<br>'
      + '<b>Tanah Longsor</b> : 0%<br>');
  var marker = L.marker([-4.211936586069503, 138.59702156425985], {alt: 'Papua'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 3%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 0%<br>'+ '<b>Puting Beliung</b> : 0%<br>'
      + '<b>Tanah Longsor</b> : 1%<br>');
  var marker = L.marker([-8.594615036851895, 117.46340275758936], {alt: 'Nusa Tenggara Barat'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 11%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 1%<br>'+ '<b>Puting Beliung</b> : 2%<br>'
      + '<b>Tanah Longsor</b> : 1%<br>');
  var marker = L.marker([-8.33438202602227, 115.09440238091376], {alt: 'Bali'}).addTo(map)
      .bindPopup('<b>Titik Bencana</b>' + '<br>' + '<b>Banjir</b> : 3%<br>' 
      + '<b>Gempa Bumi</b> : 1%<br>' + '<b>Kebakaran</b> : 2%<br>'+ '<b>Puting Beliung</b> : 14%<br>'
      + '<b>Tanah Longsor</b> : 6%<br>');

// Menabahkan warna pada peta
  function getColor(d) {
    return d > 5000.0 ? '#800026' :
           d > 1000.0  ? '#BD0026' :
           d > 500.0  ? '#E31A1C' :
           d > 100.0  ? '#FC4E2A' :
           d > 50.0   ? '#FD8D3C' :
           d > 10.0   ? '#FEB24C' :
           d > 1.0   ? '#FED976' :
                      '#FFEDA0';
}

function style(feature) {
    return {
        fillColor: getColor(feature.properties.luas_sk),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

L.geoJson(data, {style: style}).addTo(map);

// Menabahkan interaksi pada peta
function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });

    layer.bringToFront();
}

function resetHighlight(e) {
    geojson.resetStyle(e.target);
}

var geojson;
// ... our listeners
geojson = L.geoJson(data).addTo(map);

function zoomToFeature(e) {
    map.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
}

geojson = L.geoJson(data, {
    style: style,
    onEachFeature: onEachFeature
}).addTo(map);

//Kontrol informasi peta
var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};
// method that we will use to update the control based on feature properties passed
info.update = function (props) {
    this._div.innerHTML = '<h4>Data Izin (Pertambangan & Perkebunan)</h4>' +  (props ?
        '<b>' + 'Nama Perusahaan : ' + props.nama_usaha + '</b><br/>' + 
        'Luas Wilayah Legal : ' + props.luas_sk  + ' ha' + '<br/>' + '<p>' + 'Komoditas : ' + props.komoditas + '</p>'
        : 'Arahkan kursor ke suatu wilayah');
};

info.addTo(map);

function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		layer.bringToFront();

		info.update(layer.feature.properties);
	}
 /* global statesData */
 var geojson = L.geoJson(data, {
		style,
		onEachFeature
	}).addTo(map);

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}
 // Legend dalam peta
  var legend = L.control({position: 'bottomright'});

  legend.onAdd = function (map) {

      var div = L.DomUtil.create('div', 'info legend'),
          grades = [0, 10, 20, 50, 100, 200, 500, 1000],
          labels = [];
      // loop through our density intervals and generate a label with a colored square for each interval
      for (var i = 0; i < grades.length; i++) {
          div.innerHTML +=
              '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
              grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
      }

      return div;
  };
  legend.addTo(map);
</script>
    </div>
</section>
{{-- end title page --}}

{{-- section  dashboard  --}}
<section class="dashboard pb-32">
    <div class="container">
    <div class="flex flex-wrap">
    <div class="w-full px-4 mb-10 lg:w-1/3">
    <div class="box-content mt-10 overflow-x">
      <table class="mt-2 w-full table-auto bg-white text-black text-left border shadow-lg">
  <thead>
    <tr>
    <h4 class="text-base mb-2 p-2 font-bold text-white">DATA SEBARAN LOKASI (Provinsi)</h4>
    <hr>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Berdasarkan Provinsi</th>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <tr class="border-b">
      <td>Kalimantan Barat </td>
      <td>323</td>
    </tr>
    <tr class="border-b">
      <td>Sulawesi Selatan</td>
      <td>316</td>
    </tr>
    <tr class="border-b">
      <td>Kalimantan Tengah</td>
      <td>269</td>
    </tr>
    <tr class="border-b">
      <td>Sulawesi Tengah</td>
      <td>208</td>
    </tr>
    <tr class="border-b">
      <td>Tengah</td>
      <td>208</td>
    </tr>
    <tr class="border-b">
      <td>Total</td>
      <td>3426</td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    <div class="w-full px-4 mb-10 lg:w-1/3">
     <div class="mt-10">
      <table class="w-full table-auto bg-white text-black text-left border shadow-lg">
  <thead>
    <tr>
    <h4 class="text-base mb-2 p-2 font-bold text-white">DATA SEBARAN LOKASI (Komoditas)</h4>
    <hr class="mb-2.5">
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Berdasarkan Komoditas</th>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Jumlah</th>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Luas</th>
    </tr>
  </thead>
  <tbody>
    <tr class="border-b">
      <td>EMAS</td>
      <td>2.601</td>
      <td>3 JUTA</td>
    </tr>
    <tr class="border-b">
      <td>PASIR</td>
      <td>763</td>
      <td>8 JUTA</td>
    </tr>
    <tr class="border-b">
      <td>BATUBARA</td>
      <td>62</td>
      <td>157.407</td>
    </tr>
    <tr class="border-b">
    </tr>
    <tr class="border-b">
      <td>Total</td>
      <td>3426</td>
      <td>11 JUTA</td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
     <div class="mt-10 bg-white shadow-lg rounded-lg">
    <div class="divide-y-2 text-black">
    <h4 class="text-xl mb-2 p-2">Data Terbaru</h4>
    <hr>
    </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Anugrah Indah Bestari </h2>
            <h3 class="text-black">Komoditas : Pasir</h3>
            <h3 class="text-black">Luas : 4,17 Ha</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Semen Grobogan </h2>
            <h3 class="text-black">Komoditas : Batu Gamping</h3>
            <h3 class="text-black">Luas : 650 Ha</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Anugrah Surya Pratama </h2>
            <h3 class="text-black">Komoditas : Nikel</h3>
            <h3 class="text-black">Luas : 9500 Ha</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Tambang Jaya Raya </h2>
            <h3 class="text-black">Komoditas : Antimoni</h3>
            <h3 class="text-black">Luas : 2970 Ha</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Jogja Magasa Iron </h2>
            <h3 class="text-black">Komoditas : Pasir Besi</h3>
            <h3 class="text-black">Luas : 2977 Ha</h3>
          </div>
        </div>
      </div>  
     </div>

  <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
             <div class="mt-10 ">
    <div class="divide text-black ">
    <h4 class="text-base font-bold text-white mb-2 p-2">GRAFIK DATA WILAYAH KELOLA PERBULAN</h4>
    <hr>
    <div class="mb-2 p-2">
      <div class="shadow-lg rounded-lg overflow-hidden bg-white">
        <canvas class="p-2" id="chartBar"></canvas>
      </div>
  </div>
<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Chart bar -->
<script>
  const labelsBarChart = [
    "Jan", "Feb", "Mar", "Apr", "Mei", "Jun",
    "Jul", "Ags", "Sep", "Okt", "Nov", "Des",
  ];
  const dataBarChart = {
    labels: labelsBarChart,
    datasets: [
      {
        label: "Wilayah Izin usaha pertambangan",
        backgroundColor: "blue",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [2, 10, 5, 12, 20, 30, 45, 15, 50, 44, 18, 28],
      },
    ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartBar"),
    configBarChart
  );
</script>
        </div>
      </div>
    </div>
<div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
             <div class="mt-10 ">
    <div class="divide text-black ">
    <h4 class="text-base font-bold text-white mb-2 p-2">STATUS TAHAPAN</h4>
    <hr> 
     <div class="mb-2 p-2">
      <div class="shadow-lg rounded-lg overflow-hidden bg-white">
  <canvas class="p-2" id="chartDoughnut"></canvas>
</div>
<!-- Chart doughnut -->
<script>
  const dataDoughnut = {
    labels: ["Potensi", "Usulan", "Penetapan Hak"],
    datasets: [
      {
        label: ["Potensi", "Usulan", "Penetapan Hak"],
        data: [200, 50, 100],
        backgroundColor: [
          "orange",
          "red",
          "blue",
        ],
        hoverOffset: 4,
      },
    ],
  };
  const configDoughnut = {
    type: "doughnut",
    data: dataDoughnut,
    options: {},
  };
  var chartBar = new Chart(
    document.getElementById("chartDoughnut"),
    configDoughnut
  );
</script>
    </div>
    </div>
        </div>
     <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
        </div>
       </div>
    </section>
{{-- end section  artikel --}}

@endsection