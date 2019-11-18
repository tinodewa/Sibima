<html>
    <head>
        <link rel="stylesheet" href="http://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
        <script src="http://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
        <script src="layer/vector/KML.js"></script>
    </head>
    <body>
        <div style="width: 300px; height: 300px" id="map"></div>
        <script type="text/javascript">
            // Make basemap
            const map = new L.Map('map', { center: new L.LatLng(58.4, 43.0), zoom: 11 });
            const osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

            map.addLayer(osm);

            // Load kml file
            fetch('Contoh_Ruas_Jalan.kml', {mode: 'cors'})
                .then(res => res.text())
                .then(kmltext => {
                	console.log(kmltext);
                    // Create new kml overlay
                    const parser = new DOMParser();
                    const kml = parser.parseFromString(kmltext, 'text/xml');
                    const track = new L.KML(kml);
                    map.addLayer(track);

                    // Adjust map to show the kml
                    const bounds = track.getBounds();
                    map.fitBounds(bounds);
                });
        </script>
    </body>
</html>