<?php
error_reporting(0);
session_start();
include './libs/Smarty.class.php';
include_once './model/Basic.php';
include_once 'config.php';
$redirectURL = 'https://almus.semicolondi.com/fb-callback.php';
$permissions = ['email'];
$loginURL =  $helper->getLoginUrl($redirectURL, $permissions);
//echo $loginURL;
$Basic = new Basic();
$useragent = $_SERVER['HTTP_USER_AGENT'];
$info = $Basic->getBrowser($useragent);
$isWebView = false;
if((strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile/') !== false) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari/') == false)) :
    $isWebView = true;
elseif(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) :
    $isWebView = true;
endif;

if(!$isWebView){
//    header("Location: https://letmegooglethat.com/?q=almustaxi");
   //  exit;
}
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
if(isset($_GET['newpass'])){
     $Smarty->assign('newpass', "Паролата ви е променена успешно! Можете да влезете в профила си!");
}
if(isset($_COOKIE['emailalmus']) && isset($_COOKIE['passwordalmus'])){
  
    $Basic->logIn($_COOKIE['emailalmus'], $_COOKIE['passwordalmus'], 1);
}

$redirectURL = "http://almus.semicolondi.com/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);


$Smarty = new Smarty();
$Smarty->template_dir='./view/';
$Smarty->compile_dir='./template_c/';

$Smarty->assign('lurl', $loginURL);
$Basic = new Basic();

$Smarty->assign('city', $Basic->getAllCity());

error_reporting(0);



if(isset($_SESSION['user_info'])){
    header("Location: ./controller/home.php");
}




if(isset($_GET['error'])){
    $Smarty->assign('error', $_GET['error']);
}

if(isset($_POST['password'])){

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $rememberme = filter_input(INPUT_POST, 'remember');

    if(strlen($username)<4 || strlen($password)<7){
         header("Location: ./index.php?error=1Грешно име или парола!");
    }else{
        if($Basic->logIn($username, $password, $rememberme) == true){
             if(isset($_POST['remember'])){
             $rem = filter_input(INPUT_POST, 'remember');
      
             setcookie('emailalmus', $username, time() + (10 * 365 * 24 * 60 * 60));
              setcookie('passwordalmus', $password, time() + (10 * 365 * 24 * 60 * 60));
       
        }
       // $_SESSION['login'] = true;
        header("Location: ./controller/home.php");
    }else{
        
        session_destroy();
         header("Location: ./index.php?error=2Грешно име или парола!");
    }

    }
    



}

//print_r($_COOKIE);
//print_r($_SESSION['userData']);
//$Smarty->assign('doctors', $doctors);
$Smarty->display('index.tpl');
