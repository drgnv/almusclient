<?php
/* Smarty version 3.1.32, created on 2021-12-18 21:21:27
  from '/home/vsyakadu/almus.semicolondi.com/view/view_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61be34b75e2d35_64883763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8184fc53ca451af9fb5d337cc840d6669ef5616b' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/view_order.tpl',
      1 => 1639855285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61be34b75e2d35_64883763 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

    
    
<?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
 <div style="background-color: #474747;color:white;padding: 5px;border-radius:10px;text-align: center;margin: 5px;font-size:17px">
                    <p><b>Очакваш такси на адрес:</b></p>
                    <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
<p style="margin: 5px;">

                  
                  </div>
   <?php }?>
                    <div
                            <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                                style="background-color: #98cbfb;padding: 5px;text-align: center; margin: 5px;font-size:17"
                            <?php } else { ?>
                                style="background-color:#3db8ff;padding: 5px;text-align: center; margin: 5px; font-size:17;border-radius:5px"
                            <?php }?>
                            >
                        <p><b>
                                <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                                    Търсим шофьор за теб! Моля, изчакай секунда... 
                                    <?php if ($_smarty_tpl->tpl_vars['drivers_count']->value > 0) {?>
                                   
                                    <p>Имаме <?php echo $_smarty_tpl->tpl_vars['drivers_count']->value;?>
 шофьора на линия. </p>
                                 
                                    
                                    <?php } else { ?>
                                    <p>В момента нямаме шофьори на линия. Възможно е забавяне на таксито повече от обичайното</p>
                                    <?php }?>
                                 <p><img src="https://cdn.dribbble.com/users/3632750/screenshots/6798569/isometric_smartphone_gps.gif" style="width:200px;heigh:200px"></p>
                                <?php }?>
                                
                                  <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 3) {?>
                                    
                                <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 4) {?>
                                    Отказана
                                <?php }?>
                            </b></p>

                        <?php if (!is_array($_smarty_tpl->tpl_vars['os']->value['driver_info'])) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['ref']->value)) {?>
                                <a href="./home.php"  target="_PARENT"
                                style="color:black;background-color: greenyellow;padding: 5px; text-decoration: none; font-size:17px">
                                    Вие отазахте поръчката</a>
                                <?php } else { ?>
<p><br>
    <a href="./viewframe.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
&refuse=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
" 
    style="background-color: red; text-decoration: none; padding: 5px; color:white;border-radius:10px;opacity:0.8;">Откажи поръчката</a></p>
                             
                             <div>
                             
                             
                             <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                             
                             
                             
                             <?php }?>
                             
                             </div>
                             
                             
                               
                                <?php }?>

                            <?php } else { ?>
                            <audio autoplay>
                                <source src="../images/n.mp3" type="audio/mpeg">
                            </audio>

                            <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                            
                            <?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 2) {?>
                             
                               <div id="map" class="map" style="margin-top:150px"></div>

                            <p style="color:white"><b><?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_names'];?>
</b>, пътува към вас с <b><?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_car'];?>
</b></p>
                            <?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 3) {?>
                            <p>Таксиметровия шофьор приключи пътуването</p>
                            <?php }?>
                            
                           <p style="text-align:center">
                           
                            <a style="width:100%;background-color:#20bd5f;color:white; text-decoration:none;font-size:25px;padding:10px;border-radius:35px" href="tel: <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_phone'];?>
" >✆ НАБЕРИ</a>
                       
                       </p>
                                
                                
                            <?php }?>
                            

                    </div>
               
                   <?php if (strlen($_smarty_tpl->tpl_vars['order']->value[0]['ordre_note']) > 2) {?> <p class="thought" >
                       <?php echo $_smarty_tpl->tpl_vars['order']->value[0]['ordre_note'];?>
</p><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 2) {?>  <center> <p style="width:100%;margin:5px"><br>
                            <a href="./rate.php?driver=<?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_id'];?>
&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
"
                               style="text-decoration: none;border-radius:10px; background-color: #ffaa00;color: black;padding: 10px;margin: 5px;">
                                Приключете пътуването</a></p></center><?php }?>

               
            </ion-content>
        </ion-view>


    <?php echo '</script'; ?>
>
       <?php echo '<script'; ?>
 defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDTImGxdxEmf7D513G6Vf9S9p7uApvgf8&callback=initMap">
    <?php echo '</script'; ?>
>
    

<p id="demo"></p>

<?php echo '<script'; ?>
>
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

  
   
<?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../view/lea/dist/leaflet-routing-machine.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../view/lea/examples/Control.Geocoder.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../view/lea/examples/config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    var map = L.map('map');

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?language=bg', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);












L.Routing.control({
    
    waypoints: [
       	L.latLng(<?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['lat'];?>
, <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['lon'];?>
),
		L.latLng(<?php echo $_smarty_tpl->tpl_vars['u']->value[0]['lat'];?>
, <?php echo $_smarty_tpl->tpl_vars['u']->value[0]['lon'];?>
)
    ],
   
    autoRoute: true,
}).addTo(map);


    <?php echo '</script'; ?>
>
  </body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
