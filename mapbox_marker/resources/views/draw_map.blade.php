<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Show drawn polygon area</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<style>
    .calculation-box {
        height: 75px;
        width: 150px;
        position: absolute;
        bottom: 40px;
        left: 10px;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 15px;
        text-align: center;
    }

    p {
        font-family: 'Open Sans';
        margin: 0;
        font-size: 13px;
    }

    #map { position:absolute;left: 350px; top:350px; bottom:0px;height:550px ;width:660px; }
</style>

<script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.2.1/mapbox-gl-draw.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.2.1/mapbox-gl-draw.css" type="text/css">
<div id="map"></div>
<div class="calculation-box">
    <p>Draw a polygon using the draw tools.</p>
    <div id="calculated-area"></div>
</div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiYXRpcWFoZ2hhemFsaSIsImEiOiJja21sZ3B4cHgxYWl1MnFzMnJzdHhuNXpqIn0.0DNn3LXDqJpsQe9oaq0f1w';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v9', //hosted style id
        center: [-91.874, 42.76], // starting position
        zoom: 12 // starting zoom
    });

    var draw = new MapboxDraw({
        displayControlsDefault: false,
        controls: {
            polygon: true,
            trash: true
        }
    });
    map.addControl(draw);

    map.on('draw.create', updateArea);
    map.on('draw.delete', updateArea);
    map.on('draw.update', updateArea);

    function updateArea(e) {
        var data = draw.getAll();
        var polyCoord = turf.meta.coordAll(data);
        var answer = document.getElementById('calculated-area');
        if (data.features.length > 0) {
            var area = turf.area(data);
            // restrict to area to 2 decimal points
            var rounded_area = Math.round(area * 100) / 100;
            // answer.innerHTML =
            //     '<p><strong>' +
            //     rounded_area +
            //     '</strong></p><p>square meters</p>';
            console.log(polyCoord);
            answer.innerHTML = '<p><strong>' + rounded_area + '</strong></p><p>square meters</p>'+ 'full coordinate' +polyCoord;
        } else {
            answer.innerHTML = '';
            if (e.type !== 'draw.delete')
                alert('Use the draw tools to draw a polygon!');
        }
    }
</script>

</body>
</html>
