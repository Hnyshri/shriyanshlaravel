@extends('layouts.app')

{{--@section('content')--}}
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">

                        <style>
                            #map {
                                height: 100%;
                            }
                            .controls {
                                background-color: #fff;
                                border-radius: 2px;
                                border: 1px solid transparent;
                                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                                box-sizing: border-box;
                                font-family: Roboto;
                                font-size: 15px;
                                font-weight: 300;
                                height: 29px;
                                margin-left: 17px;
                                margin-top: 10px;
                                outline: none;
                                padding: 0 11px 0 13px;
                                text-overflow: ellipsis;
                                width: 400px;
                            }

                            .controls:focus {
                                border-color: #4d90fe;
                            }
                            .title {
                                font-weight: bold;
                            }
                            #infowindow-content {
                                display: none;
                            }
                            #map #infowindow-content {
                                display: inline;
                            }

                        </style>
                    <div style="display: none">
                        <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
                    </div>
                    <div id="map"></div>
                    <div id="infowindow-content">
                        <span id="place-name"  class="title"></span><br>
                        <strong>Place ID</strong>: <span id="place-id"></span><br>
                        <span id="place-address"></span>
                    </div>

                    <script>

                        function initMap() {
                            var map = new google.maps.Map(
                                document.getElementById('map'),
                                {center: {lat:30.3840597, lng:77.9289983}, zoom: 13});

                            var input = document.getElementById('pac-input');

                            var autocomplete = new google.maps.places.Autocomplete(input);

                            autocomplete.bindTo('bounds', map);

                            // Specify just the place data fields that you need.
                            autocomplete.setFields(['place_id', 'geometry', 'name', 'formatted_address']);

                            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                            var infowindow = new google.maps.InfoWindow();
                            var infowindowContent = document.getElementById('infowindow-content');
                            infowindow.setContent(infowindowContent);

                            var geocoder = new google.maps.Geocoder;

                            var marker = new google.maps.Marker({map: map});
                            marker.addListener('click', function() {
                                infowindow.open(map, marker);
                            });

                            autocomplete.addListener('place_changed', function() {
                                infowindow.close();
                                var place = autocomplete.getPlace();

                                if (!place.place_id) {
                                    return;
                                }
                                geocoder.geocode({'placeId': place.place_id}, function(results, status) {
                                    if (status !== 'OK') {
                                        window.alert('Geocoder failed due to: ' + status);
                                        return;
                                    }

                                    map.setZoom(11);
                                    map.setCenter(results[0].geometry.location);

                                    // Set the position of the marker using the place ID and location.
                                    marker.setPlace(
                                        {placeId: place.place_id, location: results[0].geometry.location});

                                    marker.setVisible(true);

                                    infowindowContent.children['place-name'].textContent = place.name;
                                    infowindowContent.children['place-id'].textContent = place.place_id;
                                    infowindowContent.children['place-address'].textContent =
                                        results[0].formatted_address;

                                    infowindow.open(map, marker);
                                });
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLPGqGaTvmxTkwj31xSeb5__0h0bh99Qw&libraries=places&callback=initMap"
                            async defer></script>

                    {{--<div id="map" style="height: 600px;"></div>--}}
                    {{--<script>--}}
                        {{--var map;--}}
                         {{--var latlag =  {lat: 30.7129897, lng: 76.6742181};--}}
                        {{--function initMap() {--}}
                            {{--map = new google.maps.Map(document.getElementById('map'), {--}}
                                {{--center: latlag,--}}
                                {{--zoom: 8--}}
                            {{--});--}}
                            {{--var marker = new google.maps.Marker({--}}
                                {{--position: latlag,--}}
                            {{--map:map--}}
                        {{--});--}}
                            {{--var marker1 = new google.maps.Marker({--}}
                                {{--position: { lat:30.3840597, lng:77.9289983},--}}
                                {{--map:map--}}
                            {{--});--}}
                        {{--}--}}
                    {{--</script>--}}
                    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLPGqGaTvmxTkwj31xSeb5__0h0bh99Qw&callback=initMap"--}}
                            {{--async defer></script>--}}
                </div>
            </div>
        </div>
    </div>
</div>
{{--@endsection--}}
