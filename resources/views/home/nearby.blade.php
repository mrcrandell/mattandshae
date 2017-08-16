@extends('layouts.default')

@section('head')
@stop

@section('content')
<h1>Nearby Attractions</h1>

<div class="row">
    <div class="col-sm-6 col-sm-push-6">
        <div id="map" class="map-xl">
        </div>
    </div>
    <div class="col-sm-6 col-sm-pull-6">

        <div class="nearby-list">
            <address>
                <strong class="name">The B.O.B.</strong><br>
                20 Monroe Ave NW, Grand Rapids, MI 49503
            </address>
            <hr>
            <address>
                <strong class="name">Brewery Vivant</strong><br>
                925 Cherry St SE, Grand Rapids, MI 49506
            </address>
            <hr>
            <address>
                <strong class="name">Founders Brewing Co</strong><br>
                235 Grandville Ave. SW, Grand Rapids, MI 49503
            </address>
            <hr>
            <address>
                <strong class="name">Frederik Meijer Gardens &amp; Sculpture Park</strong><br>
                1000 E Beltline Ave NE, Grand Rapids, MI 49525
            </address>
            <hr>
            <address>
                <strong class="name">HopCat</strong><br>
                25 Ionia Ave SW, Grand Rapids, MI 49503
            </address>
            <hr>
            <address>
                <strong class="name">RiverTown Crossings</strong><br>
                3700 Rivertown Pkwy, Grandville, MI 49418
            </address>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script src="{{url('/js/fontawesome-markers/fontawesome-markers.min.js')}}"></script>
<script>
// Map
function initMap() {
    var location = {lat: 42.93389507990623, lng: -85.67364103022464};
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
    // Add Markers
    var markers = [];

    // Array of Place IDs
    var place_ids = ['ChIJXbFwwsStGYgRi_btOtiq5N0','ChIJud9NGqGtGYgRhD3CJgXBPGY','ChIJ19JZuMKtGYgRzsDAb6Wmhzc','ChIJufxEnSNTGIgR1eef5E7f5V4','ChIJ1QytC8StGYgRb3V7nliYuX4','ChIJM1vB4qKwGYgRhGzqRHqizJs'];

    // Loop through Place IDs and add markers/info windows to Map
    for (var i = place_ids.length - 1; i >= 0; i--) {

        var infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.getDetails({
            placeId: place_ids[i]
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
                    '<a href="'+place.url+'" target="_blank">View on Google Maps</a>'+'</div>');
                    infowindow.open(map, this);
            });
            }
        });
    }

    google.maps.event.addListener(map,'idle',function(){
      if(!this.get('dragging') && this.get('oldCenter') && this.get('oldCenter')!==this.getCenter()) {
        console.log(map.getCenter());
      }
      if(!this.get('dragging')){
       this.set('oldCenter',this.getCenter())
      }

    });

    google.maps.event.addListener(map,'dragstart',function(){
      this.set('dragging',true);
    });

    google.maps.event.addListener(map,'dragend',function(){
      this.set('dragging',false);
      google.maps.event.trigger(this,'idle',{});
    });

}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGRTQumIwL6YYlYfT5Anqzkl6lrYa2bJw&libraries=places&callback=initMap"></script>
@stop
