<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=4.0">
    <title>Route</title>
    <!-- leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />

    <!-- Leaflet routing machine css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #return-container {
          
            display: flex;
            justify-content: center;
        }

        #return-box {
            background: linear-gradient(to right, #33A833, #95C113);
            padding: 10px;
            text-decoration: none;
            color: white;
        }
        #return-link{
            text-decoration: none;
            color:white;
        }
    </style>

</head>

<body>
    <div id="map" style="width:100%; height:80vh"></div>

    <div id="return-container">
        <h3 id="return-box"><a href="BookNow.php" id="return-link">RETURN</h3>

</body>




</html>

<!-- leaflet js  -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>


<!-- leaflet routing machine js -->
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
<script>
    //leaflet map with osm tilelayer
    const map = L.map('map').setView([30.750654250896773, 76.64020724581798], 6);
    const osm = L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", { attribution: "OSM" }).addTo(map);

    //marker icon
    // var bicycleIcon=L.icon({
    //     iconUrl:'BikeMapIcon.jpeg',
    //     iconSize:[60,60]
    // })

    //marker
    var marker = L.marker([30.76891680974941, 76.57584632351275]).addTo(map);
    var station1 = L.marker([30.764831827719497, 76.57503421364252]).addTo(map);
    var station2 = L.marker([30.77059756968224, 76.57797329114803]).addTo(map);
    var station3 = L.marker([30.772043267014595, 76.57979512596297]).addTo(map);
    var station4 = L.marker([30.76593392151042, 76.57575511352147]).addTo(map);
    var station5 = L.marker([30.773757607807195, 76.5707503656272]).addTo(map);

    //map click event
    map.on('click', function (e) {
        console.log(e);
        var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);

        L.Routing.control({
            waypoints: [
                L.latLng(30.76889837251024, 76.57580340817171),
                L.latLng(e.latlng.lat, e.latlng.lng)
            ]
        }).on('routesfound', function (e) {
            console.log(e);
            e.routes[0].coordinates.forEach(function (coord, index) {
                setTimeout(() => {
                    marker.setLatLng([coord.lat, coord.lng])
                }, 100 * index);
            })
        })


            .addTo(map);
    })

    var mapp = new L.Map('map', {
        center: bounds.getCenter(30.76889837251024, 76.57580340817171),
        zoom: 10,
        layers: [osm],
        maxBounds: bounds,
        maxBoundsViscosity: 1.0
    });
    // L.Routing.control({
    //     waypoints: [
    //         L.latLng(30.750654250896773, 76.64020724581798),
    //         L.latLng(30.77367821375438, 76.56948812293129)
    //     ]
    // }).addTo(map);
</script>