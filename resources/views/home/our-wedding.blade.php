@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Our Wedding Day</h1>

<div class="row">
    <div class="col-sm-6">
        <h2>May 19, 2018</h2>
        <address><strong>The Cheney Place</strong><br>
            1600 Monroe Ave NW, Grand Rapids, MI 49505</address>
        <dl class="dl-horizontal">
            <dt>Ceremony</dt>
            <dd>4:30PM <br><small>(Please arrive by 4:15PM)</small></dd>
            <dt>Cocktail Hour</dt>
            <dd>5:00PM to 6:00PM</dd>
            <dt>Reception</dt>
            <dd>6:00PM to 11:30PM</dd>
        </dl>
        <!--<p>May 19, 2018 4:00 PM</p>
        <address><strong>The Cheney Place</strong><br>
            1600 Monroe Ave NW, Grand Rapids, MI 49505</address>
        <h2>Ceremony</h2>
        <p>4:00 PM (Please arrive at least 15 minutes early)</p>
        <h2>Cocktail Hour</h2>
        <p>4:30 PM to 5:30 PM</p>
        <h2>Reception</h2>
        <p>5:30 PM to 10:30 PM</p>-->

        <h2>Additional Information</h2>
        <ol>
            <li>Parking is available at the venue. Other options: Taxi/Uber/Lyft from your hotel to the venue.</li>
            <li>Formal attire</li>
        </ol>
    </div>
    <div class="col-sm-6">
        <div id="map"></div>
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.331047927272!2d-85.67237774919626!3d42.99236330282571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819ac3c181da793%3A0xe25df70a8e7b5666!2sThe+Cheney+Place!5e0!3m2!1sen!2sus!4v1483138320671" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script src="{{url('/js/fontawesome-markers/fontawesome-markers.min.js')}}"></script>
<script>
// Map
function initMap() {
    var location = {lat: 42.992359, lng: -85.670184};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
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
                '<a href="'+place.url+'" target="_blank">View on Google Maps</a>'+'</div>');
                infowindow.open(map, this);
        });
        }
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGRTQumIwL6YYlYfT5Anqzkl6lrYa2bJw&libraries=places&callback=initMap"></script>
@stop

