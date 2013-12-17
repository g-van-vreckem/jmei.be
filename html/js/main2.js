// Ready --------------------------------------------------------------------

jQuery(document).ready(function($) {
	google.maps.event.addDomListener(window, 'load', initializeMap);
};


// Google Map -------------------------------------------------

function initializeMap() {
	var mapStyles = [
		{"featureType": "landscape",
			"stylers": [
				{"hue": "#FFA800"},
				{"saturation": -100},
				{"lightness": 0}
			]
		},
		{"featureType": "road.highway",
			"stylers": [
				{"hue": "#FF5C00"},
				{"saturation": 100},
				{"lightness": -24}
			]
		},
		{"featureType": "road.arterial",
			"stylers": [
				{"hue": "#FF6600"},
				{"saturation": 10},
				{"lightness": -12}
			]
		},
		{"featureType": "road.local",
			"stylers": [
				{"hue": "#FF6C00"},
				{"saturation": 50},
				{"lightness": -15}
			]
		},
		{"featureType": "water",
			"stylers": [
				{"hue": "#00B5FF"},
				{"saturation": 60},
				{"lightness": 0}
			]
		},
		{"featureType": "poi",
			"stylers": [
				{"hue": "#9FFF00"},
				{"saturation": -100},
				{"lightness": -15}
			]
		}
	];
	var markerIcon = 'img/googlemap-marker.png';
	var myLatlng = new google.maps.LatLng(50.199664,5.317268);
	var mapOptions = {
		zoom: 14,
		center: myLatlng,
		panControl: false,
		// mapTypeControl: false,
		zoomControl: false,
		scaleControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: mapStyles
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      //icon: markerIcon,
      title: 'Here we are!'
  });
}