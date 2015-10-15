<!DOCTYPE html>
<html lang="en">
    <head>
        <?php // include_once './master/head.php'; ?>
        <?php include_once './application/views/master/head.php'; ?>
        <?php // echo base_url('application/views/master/head'); ?>

        <style>
            /*#container { width: 100%; height: 100% }*/
            html, body { height:100%; width:100%;}
            #map {
                height : 100%; width : 100%; top : 0; left : 0; position : absolute; z-index : 200; 
            }
        </style>
        <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
        <script src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
        <script>
//            function initialize() {
//                var mapCanvas = document.getElementById('map');
//                var mapOptions = {
//                    center: new google.maps.LatLng(44.5403, -78.5463),
//                    zoom: 8,
//                    mapTypeId: google.maps.MapTypeId.ROADMAP
//                }
//                var map = new google.maps.Map(mapCanvas, mapOptions);
//            }
//            google.maps.event.addDomListener(window, 'load', initialize);



            var initialLocation;
            var siberia = new google.maps.LatLng(60, 105);
            var newyork = new google.maps.LatLng(40.69847032728747, -73.9514422416687);
            var browserSupportFlag = new Boolean();

            function initialize() {
                var myOptions = {
                    panControl: false,
                    zoom: 14, //6
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map"), myOptions);

                // Try W3C Geolocation (Preferred)
                if (navigator.geolocation) {
                    browserSupportFlag = true;
                    navigator.geolocation.getCurrentPosition(function (position) {
                        initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        map.setCenter(initialLocation);

                        var marker = new google.maps.Marker({
                            position: initialLocation,
                            map: map,
                            draggable: true,
                            title: "You are here! Drag the marker to the exact location.",
                            icon: '../assets/img/07-map-marker-icon.png'
//                            icon: 'img/marker_black.png'
//                            icon: 'img/marker_red.png'
                        });

                    }, function () {
                        handleNoGeolocation(browserSupportFlag);
                    });
                }
                // Browser doesn't support Geolocation
                else {
                    browserSupportFlag = false;
                    handleNoGeolocation(browserSupportFlag);
                }

                function handleNoGeolocation(errorFlag) {
                    if (errorFlag == true) {
                        alert("Geolocation service failed.");
                        initialLocation = newyork;
                    } else {
                        alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
                        initialLocation = siberia;
                    }
                    map.setCenter(initialLocation);
                }

                //search box
                // Create the search box and link it to the UI element.
                var input = document.getElementById('srch-term');
                var searchBox = new google.maps.places.SearchBox(input);

//        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);


                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function () {
                    searchBox.setBounds(map.getBounds());
                });

                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function () {
                    var places = searchBox.getPlaces();

                    if (places.length == 0) {
                        return;
                    }

                    // Clear out the old markers.
                    markers.forEach(function (marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function (place) {
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });


//                var iconBase = 'img/';
//                var marker = new google.maps.Marker({
//                    position: initialLocation,
//                    map: map,
//                    icon: iconBase + 'icq.jpg'
//                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>  

    </head>
    <body>
        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">

                    <?php // include_once 'master/sidebar.php'; ?>
                    <?php include_once './application/views/master/sidebar.php'; ?>
                    <?php // echo base_url('application/views/master/sidebar'); ?>

                    <!-- main right col -->
                    <div class="column col-sm-10 col-xs-11" id="main">

                        <?php // include_once './master/top-nav.php'; ?>
                        <?php include_once './application/views/master/top-nav.php'; ?>
                        <?php // echo base_url('application/views/master/top-nav'); ?>
                        
                        <!-- top nav -->
                        <!--                        <div class="navbar navbar-blue navbar-static-top">  
                                                    <div class="navbar-header">
                                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                                            <span class="sr-only">Toggle</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                        <a href="/" class="navbar-brand logo">bf</a>
                                                    </div>
                                                    <nav class="collapse navbar-collapse" role="navigation">
                                                        <form class="navbar-form navbar-left">
                                                            <div class="input-group input-group-sm" style="max-width:360px;">
                                                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                                                <input type="text" class="form-control" placeholder="Buscar" name="srch-term" id="srch-term">
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <ul class="nav navbar-nav">
                                                            <li>
                                                                <a href="#"><i class="glyphicon glyphicon-home"></i> Inicio</a>
                                                            </li>
                                                            <li>
                                                                <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span class="badge">badge</span></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>-->
                        <!-- /top nav -->

                        <!--<div class="padding">-->
                        <div class="" id="map"></div>

                        <!--</div> /padding -->
                    </div>
                    <!-- /main -->

                </div>
            </div>
        </div>


        <!--post modal-->
        <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        Update Status
                    </div>
                    <div class="modal-body">
                        <form class="form center-block">
                            <div class="form-group">
                                <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!--        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>-->
    </body>
</html>