<html>
    <head>
        <link rel='stylesheet' href='https://codepen.io/abdullahturkmen/pen/ZEypWjK.css'><link rel="stylesheet" href="./dist/style.css">

        <style>
        table  { 
            border-collapse: collapse;
         } 

        td  { 
            width:150px;
            text-align:center;
            border:0px ;
            padding:5px

         } 
        .geeks  { 
            border-right:hidden;
         } 
        .gfg  { 
            border-collapse:separate;
            border-spacing:0 10px;
         } 
        h1  { 
            color:green;
         } 
         html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
  font-family: "Trebuchet MS";
  position: relative;

}

#mapCanvas {
  margin: 0 auto;
  width: 90%; 
  height: 200px; 
  position: relative;
}


.or {
  clear: both;
  padding:10px; 
  text-align: center; 
  color: #000; 
  font-size: 13px;
  font-weight: bold;
}

    </style>
    </head>
    <body onload="getLocation();"><center>
       
                     

  <div id="directionsPanel" 
  style="border-radius:10px;text-align: center; background-color: #1b1c13; padding: 5px; margin: 15px; width: 90%;opacity: 0.9;color:white;">
  <h2 style="margin:10px">Добави любимите си адреси</h2>
   <div class="directionInputs">
    <form action="favorite_places.php" method="post">
     <p><input onClick="this.select();" type="text" value="" id="dirSource" name="street" style="border-radius:20px;height:40px" /></p>
    
  <div style="display:none">  <div class="btns">
       <a href="#getDirections" id="getDirections">Hesapla</a>
     <a href="#reset" id="paneReset">Yenile</a>
      
     </div>
      
      <hr>
       <a onclick="getLocation()" id="getDirections" style="background: red">Get Location with button</a>
     
     
      <div class="address"></div>
  <textarea class="lat" name="lat"></textarea>
  <textarea class="lng" name="lng"></textarea>
  <textarea class="msg" name="distance"></textarea>
  </div>
     <div class="btns">
      
                          
     </div>
      
     <input type="submit" name="add_place" value="Добави към любими" id="getDirections" style="height:50px;backgroun-color:#fcc603;border:none;border-radius:20px; width:90%">
       
   </form>	
 <div id="mapCanvas">&#160;</div>
 </div>
 <div id="directionSteps">
  <p class="msg"></p>
</div>
{foreach from=$fav_pl item=f}
<p style="padding:10px;margin:10px;border:#a3a3a3;border-style: solid;border-radius:10px;text-align:left">{$f.street|truncate:20:"..."} <a href="./favorite_places.php?delete={$f.fav_place_id}" stle="text-decoration:none"><img src="../images/delete.png" width="25px" align="right" height="25px"></a></p>
{/foreach}
</div>
                     
                     
                  
 <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDmR2jKUoDdMY_giAYCkDGi_dkW-WYaBTs&amp;v=3.exp&amp;sensor=true&amp;libraries=places&language=bg&region=BG'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
<script src='https://codepen.io/abdullahturkmen/pen/ZEypWjK.js'></script>
<script>
jQuery(function() { 
   jQuery('#useGPS').click();
 } );
</script>

<script>
let lat = 41.07;
let lng = 29.03;

document.addEventListener("load", getLocation());

function getLocation()  { 
  if (navigator.geolocation)  { 
    navigator.geolocation.getCurrentPosition(showPosition);
  
   }  else  { 
    alert("Geolocation is not supported by this browser.");
   } 
 } 
function showPosition(position)  { 
   lat = position.coords.latitude;
   lng = position.coords.longitude;
  document.querySelector('.lat').innerText = "Lat: " + lat;
  document.querySelector('.lng').innerText = "Lng: " + lng;
  setMap(lat,lng);
  getReverseGeocodingData(lat,lng);
  //map.setCenter(new google.maps.LatLng(lat, lng));
 } 




function getReverseGeocodingData(lat, lng)  { 
    var latlng = new google.maps.LatLng(lat, lng);
    // This is making the Geocode request
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( {  'latLng': latlng  } ,  (results, status) => { 
        if (status !== google.maps.GeocoderStatus.OK)  { 
            alert("Открихме местоположението Ви!");
         } 
        // This is checking to see if the Geoeode Status is OK before proceeding
        if (status == google.maps.GeocoderStatus.OK)  { 
            console.log(results);
            let address = (results[0].formatted_address);
            document.querySelector('.address').innerText = "Address: " + address;
            var inputF = document.getElementById("dirSource");
            inputF.value = address;
            el_down.innerHTML = 
                   "Value = " + "'" + inputF.value + "'";
         } 
     } );
 }   


function setMap()  { 
  const myLatLng =  {  lat: lat, lng: lng  } ;
  const map = new google.maps.Map(document.getElementById("mapCanvas"),  { 
    zoom: 14,
    center: myLatLng,
    streetViewControl: false,
    scrollwheel: false,
   } );


  const contentString =
    'Ето те!';
const infowindow = new google.maps.InfoWindow( { 
    content: contentString,
   } );


 const marker =  new google.maps.Marker( { 
    position: myLatLng,
    map,
    title: "Hello World!",
    
    optimized: true 
   } );
  
   marker.addListener("click", () =>  { 
    infowindow.open( { 
      anchor: marker,
      map,
      shouldFocus: false,
     } );
   } );

 } 




(function(mapDemo, $, undefined)  {
   
 	mapDemo.Directions = (function()  { 
 		function _Directions()  { 
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
				$Selectors =  { 
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
				 } ,
				
			
				
				autoCompleteSetup = function()  {
		
					autoSrc = new google.maps.places.Autocomplete($Selectors.dirSrc[0]);
					autoDest = new google.maps.places.Autocomplete($Selectors.dirDst[0]);
				 } , // autoCompleteSetup Ends

				directionsSetup = function()  { 
					directionsService = new google.maps.DirectionsService();
					directionsDisplay = new google.maps.DirectionsRenderer( { 
						suppressMarkers: true
					 } );	
					
					directionsDisplay.setPanel($Selectors.dirSteps[0]);											
				 } , // direstionsSetup Ends
				
				trafficSetup = function()  { 					
					// Creating a Custom Control and appending it to the map
					var controlDiv = document.createElement('div'), 
					controlUI = document.createElement('div'), 
					trafficLayer = new google.maps.TrafficLayer();

					jQuery(controlDiv).addClass('gmap-control-container').addClass('gmnoprint');
					jQuery(controlUI).text('Traffic').addClass('gmap-control');
					jQuery(controlDiv).append(controlUI);				

					// Traffic Btn Click Event	  
					google.maps.event.addDomListener(controlUI, 'click', function()  { 
						if (typeof trafficLayer.getMap() == 'undefined' || trafficLayer.getMap() === null)  { 
							jQuery(controlUI).addClass('gmap-control-active');
							trafficLayer.setMap(map);
						 }  else  { 
							trafficLayer.setMap(null);
							jQuery(controlUI).removeClass('gmap-control-active');
						 } 
					 } );							  
					//map.controls[google.maps.ControlPosition.TOP_RIGHT].push(controlDiv);								
				 } , // trafficSetup Ends
				
				mapSetup = function()  { 
					map = new google.maps.Map($Selectors.mapCanvas,  { 
						zoom: 28,
						center: new google.maps.LatLng(lat, lng),	
						styles: [
						 { elementType: 'geometry', stylers: [ { color: '#242f3e' } ] } ,
						 { elementType: 'labels.text.stroke', stylers: [ { color: '#242f3e' } ] } ,
						 { elementType: 'labels.text.fill', stylers: [ { color: '#746855' } ] } ,
						 { 
							featureType: 'administrative.locality',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#d59563' } ]
						 } ,
						 { 
							featureType: 'poi',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#d59563' } ]
						 } ,
						 { 
							featureType: 'poi.park',
							elementType: 'geometry',
							stylers: [ { color: '#263c3f' } ]
						 } ,
						 { 
							featureType: 'poi.park',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#6b9a76' } ]
						 } ,
						 { 
							featureType: 'road',
							elementType: 'geometry',
							stylers: [ { color: '#38414e' } ]
						 } ,
						 { 
							featureType: 'road',
							elementType: 'geometry.stroke',
							stylers: [ { color: '#212a37' } ]
						 } ,
						 { 
							featureType: 'road',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#9ca5b3' } ]
						 } ,
						 { 
							featureType: 'road.highway',
							elementType: 'geometry',
							stylers: [ { color: '#746855' } ]
						 } ,
						 { 
							featureType: 'road.highway',
							elementType: 'geometry.stroke',
							stylers: [ { color: '#1f2835' } ]
						 } ,
						 { 
							featureType: 'road.highway',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#f3d19c' } ]
						 } ,
						 { 
							featureType: 'transit',
							elementType: 'geometry',
							stylers: [ { color: '#2f3948' } ]
						 } ,
						 { 
							featureType: 'transit.station',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#d59563' } ]
						 } ,
						 { 
							featureType: 'water',
							elementType: 'geometry',
							stylers: [ { color: '#17263c' } ]
						 } ,
						 { 
							featureType: 'water',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#515c6d' } ]
						 } ,
						 { 
							featureType: 'water',
							elementType: 'labels.text.stroke',
							stylers: [ { color: '#17263c' } ]
						 } 
						],
						mapTypeControl: false,
						mapTypeControlOptions:  { 
							style: google.maps.MapTypeControlStyle.DEFAULT,
							position: google.maps.ControlPosition.TOP_RIGHT
						 } ,

						panControl: false,
						panControlOptions:  { 
							position: google.maps.ControlPosition.RIGHT_TOP
						 } ,

						zoomControl: true,
						zoomControlOptions:  { 
							style: google.maps.ZoomControlStyle.LARGE,
							position: google.maps.ControlPosition.RIGHT_TOP
						 } ,

						scaleControl: true,
						streetViewControl: true, 
						overviewMapControl: true,

						mapTypeId: google.maps.MapTypeId.ROADMAP
					 } );
					
					autoCompleteSetup();
					directionsSetup();
					trafficSetup();
				 } , // mapSetup Ends 
				
				directionsRender = function(source, destination)  { 
					$Selectors.dirSteps.find('.msg').hide();
					directionsDisplay.setMap(map);
					
					var request =  { 
						origin: source,
						destination: destination,
						provideRouteAlternatives: false, 
						travelMode: google.maps.DirectionsTravelMode.DRIVING
					 } ;		
					
					directionsService.route(request, function(response, status)  { 
						if (status == google.maps.DirectionsStatus.OK)  { 
							var distance= 0;
							var _route = response.routes[0].legs[0]; 
							directionsDisplay.setDirections(response);
							pinA = new google.maps.Marker( { position: _route.start_location, map: map, icon: markerA } ), 
							pinB = new google.maps.Marker( { position: _route.end_location, map: map, icon: markerB } );	
							
							for(i = 0; i < response.routes[0].legs.length; i++) { 
							distance += parseFloat(response.routes[0].legs[i].distance.value);// Km nin toplam value değerini alıyorum.
							
						 } 




							var directionSteps = document.getElementById('directionSteps'); // Html deki direction step bölümünü çekip html olarak ekleme yapıyorum.




							var kilometre= Math.round(((distance/ 1000).toFixed(1)*1));
                            
							if (1==1)  { 
       directionSteps.innerHTML +=('<input type="hidden" value="'+distance+'" name="distance" >');// Sonra 1 le çarpıp 11 ekleyip gösteriyorum.	

    }

 } 
 } );
				 } , // directionsRender Ends
				
				fetchAddress = function(p)  { 
					var Position = new google.maps.LatLng(p.coords.latitude, p.coords.longitude),  
					Locater = new google.maps.Geocoder();
					
					Locater.geocode( { 'latLng': Position } , function (results, status)  { 
						if (status == google.maps.GeocoderStatus.OK)  { 
							var _r = results[0];
							$Selectors.dirSrc.val(_r.formatted_address);
						 } 
					 } );
				 } , // fetchAddress Ends
				
				invokeEvents = function()  { 
					// Get Directions
					$Selectors.getDirBtn.on('click', function(e)  { 
						if (document.getElementById('pars') !=null)  {  // Get direction da ücret id sini kontrol
						// ediyorum eğer ücret id'si olan pars varsa temizleme yapıyorum yoksa gösteriyorum.
						$Selectors.dirSteps.html('');
						$Selectors.dirSrc.val('');
						$Selectors.dirDst.val('');
						if(pinA) pinA.setMap(null);
						if(pinB) pinB.setMap(null);		
						
						directionsDisplay.setMap(null);
					 } 
					if (document.getElementById('pars') ==null)  { 
						e.preventDefault();	
						var src = $Selectors.dirSrc.val(), 
						dst = $Selectors.dirDst.val();
						
						directionsRender(src, dst);
					 } 

				 } );
					
					// Reset Btn
					$Selectors.paneResetBtn.on('click', function(e)  { 
						$Selectors.dirSteps.html('');
						$Selectors.dirSrc.val('');
						$Selectors.dirDst.val('');
						
						if(pinA) pinA.setMap(null);
						if(pinB) pinB.setMap(null);		
						
						directionsDisplay.setMap(null);					
					 } );
					
					// Toggle Btn
					$Selectors.paneToggle.toggle(function(e)  { 
						$Selectors.dirPanel.animate( { 'left': '-=05px' } );
						jQuery(this).html('&gt;');
					 } , function()  { 
						$Selectors.dirPanel.animate( { 'left': '+=05px' } );
						jQuery(this).html('&lt;');
					 } );
					
					// Use My Location / Geo Location Btn
					$Selectors.useGPSBtn.on('click', function(e)  { 		
						if (navigator.geolocation)  { 
							navigator.geolocation.getCurrentPosition(function(position)  { 
								fetchAddress(position);
							 } );	
						 } 
					 } );
				 } , //invokeEvents Ends 
				
				_init = function()  { 
					mapSetup();
					invokeEvents();
				 } ; // _init Ends
				
				this.init = function()  { 
					_init();
				return this; // Refers to: mapDemo.Directions
			 } 
			return this.init(); // Refers to: mapDemo.Directions.init()
		 }  // _Directions Ends
		return new _Directions(); // Creating a new object of _Directions rather than a funtion
	 } ()); // mapDemo.Directions Ends
 } )(window.mapDemo = window.mapDemo ||  {  } , jQuery);
</script>
<script>
    jQuery(document).ready(function() {
  if ($('.cd-stretchy-nav').length > 0) {
    var stretchyNavs = $('.cd-stretchy-nav');

    stretchyNavs.each(function() {
      var stretchyNav = $(this),
        stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');

      stretchyNavTrigger.on('click', function(event) {
        event.preventDefault();
        stretchyNav.toggleClass('nav-is-visible');
      });
    });

    $(document).on('click', function(event) {
      (!$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span')) && stretchyNavs.removeClass('nav-is-visible');
    });
  }
});
</script>

  
  </body>
</html>