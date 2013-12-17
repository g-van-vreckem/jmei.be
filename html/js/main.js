var $openedTile; //currently opened tile
var $openedDetail; // currently opened detail view
var $c; //container child of $openedDetail
var detailHeight = 0; // height of the detail view (used to properly clalculate where to scroll when previous detail closes while new detail opens)

jQuery(document).ready(function($) {
	// Google maps init;
	if (typeof(google) != "undefined") {
		if (typeof(google.maps) != "undefined") {
			google.maps.event.addDomListener(window, 'load', initializeMap);
		}
	}
    $('.carousel').carousel({
		interval: 4000,
		pause: "false"
    });
	$('.contact-form').on('submit', function(event) {
		event.preventDefault();
		var $form = $(this);
		var $target = $($form.attr('data-target'));
		 
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			 
			success: function(data, status) {
				$target.html(data);
			}
		});
	 
	});

	// Smooth scroll nav links
	$(".scroll").click(function(event) {
		event.preventDefault();
		var pos = $(this.hash).offset().top;
		var hash = this.hash.substr(1);
		scrollToPosition(pos, hash);
	});
	$(".brand").click(function(event){
		event.preventDefault();
		scrollToPosition(0, '');
	});
	// Handle hash change for section display
	/*
	$.address.strict(false);
	$.address.externalChange(function(event) { 
		$('#' + event.value ).click();
	});
	*/
	// tile click
	$(".tile").click(function(event) {
		if (typeof $openedTile != 'undefined') {
			if ($openedTile.attr("id") == $(this).attr("id")) {
				closeDetail();
				$.address.value('');
				return;
			}
			$openedTile.removeClass("active");
		}
		
		$openedTile = $(this);
		var title = $(".tile-title", this).html();
		var intro = $(".tile-intro", this).html();
		var description = $(".tile-detail>.tile-desc", this).html();
		var $medias = $(".tile-detail>a", this);
		var itemId = $(this).attr("id").substr(1);
		var hascarousel = false;
		var hash;
		if (typeof(event) != undefined) {
			 hash = $openedTile.attr("id");
		}
		switch ($medias.length) {
			case 0:
				//no medias!
				medias = '';
				console.log('no medias defined for ' + itemId);
				break;
			case 1:
				//single media
				medias = mediaHtml( $medias.get(0), itemId );
				break;
			default:
				//carousel
				medias= '';
				medias += 	'						<div id="myCarousel" class="carousel slide">\r\n';
				medias += 	'							<ol class="carousel-indicators">\r\n';
				medias += 	'								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>\r\n';
				for (var i=1;i<$medias.length;i++) {
					medias += 	'								<li data-target="#myCarousel" data-slide-to="' + i + '"></li>\r\n';
				}
				medias += 	'							</ol>\r\n';
				medias += 	'							<!-- Carousel items -->\r\n';
				medias += 	'							<div class="carousel-inner">\r\n';
				active = "active ";
				for (var i=0;i<$medias.length;i++) {
					if (i!=0) active = '';
					medias += 	'								<div class="' + active + 'item">' + mediaHtml($medias.get(i), i) + '</div>\r\n';
				}
				medias += 	'							</div>\r\n';
				medias += 	'							<!-- Carousel nav -->\r\n';
				medias += 	'							<a class="carousel-control left" href="#myCarousel" data-slide="prev"><span data-icon="&#xe002;"></span></a>\r\n';
				medias += 	'							<a class="carousel-control right" href="#myCarousel" data-slide="next"><span data-icon="&#xe003;"></span></a>\r\n';
				medias += 	'						</div>\r\n';
				hascarousel = true;
			
		}
		$openedTile.addClass("active");
		if (typeof $openedDetail  != 'undefined') {
			openedRow = rowId;
			rowId = $(this).parent().attr("id");
			if (rowId != openedRow) {
				//get detail height only if detail is opened higher
				detailHeight = (parseInt(openedRow.substr(1)) > parseInt(rowId.substr(1)))? $openedDetail.height() : 0;
				$openedDetail.slideUp('fast');
				$c.html('');
			} else {
				detailHeight = 0;
			}
		} else {
			rowId = $(this).parent().attr("id");
		}
		$openedDetail = $("."+rowId+".detail");
		$c = $("."+rowId+".detail>.container");
		$c.html('<div class="row"><div class="span6"><div class="detail-desc"><h5>' + title + '</h5><h3>' + intro + '</h3><div class="detail-desc-text">' + description + '</div></div></div><div class="span6">' + medias + '</div></div>');
		$openedDetail.slideDown('fast');
		// hide all other tiles when in fluid mode
		if (Modernizr.mq('(max-width: 767px)')) $(".tile").not(".active").hide();
		scrollToTile($openedTile, hash);
		if (initVideo) prepareVideos(videoIds);
		console.log(hascarousel);
		if (hascarousel) $('#myCarousel').carousel({interval: 2500});
		// return false;
	});

	$(".detail-close").click(function() {
		closeDetail();
		// return false;
	});


});

function closeDetail() {
	$openedTile.removeClass("active");
	$openedDetail.slideUp('fast');
	if (Modernizr.mq('(max-width: 767px)')) $(".tile").show();
	detailHeight = 0;
	$openedDetail = undefined;
	scrollToTile($openedTile);
	$openedTile = undefined;
	$c.html('');
	$c= undefined;
}

// Animated Scrolling -----------------------------------------
function scrollToTile(target, hash) {
	var pos = (typeof $openedDetail != 'undefined')? $(target).offset().top - detailHeight : $(target).offset().top - 110;
	scrollToPosition(pos, hash);
}
function scrollToPosition(position, hash) {
	$('html, body').stop().animate(
		{'scrollTop':position}, 
		400, 
		'swing', 
		function () {
			if (hash!=undefined) {
				$.address.value(hash);
				$.address.tracker(hash);
			}
		}
	);
}

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
	var markerIcon = '/img/googlemap-marker.png';
	var myLatlng = new google.maps.LatLng(50.199701,5.317264);
	var mapOptions = {
		zoom: 15,
		center: myLatlng,
		panControl: false,
		// mapTypeControl: false,
		zoomControl: true,
		scaleControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Here we are!'
  });
}