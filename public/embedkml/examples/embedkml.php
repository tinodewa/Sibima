
<html>
<head>
	<title>Leaflet</title>
	<link rel="stylesheet" href="http://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
	<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
	<script src="../layer/vector/KML.js"></script>
</head>
<body>
	<div style="width:50%; height:50%" id="map"></div>
	<script type='text/javascript'>
		var map = new L.Map('map', {center: new L.LatLng(58.4, 43.0), zoom: 11});
		var osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		var track = new L.KML("Contoh_Ruas_Jalan.kml", {async: true});
		console.log(track);
		track.on("loaded", function(e) {
			map.fitBounds(e.target.getBounds());
		});
		map.addLayer(track);
		map.addLayer(osm);
		map.addControl(new L.Control.Layers({}, {'Track':track}));
	</script>
</body>
</html>
