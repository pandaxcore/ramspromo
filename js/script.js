// Initialize and add the map
function initMap() {

    var options = {
        zoom:14,
        center:{lat: 43.235323, lng: 76.923089}
    }

    var options2 = {
        zoom:8,
        center:{lat: 43.234995, lng: 76.911491}
    }

    var options3 = {
        zoom:10,
        center:{lat: 43.234753, lng: 76.900054}
    }
    var options4 = {
        zoom:10,
        center:{lat: 43.235323, lng: 76.923089}
    }
    var options5 = {
        zoom:10,
        center:{lat: 43.235323, lng: 76.923089}
    }

var map = new google.maps.Map(document.getElementById('map'), options);
    console.log('width ='+$(window).width())

    $(window).resize(function() {
        if($(window).width()<=992){
            var map = new google.maps.Map(document.getElementById('map'), options2);
            console.log('width ='+$(window).width());
        } else if ($(window).width()<=768){
            var map = new google.maps.Map(document.getElementById('map'), options3);
            console.log('width ='+$(window).width())
        } else if ($(window).width()<=576){
            var map = new google.maps.Map(document.getElementById('map'), options4);
            console.log('width ='+$(window).width())
        } else if ($(window).width()<=320){
            var map = new google.maps.Map(document.getElementById('map'), options5);
            console.log('width ='+$(window).width())
        } else {
            var map = new google.maps.Map(document.getElementById('map'), options);
            console.log('width ='+$(window).width())
        }
    });

    var markers = [
    {
        coords: {lat: 43.2276142, lng: 76.9279591},
        iconImg: './img/location.png',
        content: '<p>г. Алматы, ул. Тимирязева, 37 Пн-Вс 10:00-20:00 (без выходных и перерывов)</p>'
    },
    {
        coords: {lat: 43.2247205, lng: 76.9525677},
        iconImg: './img/location.png',
        content: '<p>г. Алматы, ул. Хаджымукана, 59 угол пр. Назарбаева Пн-Пт 10:00-19:00 Сб-Вс 10:00-18:00 (без выходных и перерывов)</p>'
    },
    {
        coords: {lat: 43.238604, lng: 76.896009},
        iconImg: './img/location.png',
        content: '<p>г. Алматы, пр. Абая угол пр. Гагарина Пн-Вс 10:00-20:00 (без выходных и перерывов)</p>'
    }];

    for(var i=0; i<markers.length; i++){
        addMarker(markers[i]);
    }

    function addMarker(props){
        var marker = new google.maps.Marker({
            position: props.coords,
            map: map,
            icon: props.iconImg
        });

        if(props.iconImg){
            marker.setIcon(props.iconImg);
        }

        if(props.content){
            var infoWindow = new google.maps.InfoWindow({
              content:props.content
          });

            marker.addListener('click', function(){
              infoWindow.open(map, marker);
          });
        }
    }

    //currrent position
    window.onload = function myLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
            //console.log("true");
        } else {
            alert('Geolocation is not supported by this browser!')
        }
    }

    
    function showPosition(position){
        var locCoords = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        }

        var marker = new google.maps.Marker({
            position: locCoords,
            map: map
        });

        //console.log(locCoords);
        //route from a to b

        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        //directionsDisplay.setMap(map);

        function calcRoute() {
            var start = navigator.geolocation.getCurrentPosition(showPosition);
            var end = marker.document.getElementById('end').value;
            var request = {
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                    directionsRenderer.setDirections(result);
                }
            });
        }

    }
}
