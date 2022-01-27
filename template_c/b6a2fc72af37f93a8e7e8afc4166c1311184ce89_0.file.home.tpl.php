<?php
/* Smarty version 3.1.32, created on 2021-12-10 10:25:01
  from '/home/vsyakadu/almus.semicolondi.com/view/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61b30edd704b85_24431480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6a2fc72af37f93a8e7e8afc4166c1311184ce89' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/home.tpl',
      1 => 1639124696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61b30edd704b85_24431480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<head>
    
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin >
    
 <!-- Make sure you put this AFTER Leaflets CSS -->
 <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin >
    <?php echo '</script'; ?>
>
    

    <style>
::placeholder {
  color: red;
}

    
        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active, .collapsible:hover {
            background-color: #555;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }
        
        input:focus {
  background-color: yellow;
}
input[type=text]:focus {
  width: 100%;
}
    </style>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Indie+Flower);

body {
  background-color: HSL(250, 22%, 41%);
}

.c-custom-checkbox {
  display: block;
  position: relative;
  cursor: pointer;
  color: #eee;
  font-family: Indie Flower;
  font-size:17px;
}

.c-custom-checkbox svg {
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 0.9em;
  margin-top: 0.9em;
  width: 2em;
  height: 2em;
  border: 2px solid currentColor;
}

.c-custom-checkbox input[type="checkbox"] {
  opacity: 0;
  width: 1em;
  height: 1em;
  position: absolute;
  left: 0.5em;
  top: 0.4em;
}

.c-custom-checkbox svg path {
  transition: stroke-dashoffset 0.4s linear;
}

.c-custom-checkbox input[type="checkbox"]:checked + svg path {
  stroke-dashoffset: 0;
  stroke: currentColor;
}

.c-custom-checkbox input[type="checkbox"] + svg path {
  stroke: #eee;
}

.c-custom-checkbox input[type="checkbox"]:checked + label {
  text-decoration: line-through;
}

.c-custom-checkbox input[type="checkbox"]:focus + svg {
  outline: 3px dotted red;
  outline-offset: 5px;
}

.c-custom-checkbox input[type="checkbox"]:focus:not(:focus-visible) + svg {
  outline: none;
}

        table {
            border-collapse: collapse;
        }

         td {
            width:150px;
            text-align:center;
            border:0px ;
            padding:5px

        }
        .geeks {
            border-right:hidden;
        }
        .gfg {
            border-collapse:separate;
            border-spacing:0 10px;
        }
        h1 {
            color:green;
        }
    </style><body 
    <?php if (strlen($_smarty_tpl->tpl_vars['location']->value) < 2) {?>
     onload="getLocation(); setTimeout(function() { document.frm1.submit() } , 1000)"
    <?php } else { ?>
     onload="getLocation(); setTimeout(function() { document.frm1.submit() } , 10000)"
    <?php }?>
   
    
    >
    <ion-nav-view></ion-nav-view>

<?php echo '<script'; ?>
 id="menu.html" type="text/ng-template">
    <ion-side-menus enable-menu-with-back-views="false">
        <ion-side-menu-content >
            <ion-nav-bar class="bar-stable">
                <ion-nav-back-button>
                </ion-nav-back-button>

                <ion-nav-buttons side="left">

                    <button class="button button-icon" menu-toggle="left">
                        <span class="menuButton" ng-class="$ionicSideMenuDelegate.isOpen() ? 'menu-arrowButton' : 'arrow-menuButton'"  ></span>
                    </button>

                </ion-nav-buttons>
            </ion-nav-bar>
            <ion-nav-view name="menuContent"></ion-nav-view>
        </ion-side-menu-content>

        <ion-side-menu side="left">

            <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="feed.html" type="text/ng-template">
    <!-- Feed Screen - Refer to feed.scss -->
    <ion-view view-title="Luber" hide-nav-bar="true" class="rubyonic-pane feed-screen">

        <div class="bar bar-ruby-header bar-transparent"
        
        
        
        
        
        
       

        
        
        
        
        
        
        
        
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                        
        style="background-color: #242424;"
        <?php }?>
                        >
            <button class="button ruby-button-clear icon ion-navicon brand-base-text-color"
            
            <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                        style="color:white"
        <?php }?>
             menu-toggle="left">
                <span class="new-notification-bubble"></span>
            </button>
            <h1 class="title brand-base-text-color"><img src="../images/luber.png" width="50" height="40"></h1>
              </div>
        <!-- End Custom navbar -->
        <ion-content class="has-header">

            <div class="padding feed ruby">
           
            <?php if (strlen($_smarty_tpl->tpl_vars['user_info']->value[0]['user_phone']) < 10) {?><center>
            <div style="background-color: black; color:#dea527" onclick="window.location='./profile.php'">
            Виждаме, че не стe посочили телефонен номер. Можете да го направите от ТУК.
            </div></center>
            <?php }?>
            
            
            
            
            
            
            
            
            
            
            
            
                <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
                    <p style="background-color: green;padding: 5px; color:white; text-align: center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                <?php }?>
                    <table style="width: 100%;" class = "gfg" >
                   
                    <?php if (isset($_smarty_tpl->tpl_vars['active_orders']->value)) {?>
                    
                     <p style="color:#dea527; background-color: black;text-align:center;opacity:0.8">Имате активни поръчки</p>
                     
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['active_orders']->value, 'active_order', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['active_order']->value) {
?>
                        <div onclick="window.location='view_order.php?order_id=<?php echo $_smarty_tpl->tpl_vars['active_order']->value['order_id'];?>
';"
                        <?php if ($_smarty_tpl->tpl_vars['active_order']->value['status'] == 1) {?>
                        style = "background-color: #54c769; color: white; padding 3px; margin: 4px;cursor: pointer;";
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['active_order']->value['status'] == 2) {?>
                        style = "background-color: #4993c4; color: white; padding 3px; margin: 4px;cursor: pointer;";
                        <?php }?>
                        >
                        
                        <div
                        
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                        style="margin:4px; background-color:#242424;opacity: 0.78; padding: 5px"
                        <?php }
if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?>
                        style="margin:4px; background-color:white
                        
                        
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                        style="margin:4px; background-color:#242424;opacity: 0.78; padding: 5px"
                        <?php }?>
                        
                        e;opacity: 0.78; padding: 5px"
                        <?php }?>
                        
                        
                        >
                        
                      <p><?php echo $_smarty_tpl->tpl_vars['active_order']->value['time'][0];?>
:<?php echo $_smarty_tpl->tpl_vars['active_order']->value['time'][1];?>
:<?php echo $_smarty_tpl->tpl_vars['active_order']->value['time'][2];?>
ч. | 
                      <?php echo $_smarty_tpl->tpl_vars['active_order']->value['date'][2];?>
.<?php echo $_smarty_tpl->tpl_vars['active_order']->value['date'][1];?>
.<?php echo $_smarty_tpl->tpl_vars['active_order']->value['date'][0];?>

                      <br>
                      От: ул.<?php echo $_smarty_tpl->tpl_vars['active_order']->value['start_destiantion'][0];?>
 №<?php echo $_smarty_tpl->tpl_vars['active_order']->value['start_destiantion'][1];?>
 ПК:<?php echo $_smarty_tpl->tpl_vars['active_order']->value['start_destiantion'][2];?>

                   
                       </p>
                       </div>
                       
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    <?php }?>
                    
                     
                     
                                   <?php if (strlen($_smarty_tpl->tpl_vars['location']->value) < 1) {?>
                                   <center><p style="text-decoration:none; background-color:#36a343;padding:10px;border-radius:5px;font-size:16px;color:white;font-size:16px;"><img src="https://gonxt.tech/commply/wp-content/themes/apparatus/images/newsletter_loader.gif"
                                   widt="25px" height="25px"> Търсим местоположението Ви...
                                  </p></center <?php } else { ?>
                          <center>   <a href="./get_taxi.php?street=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&number=0&post_code=0" style="text-decoration:none;">
                          <p style="text-decoration:none; background-color:#3f85e0;color:white;padding:10px;border-radius:5px;font-size:16px;">📍  <?php echo $_smarty_tpl->tpl_vars['location']->value;?>
 </p></a></center>
                                <?php }?>
                                

                        
                        <tr
                        <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?>
                        style="border-radius:10px;text-align: center; background-color: white; padding: 8px; margin: 1px; width: 100%;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"  <?php }
if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
style="border-radius:10px;text-align: center; background-color: #242424;color:white; padding: 8px; margin: 1px; width: 100%;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
 <?php }?>
                        ><td>Любими адреси </td></tr>
                        
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fav_pl']->value, 'place');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
?>
                        <tr onclick="style.display = 'none';"
                        
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                       style=" border-spacing: 15px;background-color:#242424; color:white;padding:15;"
                        <?php }?>
                        
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?>
                       style=" border-spacing: 15px;background-color:white; color:white;"
                        <?php }?>
                        >
                            <td 
                            
                            <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?>
                            style="border-radius:10px;text-align: center; padding: 10px; background-color: white; opacity: 0.9;color: black;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                            style="border-radius:10px;color:white;text-align: center; padding: 10px; background-color: #242424; opacity: 0.9;color: white;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
<?php }?>
>❤️                       
                                <a href="./get_taxi.php?street=<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
&number=<?php echo $_smarty_tpl->tpl_vars['place']->value['street_number'];?>
&post_code=<?php echo $_smarty_tpl->tpl_vars['place']->value['post_code'];?>
"
                               
                               
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                                style="color:white; text-decoration: none"
<?php }?>

                          
<?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?>
                                style="color:black; text-decoration: none"
<?php }?>
                                   <a href="return confirm('Сигурни ли сте, че искате да повикате такси на ул.<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
 №<?php echo $_smarty_tpl->tpl_vars['place']->value['street_number'];?>
 ПК:<?php echo $_smarty_tpl->tpl_vars['place']->value['post_code'];?>
?')"  >
                                <?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
 
                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>






                <div
                <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?>
                                
                style="border-radius:10px;text-align: center; background-color: white; padding: 3px; margin: 3px; width: 100%; opacity: 0.9; color: black;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
<?php }?>

  <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                                
                style="border-radius:10px;text-align: center; background-color: #242424; padding: 3px; margin: 3px; width: 100%; opacity: 0.9; color: white;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
<?php }?>

><br><center>
                        <form action="./get_taxi.php" method="get">
                        
                    <input type="text" name="street" placeholder="Въведете aдрес" style="width: 90%;background-color:#f7f7f7;color:black;padding:20px;margin:10px;font-size:16px;radius:5px; border-radius: 12px;" required>
                    
            
                            <input type="submit" name="call_taxi" value="ПОВИКАЙТЕ ТАКСИ" style="width: 80%; background: radial-gradient(#387989, #1b6da6);
  background-repeat: no-repeat;color:#ebff36;border-radius: 12px;border: none;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);margin: 3px;padding:5px;" onclick="style.display = 'none';">
               
               
                      <label for="option" class="c-custom-checkbox">
  <!--  length of the path is 270px -->
  <input type="checkbox"  name="addfav" id="option"/>
  <svg viewBox="0 0 60 40" aria-hidden="true" focusable="false"><path d="M21,2 C13.4580219,4.16027394 1.62349378,18.3117469 3,19 C9.03653312,22.0182666 25.2482171,10.3758914 30,8 C32.9363621,6.53181896 41.321398,1.67860195 39,4 C36.1186011,6.8813989 3.11316157,27.1131616 5,29 C10.3223659,34.3223659 30.6434647,19.7426141 35,18 C41.2281047,15.5087581 46.3445303,13.6554697 46,14 C42.8258073,17.1741927 36.9154967,19.650702 33,22 C30.3136243,23.6118254 17,31.162498 17,34 C17,40.4724865 54,12.4064021 54,17 C54,23.7416728 34,27.2286213 34,37" stroke-width="4" fill="none" stroke-dasharray="270" stroke-dashoffset="270" ></path></svg>
 Добавете в любими
</label>
               
                </form>
                
                
                
                
                
                
                </center>
          
                </div>
                    </ion-content>
    </ion-view>

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 id="search.html" type="text/ng-template">
    <ion-view view-title="Search">
        <ion-content>
            <h1>Search</h1>
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
</body>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
