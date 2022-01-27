(function(mapDemo, $, undefined) {
 	mapDemo.Directions = (function() {
 		function _Directions() {
 			var map,   
 			directionsService, directionsDisplay, 
 			autoSrc, autoDest, pinA, pinB, 

 			markerA = new google.maps.MarkerImage('https://icons.iconarchive.com/icons/icons-land/vista-map-markers/32/Map-Marker-Marker-Outside-Chartreuse-icon.png',
 				new google.maps.Size(24, 27),
 				new google.maps.Point(0, 0),
 				new google.maps.Point(12, 27)),		
 			markerB = new google.maps.MarkerImage('https://icons.iconarchive.com/icons/icons-land/vista-map-markers/32/Map-Marker-Marker-Outside-Pink-icon.png',
 				new google.maps.Size(24, 28),
 				new google.maps.Point(0, 0),
 				new google.maps.Point(12, 28)), 

				// Caching the Selectors		
				$Selectors = {
					mapCanvas: jQuery('#mapCanvas')[0], 
					dirPanel: jQuery('#directionsPanel'),
					dirInputs: jQuery('.directionInputs'),
					dirSrc: jQuery('#dirSource'),
					dirDst: jQuery('#dirDestination'),
					getDirBtn: jQuery('#getDirections'),
					dirSteps: jQuery('#directionSteps'), 
					paneToggle: jQuery('#paneToggle'), 
					useGPSBtn: jQuery('#useGPS'), 
					paneResetBtn: jQuery('#paneReset')
				},
				
				autoCompleteSetup = function() {
					autoSrc = new google.maps.places.Autocomplete($Selectors.dirSrc[0]);
					autoDest = new google.maps.places.Autocomplete($Selectors.dirDst[0]);
				}, // autoCompleteSetup Ends

				directionsSetup = function() {
					directionsService = new google.maps.DirectionsService();
					directionsDisplay = new google.maps.DirectionsRenderer({
						suppressMarkers: true
					});	
					
					directionsDisplay.setPanel($Selectors.dirSteps[0]);											
				}, // direstionsSetup Ends
				
				trafficSetup = function() {					
					// Creating a Custom Control and appending it to the map
					var controlDiv = document.createElement('div'), 
					controlUI = document.createElement('div'), 
					trafficLayer = new google.maps.TrafficLayer();

					jQuery(controlDiv).addClass('gmap-control-container').addClass('gmnoprint');
					jQuery(controlUI).text('Traffic').addClass('gmap-control');
					jQuery(controlDiv).append(controlUI);				

					// Traffic Btn Click Event	  
					google.maps.event.addDomListener(controlUI, 'click', function() {
						if (typeof trafficLayer.getMap() == 'undefined' || trafficLayer.getMap() === null) {
							jQuery(controlUI).addClass('gmap-control-active');
							trafficLayer.setMap(map);
						} else {
							trafficLayer.setMap(null);
							jQuery(controlUI).removeClass('gmap-control-active');
						}
					});							  
					map.controls[google.maps.ControlPosition.TOP_RIGHT].push(controlDiv);								
				}, // trafficSetup Ends
				
				mapSetup = function() {					
					map = new google.maps.Map($Selectors.mapCanvas, {
						zoom: 11,
						center: new google.maps.LatLng(41.07, 29.03),	
						styles: [
						{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
						{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
						{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
						{
							featureType: 'administrative.locality',
							elementType: 'labels.text.fill',
							stylers: [{color: '#d59563'}]
						},
						{
							featureType: 'poi',
							elementType: 'labels.text.fill',
							stylers: [{color: '#d59563'}]
						},
						{
							featureType: 'poi.park',
							elementType: 'geometry',
							stylers: [{color: '#263c3f'}]
						},
						{
							featureType: 'poi.park',
							elementType: 'labels.text.fill',
							stylers: [{color: '#6b9a76'}]
						},
						{
							featureType: 'road',
							elementType: 'geometry',
							stylers: [{color: '#38414e'}]
						},
						{
							featureType: 'road',
							elementType: 'geometry.stroke',
							stylers: [{color: '#212a37'}]
						},
						{
							featureType: 'road',
							elementType: 'labels.text.fill',
							stylers: [{color: '#9ca5b3'}]
						},
						{
							featureType: 'road.highway',
							elementType: 'geometry',
							stylers: [{color: '#746855'}]
						},
						{
							featureType: 'road.highway',
							elementType: 'geometry.stroke',
							stylers: [{color: '#1f2835'}]
						},
						{
							featureType: 'road.highway',
							elementType: 'labels.text.fill',
							stylers: [{color: '#f3d19c'}]
						},
						{
							featureType: 'transit',
							elementType: 'geometry',
							stylers: [{color: '#2f3948'}]
						},
						{
							featureType: 'transit.station',
							elementType: 'labels.text.fill',
							stylers: [{color: '#d59563'}]
						},
						{
							featureType: 'water',
							elementType: 'geometry',
							stylers: [{color: '#17263c'}]
						},
						{
							featureType: 'water',
							elementType: 'labels.text.fill',
							stylers: [{color: '#515c6d'}]
						},
						{
							featureType: 'water',
							elementType: 'labels.text.stroke',
							stylers: [{color: '#17263c'}]
						}
						],
						mapTypeControl: true,
						mapTypeControlOptions: {
							style: google.maps.MapTypeControlStyle.DEFAULT,
							position: google.maps.ControlPosition.TOP_RIGHT
						},

						panControl: true,
						panControlOptions: {
							position: google.maps.ControlPosition.RIGHT_TOP
						},

						zoomControl: true,
						zoomControlOptions: {
							style: google.maps.ZoomControlStyle.LARGE,
							position: google.maps.ControlPosition.RIGHT_TOP
						},

						scaleControl: true,
						streetViewControl: true, 
						overviewMapControl: true,

						mapTypeId: google.maps.MapTypeId.ROADMAP
					});
					
					autoCompleteSetup();
					directionsSetup();
					trafficSetup();
				}, // mapSetup Ends 
				
				directionsRender = function(source, destination) {
					$Selectors.dirSteps.find('.msg').hide();
					directionsDisplay.setMap(map);
					
					var request = {
						origin: source,
						destination: destination,
						provideRouteAlternatives: false, 
						travelMode: google.maps.DirectionsTravelMode.DRIVING
					};		
					
					directionsService.route(request, function(response, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							var distance= 0;
							var _route = response.routes[0].legs[0]; 
							directionsDisplay.setDirections(response);
							pinA = new google.maps.Marker({position: _route.start_location, map: map, icon: markerA}), 
							pinB = new google.maps.Marker({position: _route.end_location, map: map, icon: markerB});	
							
							for(i = 0; i < response.routes[0].legs.length; i++){
							distance += parseFloat(response.routes[0].legs[i].distance.value);// Km nin toplam value değerini alıyorum.
							
						}




							var directionSteps = document.getElementById('directionSteps'); // Html deki direction step bölümünü çekip html olarak ekleme yapıyorum.




							var kilometre= Math.round(((distance/ 1000).toFixed(1)*1));

							if (kilometre <19) {
       directionSteps.innerHTML +=('<div id="pars"> <table width="100%"><tr><td><b>Araç</b></td><td><b>Fiyat</b></td></tr><tr><td>Motorlu Kurye</td><td></div>'+ Math.round(((distance/ 1000).toFixed(1)*1+11))+ ' TL</td></tr><tr><td>Arabalı Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+33))+ ' TL</td></tr><tr><td>VIP Express Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+33))+ ' TL</td></tr><tr><td>Gece Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+33))+ ' TL</td></tr></table><br>');// Sonra 1 le çarpıp 11 ekleyip gösteriyorum.	

   } else if (kilometre >20 && kilometre <40) {
        directionSteps.innerHTML +=('<div id="pars"> <table width="100%"><tr><td><b>Araç</b></td><td><b>Fiyat</b></td></tr><tr><td>Motorlu Kurye</td><td></div>'+ Math.round(((distance/ 1000).toFixed(1)*1+13))+ ' TL</td></tr><tr><td>Arabalı Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+36))+ ' TL</td></tr><tr><td>VIP Express Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+36))+ ' TL</td></tr><tr><td>Gece Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+36))+ ' TL</td></tr></table><br>');// Sonra 1 le çarpıp 11 ekleyip gösteriyorum.	

    }
    else { directionSteps.innerHTML +=('<div id="pars"> <table width="100%"><tr><td><b>Araç</b></td><td><b>Fiyat</b></td></tr><tr><td>Motorlu Kurye</td><td></div>'+ Math.round(((distance/ 1000).toFixed(1)*1+19))+ ' TL</td></tr><tr><td>Arabalı Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+41))+ ' TL</td></tr><tr><td>VIP Express Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+41))+ ' TL</td></tr><tr><td>Gece Kurye</td><td>'+ Math.round(((distance/ 1000).toFixed(1)*1+41))+ ' TL</td></tr></table><br>');// Sonra 1 le çarpıp 11 ekleyip gösteriyorum.	
}

}
});
				}, // directionsRender Ends
				
				fetchAddress = function(p) {
					var Position = new google.maps.LatLng(p.coords.latitude, p.coords.longitude),  
					Locater = new google.maps.Geocoder();
					
					Locater.geocode({'latLng': Position}, function (results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							var _r = results[0];
							$Selectors.dirSrc.val(_r.formatted_address);
						}
					});
				}, // fetchAddress Ends
				
				invokeEvents = function() {
					// Get Directions
					$Selectors.getDirBtn.on('click', function(e) {
						if (document.getElementById('pars') !=null) { // Get direction da ücret id sini kontrol
						// ediyorum eğer ücret id'si olan pars varsa temizleme yapıyorum yoksa gösteriyorum.
						$Selectors.dirSteps.html('');
						$Selectors.dirSrc.val('');
						$Selectors.dirDst.val('');
						if(pinA) pinA.setMap(null);
						if(pinB) pinB.setMap(null);		
						
						directionsDisplay.setMap(null);
					}
					if (document.getElementById('pars') ==null) {
						e.preventDefault();	
						var src = $Selectors.dirSrc.val(), 
						dst = $Selectors.dirDst.val();
						
						directionsRender(src, dst);
					}

				});
					
					// Reset Btn
					$Selectors.paneResetBtn.on('click', function(e) {
						$Selectors.dirSteps.html('');
						$Selectors.dirSrc.val('');
						$Selectors.dirDst.val('');
						
						if(pinA) pinA.setMap(null);
						if(pinB) pinB.setMap(null);		
						
						directionsDisplay.setMap(null);					
					});
					
					// Toggle Btn
					$Selectors.paneToggle.toggle(function(e) {
						$Selectors.dirPanel.animate({'left': '-=305px'});
						jQuery(this).html('&gt;');
					}, function() {
						$Selectors.dirPanel.animate({'left': '+=305px'});
						jQuery(this).html('&lt;');
					});
					
					// Use My Location / Geo Location Btn
					$Selectors.useGPSBtn.on('click', function(e) {		
						if (navigator.geolocation) {
							navigator.geolocation.getCurrentPosition(function(position) {
								fetchAddress(position);
							});	
						}
					});
				}, //invokeEvents Ends 
				
				_init = function() {
					mapSetup();
					invokeEvents();
				}; // _init Ends
				
				this.init = function() {
					_init();
				return this; // Refers to: mapDemo.Directions
			}
			return this.init(); // Refers to: mapDemo.Directions.init()
		} // _Directions Ends
		return new _Directions(); // Creating a new object of _Directions rather than a funtion
	}()); // mapDemo.Directions Ends
})(window.mapDemo = window.mapDemo || {}, jQuery);