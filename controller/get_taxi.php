<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Basic.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Basic = new Basic();

if(is_array($Basic->checkActiveOrdersForUser($_SESSION['user_info'][0]['user_id']))){
  
    echo "
    <center><p style=\"font-size:26px;align:center;margin-top:150px;padding:10px;\">Имаш активна поръчка. Натисни бутона за да те насочим към нея.</p>
   <br><a href=\"./home.php\" style=\"text-decoration:none;background-color:#e8eb34;padding:15px;margin:25px;color:black;border-radius:10px\">КЪМ ПОРЪЧКАТА</a></center>
    ";
    exit;
}


if(isset($_GET['street'])){
    
$data['street'] = $_GET['street'];
$lat2 = explode(':',$_GET['lat']);
$lng2 = explode(':',$_GET['lng']);
$data['end_destination'] = $_GET['end_destination'];
$data['lat'] = trim($lat2[1]);
$data['lng'] = trim($lng2[1]);
$data['city'] = $_SESSION['user_info'][0]['city_id'];
if($_GET['bagaj'] == 'on' || $_GET['bagaj'] == 1){
    $data['bagaj'] = 11;
}

$data['user_id'] = $_SESSION['user_info'][0]['user_id'];
if($_GET['addfav'] == 'on' || $_GET['addfav'] == 1){
    $data2['street'] = $_GET['street'];
    $data2['number'] = '';
    $data2['post_code'] = '';
    
    
    $Basic->setNewFavPlace($data2);
}
$order_id = $Basic->setNewOrder($data);
header('Location: view_order.php?order_id='.$order_id[0]['max(order_id)']);


}
header('Refresh:5');
$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('get_taxi.tpl');