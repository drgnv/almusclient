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
if(isset($_GET['error'])){

    $Smarty->assign('error', $_GET['error']);
}
if(isset($_POST['change_password'])){
    $data['old_password'] = $_POST['old_password'];
    $data['new_password'] = $_POST['new_password'];
    $data['new_password2'] = $_POST['new_password2'];


    if($data['new_password'] != $data['new_password2']){
        header('Location: ./change_password.php?error=Паролите не съвпадат');

    }else{
        if($Basic->checkPassword($_SESSION['user_info'][0]['user_id'], $data['old_password'])){
            if(strlen($data['new_password'])<8){
                header('Location: ./change_password.php?error=Новата парола трябва да бъде дълга поне 8 символа');
            }else{
                $Basic->changePassword($_SESSION['user_info'][0]['user_id'], $data['new_password']);
                header('Location: ./change_password.php?error=Паролата бе променена успешно');
            }
        }else{
            header('Location: ./change_password.php?error=Грешна парола');
            //echo $error;
        }
    }





}



$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('change_password.tpl');