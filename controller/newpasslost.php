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

if(isset($_POST['newpass'])){
        $Basic->newPassword($_SESSION['lpp'], $_POST['newpass']);
         $Smarty->assign('ok', "Променихте паролата си успешно! Върнете се в началото за да влезете в профила си!");
       // header('../index.php?newpass=11');
    }
$Smarty->display('newpasslost.tpl');