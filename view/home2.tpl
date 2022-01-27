
<!DOCTYPE html>
<html>
<head>
	
	<title>AlmusTaxi</title>
<link
  rel="stylesheet"
  href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"
/>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #04AA6D;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
</style>
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


	
</head>
<body
{if $act_status ==1}
   {if strlen($location)<2}
     onload="
     
      getLocation(); setTimeout(function() { document.frm1.submit() },2000)
   
    
     "
    {else}
     onload="
      getLocation(); setTimeout(function() { document.frm1.submit() } , 25000)
   
     "
    {/if}
    {/if}
    >

{if $act_status ==0}
{if isset($act_wrong)}
<p style="background-color:red;color:white;font-size:16;padding:5px;margin:20px">{$act_wrong}</p>{/if}
<p style="background-color:#3971d4;color:white;padding:5px;margin:20px;font-size:17;border-radius:10px">За да използвате нашите услуги е необходимо да потвърдите телефона си.</p>
<p style="background-color:#3971d4;color:white;padding:5px;margin:20px;font-size:17;border-radius:10px">Всеки момент ще получите SMS с код на посочения номер. Моля въведете го.</p><center>
<form action="./home.php" method="post">
    <input style="border-radius:16px; height:45px;width:90%" type="tel" placeholder="Въведете SMS код" name="code_sms">
   <br> <input type="submit" name="send" value="Активирай" style="border-radius:16px; height:45px;font-size:18px;margin:10px;width:90%">
</form></center>

{else}

<div id="map" class='dark' style="height: 90vh;
        width: 100vw;
        position:fixed;
        top:0;
        left:0;">
     
        </div></div>
<script> 
$(document).ready(function(){
setInterval(function(){
      $("#map").load(window.location.href + "map" );
}, 3000);
});
</script>

<div class="navbar">
    {if !is_array($fav_pl)}
    <p><a href="./favorite_places.php" style="text-decoration:none" ><img src="./output-onlinegiftools.gif" align="left" width="80px" height="80px">Натисни и добави бутони с любими адреси за да поръчваш такси бързо и лесно!</a></p><br>
    {else}
    <center>
        {foreach from=$fav_pl item=$place}
    <a href="./get_taxi.php?street={$place.street}&number=0&post_code=0" style="text-decoration:none;background-color:#4287f5;padding:15px;margin:10px;color:white;font-size:15px;right:120px;border-radius:46px;margin-top:5px">📍{$place.street|truncate:15}</a>
    {/foreach}
    <a href="./favorite_places.php" style="text-decoration:none;background-color:#4287f5;padding:15px;margin:10px;color:white;font-size:15px;right:120px;border-radius:46px;margin-top:5px">📍+</a>
    </center>
    {/if}
<form action="./get_taxi.php" method="get">
    <center>
        <input onclick="var stop_loading=1;" name="street" style="margin-bottom:20px;margin-top:20px;height:36px;border-radius:10px;width:250px" type="text" placeholder="Напиши Адрес" required>
        <input type="submit" name="call_taxi" value="📍 Поръчай" style="margin-bottom:5px;margin-top:-5px;height:40px;border-radius:10px">
        </center>
</form>
</div>
        
{literal}
<script>
    var person = L.icon({
    iconUrl: 'https://www.freeiconspng.com/uploads/person-icon-blue-15.png',

    iconSize:     [50, 50], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

  var driver = L.icon({
    iconUrl: 'https://icons.iconarchive.com/icons/icons-land/transporter/256/Taxi-Top-Yellow-icon.png',

    iconSize:     [50, 50], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
	var map = L.map('map').setView([{/literal}{if strlen($lat)>3}{$lat},{$lon}{else}43.8227528,23.2461374{/if}{literal}], 23);
var marker = L.marker([{/literal}{if strlen($lat)>3}{$lat},{$lon}{else}43.8227528,23.2461374{/if}{literal}], {icon: person}).addTo(map);
marker.bindPopup("{/literal}{if strlen($location)<3}<a href=\"\" style=\"margin:-20px;color:white;font-size:17px;background-color:#1ec94c;display:block;padding:40px;text-decoration:none\"><img src=\"../images/HopeWell.gif\" width=\"120px\" height=\"120px\" align=\"left\">Търсим вашата локация. Включете <b>GPS</b></a>{else}{literal}<a style=\"text-decoration:none;color:white;background-color:#1f78ff;padding:10px;margin:-20px; display:inline-block;border-radius:5px;font-size:19px\" href=\"./get_taxi.php?street={/literal}{$location}{literal}&number=0&post_code=0\"><img src=\"https://thumbs.gfycat.com/InexperiencedGlossyAsiaticgreaterfreshwaterclam-max-1mb.gif\" width=\"80px\" heigh=\"80px\" align=\"left\">{/literal}{$location}{literal}</a>{/literal}{/if}{literal}").openPopup();

{/literal}
{foreach from=$drivers item=$driver}

{if strlen($driver.lat)>3 AND $driver.ava==1}
{literal}
var marker = L.marker([{/literal}{if strlen($driver.lat)>3}{$driver.lat},{$driver.lon}{else}43.8227528,23.2461374{/if}{literal}], {icon: driver}).addTo(map);
{/literal}
{/if}

{/foreach}
{literal}


	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: '',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);
	const search = new GeoSearch.GeoSearchControl({
  provider: new GeoSearch.OpenStreetMapProvider(),
});
map.addControl(search);
</script>


<script id="search.html" type="text/ng-template">
    <ion-view view-title="Search">
        <ion-content>
            <h1>Search</h1>
        </ion-content>
    </ion-view>
</script>
   <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDTImGxdxEmf7D513G6Vf9S9p7uApvgf8&callback=initMap">
    </script>
    

<p id="demo"></p>

<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "<form id=\"myform\" name=\"frm1\" action=\"./home.php\" method=\"get\"><input type=\"hidden\" name=\"lat\" value=\" " + position.coords.latitude +
  "\"><input type=\"hidden\"  name=\"lon\" value=\" " + position.coords.longitude + "\"><input  type=\"hidden\" value=\"GO\"></form>";
  
}



  document.getElementById('myField').value = showPosition(position);
document.getElementById('myField2').value = showPosition(position);

  
   
</script>
{/literal}
{/if}



<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>
</body>
</html>
