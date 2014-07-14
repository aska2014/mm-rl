@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">

            <div id="map-canvas"></div>

        </div>
    </div>
</div>
<style>
    #map-canvas {
        width:1000px;
        height: 1000px;
        margin: 0px;
        padding: 0px
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
    // In the following example, markers appear when the user clicks on the map.
    // The markers are stored in an array.
    // The user can then click an option to hide, show or delete the markers.
    var map;
    var markers = [];

    function initialize() {
        var center = new google.maps.LatLng(24.266906,45.107849);
        var mapOptions = {
            zoom: 7,
            center: center,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        // This event listener will call addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
            addMarker(event.latLng);
        });

        // Add markers (Dirty way)
        <?php foreach($markers as $marker): ?>
        var location = new google.maps.LatLng(<?php echo $marker->latitude; ?>,<?php echo $marker->longitude; ?>);

        addMarker(location, <?php echo $marker->id; ?>, '<?php echo $marker->title; ?>', '<?php echo $marker->description; ?>');

        <?php endforeach; ?>
    }

    // Add a marker to the map and push to the array.
    function addMarker(location, id, title, description) {

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            draggable:true
        });

        var infowindow = new google.maps.InfoWindow();

        google.maps.event.addListener(marker, 'click', function(evt) {

            var content = "<div>";

            if(title === undefined) title = '';
            if(description === undefined) description = '';

            if(id === undefined) content += "<form method='POST'>";
            else                 content += "<form method='POST' action='/admin/map/edit/" + id + "'>";

            content += "<input type='text' name='marker[title]' value='" + title + "' placeholder='Title' /><br />";
            content += "<input type='text' name='marker[description]' value='" + description + "' placeholder='Description' /><br/>";
            content += "<input type='submit' value='save' /><br/>";
            content += "<input type='hidden' name='marker[latitude]' value='" + evt.latLng.lat() + "' />";
            content += "<input type='hidden' name='marker[longitude]' value='" + evt.latLng.lng() + "' />";

            if(id) content += "<a href='/admin/map/delete/" + id + "'>Delete</a>";

            content += "</form></div>";

            infowindow.setContent(content);

            infowindow.open(map,marker);
        });
        markers.push(marker);
    }

    // Sets the map on all markers in the array.
    function setAllMap(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>


@stop