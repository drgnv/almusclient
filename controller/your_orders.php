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
$orders = $Basic->getOrdersByUserId($_SESSION['user_info'][0]['user_id']);
foreach ($orders as $k=>$order){
    $orders[$k]['start_destiantion'] = explode('-', $orders[$k]['start_destiantion']);
    $orders[$k]['time'] = explode('-', $orders[$k]['time']);
}

$Smarty->assign('orders', $orders);
$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('your_orders.tpl');
