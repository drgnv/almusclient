<?php
error_reporting(E_ERROR);
session_start();
//print_r($_COOKIE);
if(!isset($_SESSION['user_info'])){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Basic.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Basic = new Basic();
//print_r($_COOKIE);
if(isset($_POST['img'])){
        $img = $_POST['image'];
    $folderPath = "../profile_upload/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
    print_r($fileName);
}
$Smarty->assign('city', $Basic->getAllCity());
if(isset($_POST['save'])){
$data['names'] = $_POST['names'];
$data['mail'] = $_POST['mail'];
if($_POST['phone'] != $_SESSION['user_info'][0]['user_phone']){
    $Basic->setActStatus($_SESSION['user_info'][0]['user_phone'], 0);
    $_SESSION['user_info'][0]['user_phone'] = $_POST['phone'];
}

$data['phone'] = $_POST['phone'];
$data['theme'] = $_POST['theme'];
$data['city'] = $_POST['city'];

$data['user_id'] = $_SESSION['user_info'][0]['user_id'];
$Basic->setUserById($data);
header('Location: ./profile.php?ok=true');
}
$user_info = $Basic->getUserById($_SESSION['user_info'][0]['user_id']);
if(isset($_GET['ok'])){
    $Smarty->assign('ok', $_GET['ok']);
}

if(isset($_GET['vp'])){
    $Smarty->assign('vp', $_GET['vp']);
}

$Smarty->assign('user_info2', $user_info);
$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('profile.tpl');
