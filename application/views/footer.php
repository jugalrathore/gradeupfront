<div class="row footer">
<div class="container">
<div class="col-md-4">
<img src="<?=base_url()?>assets/images/footer-logo.png" class="img-responsive">
<p>harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedid quo minus iddolor repellendus</p>
</div>
<div class="col-md-2">
<h3>Quick Links</h3>
<ul>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
</ul>
</div>
<div class="col-md-2">
<h3>Information</h3>
<ul>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
<li><a href="#">harum quidem</a></li>
</ul>

</div>
<div class="col-md-4">
<h3>Contact Info</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5%"><i class="fa fa-phone"></i></td>
    <td>011-27017255</td>
  </tr>
  <tr>
    <td><i class="fa fa-envelope-o"></i></td>
    <td>info@gradeup.com</td>
  </tr>

  <tr>
    <td><i class="fa fa-map-marker"></i></td>
    <td>218A5-6 ,Dummy itampura, <br>
Delhi(Near Pitampura Mertro Station)</td>
  </tr>

</table>

</div>

</div>
<div class="copy-right row">
<div class="container">
<div class="col-md-6">Copyright © 2016 grade up All Rights Reserved <span style="color:#00bff3"> &nbsp;&nbsp;Design by carrottech.com</span></div>
<div class="col-md-6 text-right social-icon">
<ul class="list-inline">
<li>Connect with us</li>
<li><span class="fa fa-facebook"></span></li>
<li><span class="fa fa-twitter"></span></li>
<li><span class="fa fa-youtube-play"></span></li>
<li><span class="fa fa-google-plus"></span></li>
</ul>
</div>
</div>



</div>
</div>











<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.11.2.min.js"></script> 
<script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyUFXBn3phoV7WIifrYAG_pPX3_knpY1U"></script> 
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
               
                var mapOptions = {
                    zoom:8,
                    center: new google.maps.LatLng(28.703418, 77.132070), // yourmap co ordinate

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
					
					
					
					
                    styles: 
[
    {
        "featureType": "administrative.land_parcel",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#f49935"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#fad959"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#a1cdfc"
            },
            {
                "saturation": 30
            },
            {
                "lightness": 49
            }
        ]
    }
]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');
var icon = { 
    url: 'images/map-marker.png'
};

/*var marker = new google.maps.Marker({
    position: current,
    map: map,
    icon: icon
});
*/                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(28.703418, 77.132070),
                    map: map,
                    title: 'Snazzy!',
					 icon: icon
                });
            }
        </script>
        
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
               
                var mapOptions = {
                    zoom:8,
                    center: new google.maps.LatLng(28.703418, 77.132070), // yourmap co ordinate

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
					
					
					
					
                    styles: 
[
    {
        "featureType": "administrative.land_parcel",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#f49935"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#fad959"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#a1cdfc"
            },
            {
                "saturation": 30
            },
            {
                "lightness": 49
            }
        ]
    }
]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map1');
var icon = { 
    url: 'images/map-marker.png'
};

/*var marker = new google.maps.Marker({
    position: current,
    map: map,
    icon: icon
});
*/                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(28.703418, 77.132070),
                    map: map,
                    title: 'Snazzy!',
					 icon: icon
                });
            }
        </script>
</body>
</html>
