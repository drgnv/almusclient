<?php
error_reporting(E_ERROR);
session_start();
//print_r($_SESSION);


if(!isset($_SESSION['user_info']) && !isset($_COOKIE['emailalmus'])){
    
    header("Location: ../index.php");
}else{
  //  $Basic->logIn($_COOKIE['emailalmus'], $_COOKIE['passwordalmus'], 1);
   //  echo $_COOKIE['emailalmus'].' '.$_COOKIE['passwordalmus'];
}
 //echo $_COOKIE['emailalmus'].' '.$_COOKIE['passwordalmus'];
 //print_r($_COOKIE);
include '../libs/Smarty.class.php';
include_once '../model/Basic.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';
//print_r($_COOKIE);
//echo $_COOKIE['passwordalmus'];
//echo $_COOKIE['usermail'];
$Basic = new Basic();
$Smarty->assign( 'drivers_count',  $Basic->getActiveDriversCount($_SESSION['user_info'][0]['city_id']));
$useragent = $_SERVER['HTTP_USER_AGENT'];
$info = get_browser($useragent);
$isWebView = false;
if((strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile/') !== false) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari/') == false)) :
    $isWebView = true;
elseif(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) :
    $isWebView = true;
endif;

if(!$isWebView){
   // header("Location: https://letmegooglethat.com/?q=almustaxi");
   //  exit;
}
$active_orders = $Basic->getActiveOrdersByUserId($_SESSION['user_info'][0]['user_id']);
if(is_array($active_orders)){
    header('Location: ./view_order.php?order_id='.$active_orders[0]['order_id']);
}

     $Smarty->assign('act_status', $_SESSION['user_info'][0]['act_status']);
     
     
     
if($_SESSION['user_info'][0]['act_status'] == 0 AND !isset($_POST['code_sms'])){
    $smsc = rand(1000,9999);
    $Basic->setActCode($_SESSION['user_info'][0]['user_phone'], $smsc);
            $url="https://trigger.macrodroid.com/9d31eb05-9288-4227-bfa2-45c18729c0d3/1?phone=".$_SESSION['user_info'][0]['user_phone']."&code=".$smsc;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
//Tell cURL to return the output as a string.

$xx = curl_exec($ch);
}
if(isset($_POST['code_sms'])){
    $x=$Basic->getUserById($_SESSION['user_info'][0]['user_id']);
         if(trim($_POST['code_sms']) === $x[0]['act_code']){
              $Basic->setActStatus($_SESSION['user_info'][0]['user_phone'], 1);
             header('Location: ../index.php');
         }else{
             
             $Smarty->assign('act_wrong', "Въведения код е грешен. Изпратихме ви нов. Опитайте отново. Ако не получите SMS натиснете бутон НАЧАЛО отгоре"); 
         }
     }
$drivers = $Basic->getDriversLinks();

 $Smarty->assign('drivers', $drivers);
 

if(strlen($_SESSION['userData']['picture']['url'])>5){
    
$Smarty->assign('profile_pic', $_SESSION['userData']['picture']['url']);
}
$favorite_places = $Basic->getFavPlacesByUserId($_SESSION['user_info'][0]['user_id']);

if(isset($_GET['finished_order'])){

    $Smarty->assign('msg', 'Вашето пътуване приключи успешно');
}

$phone = $Basic->getPhone($_SESSION['user_info'][0]['user_id']);
$valid_phone = false;
if(strlen($phone[0]['user_phone']) == 10 || strlen($phone[0]['user_phone']) == 13){
    if(strlen($phone[0]['user_phone']) == 10){
        if(is_numeric(strrpos($phone[0]['user_phone'], '0', '0'))){
            //print_r(explode("", $phone[0]['user_phone']));
            //echo 1;
            
            $xx = str_split($phone[0]['user_phone']);
            //echo $xx[0];
            if($xx[0] == '0'){
                if($xx[1] == '8' OR $xx[1] == '9'){
                
                $valid_phone = true;
                }
            }
            
        }
    }
    
    if(strlen($phone[0]['user_phone']) == 13){
        if(strstr($phone[0]['user_phone'], '+359')){
            $yy = str_split($phone[0]['user_phone'], 4);
           // echo $yy['0'];
           if($yy['0'] == '+359'){
            $valid_phone = true;
           }
        }
    }
}

if($valid_phone == false){
    header('Location: ./profile.php?vp=За да поръчате такси е необходимо да въведете валиден телефонен номер!');
}

$active_orders = $Basic->getActiveOrdersByUserId($_SESSION['user_info'][0]['user_id']);

if(is_array($active_orders)){
    foreach($active_orders as $key => $order){
        $active_orders[$key]['start_destiantion'] = explode('-', $order['start_destiantion']);
        $active_orders[$key]['end_destination'] = explode('-', $order['end_destination']);
         $active_orders[$key]['time'] = explode('-', $order['time']);
         $active_orders[$key]['date'] = explode('-', $order['date']);
    }
   // print_r($active_orders);
   $Smarty->assign('active_orders', $active_orders);
}

$user_info2 = $Basic->getUserById($_SESSION['user_info'][0]['user_id']);
$Smarty->assign('fav_pl', $favorite_places);
$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->assign('user_info2', $user_info2);

if(isset($_GET['lat'])){
   // echo $_GET['lat'].'/'.$_GET['lon'];
    $Smarty->assign('lat', $_GET['lat']);
    $Smarty->assign('lon', $_GET['lon']);
    $Basic->setLatLon($_GET['lat'],$_GET['lon'],$_SESSION['user_info'][0]['user_id']);
    
    $url = "http://nominatim.openstreetmap.org/reverse?email=myemail@myserver.com&format=json&lat=".trim($_GET['lat'])."&lon=".trim($_GET['lon'])."&zoom=27&addressdetails=1";
    
//echo $url;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
//Tell cURL to return the output as a string.
//Execute the cURL request and return the output to a string.
//$response = curl_exec($ch);
//echo $response;

$xx = curl_exec($ch);
$mm = explode('display_name":"',$xx);
$yy = explode('","',$mm[1]);
//print_r($mm);

$locat =  trim($yy[0]);

        $Smarty->assign('location', $locat);
}
    $Smarty->display('home3.tpl');

