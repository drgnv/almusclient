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
$favorite_places = $Basic->getFavPlacesByUserId($_SESSION['user_info'][0]['user_id']);

if(isset($_GET['delete'])){
    $fav_place_id = $_GET['delete'];
    $Basic->deleteFavPlace($fav_place_id);
    header('Location: ./favorite_places.php');
}

if(isset($_POST['add_place'])){
    $data['street'] = $_POST['street'];
    $data['number'] = $_POST['number'];
    $data['post_code'] = $_POST['post_code'];
    $data['user_id'] = $_SESSION['user_info'][0]['user_id'];
    $Basic->setNewFavPlace($data);
    header('Location: ./favorite_places.php');
}


$Smarty->assign('fav_pl', $favorite_places);
$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('favorite_places.tpl');
