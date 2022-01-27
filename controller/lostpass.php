<?php
error_reporting(E_ERROR);
session_start();
//print_r($_SESSION);


include '../libs/Smarty.class.php';
include_once '../model/Basic.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';

$Basic = new Basic();

if(isset($_POST['lostp'])){
    
    $phone = $_POST['lostp'];
    $_SESSION['lpp'] = $phone;
    if($Basic->dosePhoneExist($phone) == true){
        $code = rand(1000, 9999);
        $Basic->setCode($phone, $code);
        
        $url="https://trigger.macrodroid.com/9d31eb05-9288-4227-bfa2-45c18729c0d3/1?phone=".$phone."&code=".$code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
//Tell cURL to return the output as a string.

$xx = curl_exec($ch);
 $Smarty->assign('sendcode', 1);
    }
    
}

if(isset($_POST['lostp2'])){
    
    if($Basic->checkSmscode($_POST['lostp'],$phone) == true){
        header('Location: ./newpasslost.php?phone='.$phone);
        
    }else{
        header('Location: https://google.com');
    }
}

$Smarty->display('lostpass.tpl');