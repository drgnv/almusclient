
<!DOCTYPE html>
<html>
<head>
	
	<title>AlmusTaxi</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
        <style>
        .map {
            position: absolute;
            width: 100%;
            height: 60%;
        }
    </style>
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



	
</head>
    <body onload="getLocation(); setTimeout(function() { document.frm1.submit() } , 3000)">
    <ion-nav-view></ion-nav-view>

    
    
{if $os.status == 1}
 <div style="background-color: #474747;color:white;padding: 5px;border-radius:10px;text-align: center;margin: 5px;font-size:17px">
                    <p><b>Очакваш такси на адрес:</b></p>
                    {$address}<p style="margin: 5px;">

                  
                  </div>
   {/if}
                    <div
                            {if $os.status == 1}
                                style="background-color: #98cbfb;padding: 5px;text-align: center; margin: 5px;font-size:17"
                            {else}
                                style="background-color:#3db8ff;padding: 5px;text-align: center; margin: 5px; font-size:17;border-radius:5px"
                            {/if}
                            >
                        <p><b>
                                {if $os.status == 1}
                                    Търсим шофьор за теб! Моля, изчакай секунда... 
                                    {if $drivers_count>0}
                                   
                                    <p>Имаме {$drivers_count} шофьора на линия. </p>
                                 
                                    
                                    {else}
                                    <p>В момента нямаме шофьори на линия. Възможно е забавяне на таксито повече от обичайното</p>
                                    {/if}
                                 <p><img src="https://cdn.dribbble.com/users/3632750/screenshots/6798569/isometric_smartphone_gps.gif" style="width:200px;heigh:200px"></p>
                                {/if}
                                
                                  {if $os.status == 3}
                                    
                                {/if}
                                 {if $os.status == 4}
                                    Отказана
                                {/if}
                            </b></p>

                        {if !is_array($os.driver_info)}
                            {if isset($ref)}
                                <a href="./home.php"  target="_PARENT"
                                style="color:black;background-color: greenyellow;padding: 5px; text-decoration: none; font-size:17px">
                                    Вие отазахте поръчката</a>
                                {else}
<p><br>
    <a href="./viewframe.php?order_id={$order.0.order_id}&refuse={$order.0.order_id}" 
    style="background-color: red; text-decoration: none; padding: 5px; color:white;border-radius:10px;opacity:0.8;">Откажи поръчката</a></p>
                             
                             <div>
                             
                             
                             {if $os.status == 1}
                             
                             
                             
                             {/if}
                             
                             </div>
                             
                             
                               
                                {/if}

                            {else}
                            <audio autoplay>
                                <source src="../images/n.mp3" type="audio/mpeg">
                            </audio>

                            {if $os.status == 1}
                            
                            {/if}
                             {if $os.status == 2}
                             
                               <div id="map" class="map" style="margin-top:150px"></div>

                            <p style="color:white"><b>{$os.driver_info.0.driver_names}</b>, пътува към вас с <b>{$os.driver_info.0.driver_car}</b></p>
                            {/if}
                             {if $os.status == 3}
                            <p>Таксиметровия шофьор приключи пътуването</p>
                            {/if}
                            
                           <p style="text-align:center">
                           
                            <a style="width:100%;background-color:#20bd5f;color:white; text-decoration:none;font-size:25px;padding:10px;border-radius:35px" href="tel: {$os.driver_info.0.driver_phone}" >✆ НАБЕРИ</a>
                       
                       </p>
                                
                                
                            {/if}
                            

                    </div>
               
                   {if strlen($order.0.ordre_note) >2} <p class="thought" >
                       {$order.0.ordre_note}</p>{/if}
                  {if $os.status == 2}  <center> <p style="width:100%;margin:5px"><br>
                            <a href="./rate.php?driver={$os.driver_info.0.driver_id}&order_id={$order.0.order_id}"
                               style="text-decoration: none;border-radius:10px; background-color: #ffaa00;color: black;padding: 10px;margin: 5px;">
                                Приключете пътуването</a></p></center>{/if}

               
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
   <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="../view/lea/dist/leaflet-routing-machine.js"></script>
        <script src="../view/lea/examples/Control.Geocoder.js"></script>
    <script src="../view/lea/examples/config.js"></script>
   {literal} <script>
    var map = L.map('map');

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?language=bg', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);












L.Routing.control({
    
    waypoints: [
       	L.latLng({/literal}{$os.driver_info.0.lat}{literal}, {/literal}{$os.driver_info.0.lon}{literal}),
		L.latLng({/literal}{$u.0.lat}{literal}, {/literal}{$u.0.lon}{literal})
    ],
   
    autoRoute: true,
}).addTo(map);


    </script>{/literal}
  </body>
{include file="footer.tpl"}