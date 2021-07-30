mapboxgl.accessToken = 'pk.eyJ1IjoiYXFpbGF0OTQiLCJhIjoiY2ttbjNpdjJ3MXF6MDJvbWd2dng5ZHV6aSJ9.BS_YnlXjvbpZ91ejPs9qlg';

navigator.geolocation.getCurrentPosition(successLocation, 
    errorLocation, {
        enableHighAccuracy: true

    })

    function successLocation(position){
        console.log(position)
        setupMap()
    }

    function errorLocation(){
        setupMap([-2.24, 53.48])
    }

  function setupMap(center){
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: center,
    zoom: 5
  });

const nav = new mapboxgl.NavigationControl();
map.addControl(nav)  

var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken,
  });
  
  
  map.addControl(directions, 'top-left');
}