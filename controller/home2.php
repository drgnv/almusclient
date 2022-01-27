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



$drivers = $Basic->getDriversLinks();
 $Smarty->assign('drivers', $drivers);
 
if(isset($_GET['lat'])){
   // echo $_GET['lat'].'/'.$_GET['lon'];
    $Smarty->assign('lat', $_GET['lat']);
    $Smarty->assign('lon', $_GET['lon']);
}
$active_orders = $Basic->getActiveOrdersByUserId($_SESSION['user_info'][0]['user_id']);
if(is_array($active_orders)){
    header('Location: ./view_order.php?order_id='.$active_orders[0]['order_id']);
}
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
if($_SESSION['user_info'][0]['user_id'] == 11){
    $Smarty->display('home3.tpl');
}else{
   $Smarty->display('home2.tpl'); 
}

