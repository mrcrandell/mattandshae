@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Accommodations</h1>

<div class="row">
    <div class="col-sm-6 col-sm-push-6">
        <div id="map">
        </div>
    </div>
    <div class="col-sm-6 col-sm-pull-6">

        <h2><a href="https://secure3.hilton.com/en_US/hp/reservation/book.htm?inputModule=HOTEL&ctyhocn=GRRDTHX&spec_plan=CHHHCW&arrival=20180518&departure=20180520&cid=OM,WW,HILTONLINK,EN,DirectLink&fromId=HILTONLINKDIRECT" target="_blank">Hampton Inn</a></h2>
        <ul>
            <li>Check-in at 3pm. Check-out at 12pm</li>
            <li>King - $174 /night, 2 Queens - $169 /night</li>
            <li>$8 Parking</li>
            <li>Free breakfast</li>
        </ul>
        <p><a href="https://secure3.hilton.com/en_US/hp/reservation/book.htm?inputModule=HOTEL&ctyhocn=GRRDTHX&spec_plan=CHHHCW&arrival=20180518&departure=20180520&cid=OM,WW,HILTONLINK,EN,DirectLink&fromId=HILTONLINKDIRECT" target="_blank">Make a reservation online</a> or call at <a href="tel:16164562000">616-456-2000</a> and reference the <span style="white-space: nowrap;">"Heusinkveld-Crandell Wedding"</span> or group code "HCW" to obtain the discounted rate.</p>

        <h2><a href="https://aws.passkey.com/e/49090679" target="_blank">Courtyard Marriott</a></h2>
        <ul>
            <li>Check-in at 4pm. Check-out at 12pm</li>
            <li>$169 /night for King or 2 Queens</li>
            <li>$20 self-parking, $25 for valet</li>
        </ul>
        <p><a href="https://aws.passkey.com/e/49090679" target="_blank">Make a reservation online</a> or call at  <a href="tel:18779016632">877-901-6632</a> and reference the <span style="white-space: nowrap;">"Heusinkveld-Crandell Wedding"</span>.</p>

        <h2><a href="https://aws.passkey.com/e/49090679" target="_blank">JW Marriott</a></h2>
        <ul>
            <li>Check-in at 4pm. Check-out at 12pm</li>
            <li>$209 /night for King or 2 Queens</li>
            <li>$24 self-parking, $29 for valet</li>
        </ul>
        <p><a href="https://aws.passkey.com/e/49090679" target="_blank">Make a reservation online</a> or call at  <a href="tel:18779016632">877-901-6632</a> and reference the <span style="white-space: nowrap;">"Heusinkveld-Crandell Wedding"</span>.</p>

        <h2>Holiday Inn Downtown</h2>
        <p>More information coming soon</p>

    </div>

</div>

@stop

@section('scripts')
<script src="{{url('/js/fontawesome-markers/fontawesome-markers.min.js')}}"></script>
<script>
// Map
function initMap() {
    var location = {lat: 42.9634, lng: -85.6681};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: location,
        scrollwheel: false,
        styles: [
        {
            "featureType": "water",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#b5cbe4"
                }
            ]
        },
        {
            "featureType": "landscape",
            "stylers": [
                {
                    "color": "#efefef"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#83a5b0"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#bdcdd3"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e3eed3"
                }
            ]
        },
        {
            "featureType": "administrative",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "lightness": 33
                }
            ]
        },
        {
            "featureType": "road"
        },
        {
            "featureType": "poi.park",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {},
        {
            "featureType": "road",
            "stylers": [
                {
                    "lightness": 20
                }
            ]
        }
    ]
    });
    var markers = [];

    /*var marker = new google.maps.Marker({
        position: location,
        map: map
    });*/
    // Add The Cheney Place
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.getDetails({
        placeId: 'ChIJk6cdGDysGYgRZlZ7jgr3XeI'
    }, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: {
                    path: fontawesome.markers.HEART,
                    scale: 0.4,
                    strokeWeight: 0.2,
                    strokeColor: '#6e6c6d',
                    strokeOpacity: 1,
                    fillColor: '#c0408b',
                    fillOpacity: 1,
                },
            });
            markers.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                place.formatted_address + '<br>'+
                '<a href="'+place.url+'" target="_blank">View on Goole Maps</a>'+'</div>');
                infowindow.open(map, this);
        });
        }
    });

    // Add Hampton Inn
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.getDetails({
        placeId: 'ChIJkWl5jbGtGYgRGi7cIvZWmL0'
    }, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: {
                    path: fontawesome.markers.MAP_MARKER,
                    scale: 0.4,
                    strokeWeight: 0.2,
                    strokeColor: '#000000',
                    strokeOpacity: 1,
                    fillColor: '#6e6c6d',
                    fillOpacity: 1,
                },
            });
            markers.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                place.formatted_address + '<br>'+
                '<a href="'+place.url+'" target="_blank">View on Goole Maps</a>'+'</div>');
                infowindow.open(map, this);
        });
        }
    });

    // Add Courtyard Marriott
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.getDetails({
        placeId: 'ChIJpSnrz8StGYgRX_Q-acou5lI'
    }, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: {
                    path: fontawesome.markers.MAP_MARKER,
                    scale: 0.4,
                    strokeWeight: 0.2,
                    strokeColor: '#000000',
                    strokeOpacity: 1,
                    fillColor: '#6e6c6d',
                    fillOpacity: 1,
                },
            });
            markers.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                place.formatted_address + '<br>'+
                '<a href="'+place.url+'" target="_blank">View on Goole Maps</a>'+'</div>');
                infowindow.open(map, this);
        });
        }
    });

    // Add JW Marriott
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.getDetails({
        placeId: 'ChIJCWnDMMWtGYgRt79DZX9NPUg'
    }, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: {
                    path: fontawesome.markers.MAP_MARKER,
                    scale: 0.4,
                    strokeWeight: 0.2,
                    strokeColor: '#000000',
                    strokeOpacity: 1,
                    fillColor: '#6e6c6d',
                    fillOpacity: 1,
                },
            });
            markers.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                place.formatted_address + '<br>'+
                '<a href="'+place.url+'" target="_blank">View on Goole Maps</a>'+'</div>');
                infowindow.open(map, this);
        });
        }
    });

    // Add Holiday Inn
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.getDetails({
        placeId: 'ChIJTT-nZNqtGYgR8fhFQ0J3J1g'
    }, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: {
                    path: fontawesome.markers.MAP_MARKER,
                    scale: 0.4,
                    strokeWeight: 0.2,
                    strokeColor: '#000000',
                    strokeOpacity: 1,
                    fillColor: '#6e6c6d',
                    fillOpacity: 1,
                },
            });
            markers.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                place.formatted_address + '<br>'+
                '<a href="'+place.url+'" target="_blank">View on Goole Maps</a>'+'</div>');
                infowindow.open(map, this);
        });
        }
    });

    // Recenter the Map
    //var markers = $('#map').map('get','markers');
    google.maps.event.addListenerOnce(map, 'idle', function() {
        var bounds = new google.maps.LatLngBounds();
        //console.log(markers.length);
        for(i=0;i<markers.length;i++) {
           bounds.extend(markers[i].getPosition());
           //console.log(markers[i].getPosition());
        }
        map.setCenter(bounds.getCenter());

        map.fitBounds(bounds);
        if (markers.length == 0) {
            map.setCenter(({lat: 42.9634, lng: -85.668099}));
            map.setZoom(12);
        }
    });

}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGRTQumIwL6YYlYfT5Anqzkl6lrYa2bJw&libraries=places&callback=initMap"></script>
@stop
