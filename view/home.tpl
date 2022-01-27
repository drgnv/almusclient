{include file="header.tpl"}

<head>
    
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin >
    
 <!-- Make sure you put this AFTER Leaflets CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin >
    </script>
    

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
    {if strlen($location)<2}
     onload="getLocation(); setTimeout(function() { document.frm1.submit() } , 1000)"
    {else}
     onload="getLocation(); setTimeout(function() { document.frm1.submit() } , 10000)"
    {/if}
   
    
    >
    <ion-nav-view></ion-nav-view>

<script id="menu.html" type="text/ng-template">
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

            {include file="menu.tpl"}


</script>

<script id="feed.html" type="text/ng-template">
    <!-- Feed Screen - Refer to feed.scss -->
    <ion-view view-title="Luber" hide-nav-bar="true" class="rubyonic-pane feed-screen">

        <div class="bar bar-ruby-header bar-transparent"
        
        
        
        
        
        
       

        
        
        
        
        
        
        
        
{if $user_info2.0.theme == 0}
                        
        style="background-color: #242424;"
        {/if}
                        >
            <button class="button ruby-button-clear icon ion-navicon brand-base-text-color"
            
            {if $user_info2.0.theme == 0}
                        style="color:white"
        {/if}
             menu-toggle="left">
                <span class="new-notification-bubble"></span>
            </button>
            <h1 class="title brand-base-text-color"><img src="../images/luber.png" width="50" height="40"></h1>
              </div>
        <!-- End Custom navbar -->
        <ion-content class="has-header">

            <div class="padding feed ruby">
           
            {if strlen($user_info.0.user_phone) < 10}<center>
            <div style="background-color: black; color:#dea527" onclick="window.location='./profile.php'">
            Виждаме, че не стe посочили телефонен номер. Можете да го направите от ТУК.
            </div></center>
            {/if}
            
            
            
            
            
            
            
            
            
            
            
            
                {if isset($msg)}
                    <p style="background-color: green;padding: 5px; color:white; text-align: center">{$msg}</p>
                {/if}
                    <table style="width: 100%;" class = "gfg" >
                   
                    {if isset($active_orders)}
                    
                     <p style="color:#dea527; background-color: black;text-align:center;opacity:0.8">Имате активни поръчки</p>
                     
                    {foreach from=$active_orders key=$k item=$active_order}
                        <div onclick="window.location='view_order.php?order_id={$active_order.order_id}';"
                        {if $active_order.status == 1}
                        style = "background-color: #54c769; color: white; padding 3px; margin: 4px;cursor: pointer;";
                        {/if}
                        {if $active_order.status == 2}
                        style = "background-color: #4993c4; color: white; padding 3px; margin: 4px;cursor: pointer;";
                        {/if}
                        >
                        
                        <div
                        
{if $user_info2.0.theme == 0}
                        style="margin:4px; background-color:#242424;opacity: 0.78; padding: 5px"
                        {/if}
{if $user_info2.0.theme == 1}
                        style="margin:4px; background-color:white
                        
                        
{if $user_info2.0.theme == 0}
                        style="margin:4px; background-color:#242424;opacity: 0.78; padding: 5px"
                        {/if}
                        
                        e;opacity: 0.78; padding: 5px"
                        {/if}
                        
                        
                        >
                        
                      <p>{$active_order.time.0}:{$active_order.time.1}:{$active_order.time.2}ч. | 
                      {$active_order.date.2}.{$active_order.date.1}.{$active_order.date.0}
                      <br>
                      От: ул.{$active_order.start_destiantion.0} №{$active_order.start_destiantion.1} ПК:{$active_order.start_destiantion.2}
                   
                       </p>
                       </div>
                       
                        </div>
                    {/foreach}
                    
                    {/if}
                    
                     
                     
                                   {if strlen($location)<1}
                                   <center><p style="text-decoration:none; background-color:#36a343;padding:10px;border-radius:5px;font-size:16px;color:white;font-size:16px;"><img src="https://gonxt.tech/commply/wp-content/themes/apparatus/images/newsletter_loader.gif"
                                   widt="25px" height="25px"> Търсим местоположението Ви...
                                  </p></center {else}
                          <center>   <a href="./get_taxi.php?street={$location}&number=0&post_code=0" style="text-decoration:none;">
                          <p style="text-decoration:none; background-color:#3f85e0;color:white;padding:10px;border-radius:5px;font-size:16px;">📍  {$location} </p></a></center>
                                {/if}
                                

                        
                        <tr
                        {if $user_info2.0.theme == 1}
                        style="border-radius:10px;text-align: center; background-color: white; padding: 8px; margin: 1px; width: 100%;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"  {/if}
{if $user_info2.0.theme == 0}
style="border-radius:10px;text-align: center; background-color: #242424;color:white; padding: 8px; margin: 1px; width: 100%;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
 {/if}
                        ><td>Любими адреси </td></tr>
                        
                        
                        {foreach from=$fav_pl item=$place}
                        <tr onclick="style.display = 'none';"
                        
{if $user_info2.0.theme == 0}
                       style=" border-spacing: 15px;background-color:#242424; color:white;padding:15;"
                        {/if}
                        
{if $user_info2.0.theme == 1}
                       style=" border-spacing: 15px;background-color:white; color:white;"
                        {/if}
                        >
                            <td 
                            
                            {if $user_info2.0.theme == 1}
                            style="border-radius:10px;text-align: center; padding: 10px; background-color: white; opacity: 0.9;color: black;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
{/if}

{if $user_info2.0.theme == 0}
                            style="border-radius:10px;color:white;text-align: center; padding: 10px; background-color: #242424; opacity: 0.9;color: white;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
{/if}
>❤️                       
                                <a href="./get_taxi.php?street={$place.street}&number={$place.street_number}&post_code={$place.post_code}"
                               
                               
{if $user_info2.0.theme == 0}
                                style="color:white; text-decoration: none"
{/if}

                          
{if $user_info2.0.theme == 1}
                                style="color:black; text-decoration: none"
{/if}
                                   <a href="return confirm('Сигурни ли сте, че искате да повикате такси на ул.{$place.street} №{$place.street_number} ПК:{$place.post_code}?')"  >
                                {$place.street} 
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </table>






                <div
                {if $user_info2.0.theme == 1}
                                
                style="border-radius:10px;text-align: center; background-color: white; padding: 3px; margin: 3px; width: 100%; opacity: 0.9; color: black;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
{/if}

  {if $user_info2.0.theme == 0}
                                
                style="border-radius:10px;text-align: center; background-color: #242424; padding: 3px; margin: 3px; width: 100%; opacity: 0.9; color: white;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
"
{/if}

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
</body>
    {include file="footer.tpl"}