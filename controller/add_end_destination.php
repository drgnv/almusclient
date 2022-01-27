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

if(isset($_GET['order_id'])){

    $Smarty->assign('order_id', $_GET['order_id']);
    if(isset($_POST['set_end_point'])){
        $data['street'] = $_POST['street'];
        $data['num'] = $_POST['num'];
        $data['post_code'] = $_POST['post_code'];
        $data['order_id'] = $_GET['order_id'];
        $Basic->addEndPoint($data);
        header('Location: ./view_order.php?order_id='.$_GET['order_id']);
    }
}

$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('add_end_destination.tpl');
