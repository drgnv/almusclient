<?php
error_reporting(E_ERROR);
session_start();
if(isset($_SESSION['user_info'])){
    header("Location: ./controller/home.php");
}
include './libs/Smarty.class.php';
include_once './model/Basic.php';
require './PHPMailer-5.2-stable/PHPMailerAutoload.php';


$Smarty = new Smarty();
$Smarty->template_dir='./view/';
$Smarty->compile_dir='./template_c/';

$Basic = new Basic();
$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'hertz.superhosting.bg';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'novadres@almustaxi.semicolondi.com';                 // SMTP username
$mail->Password = 'TRfL711mMcooL';                           // SMTP password
#$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to


if(isset($_GET['error'])){
    $Smarty->assign('error', $_GET['error']);
}

    if(isset($_POST['register'])){

       
            if(strlen($_POST['password'])<8){
                header('Location: ./register.php?error=Паролата трябва да бъде дълга поне 8 символа. Опитайте отново');
            }else{
                if(strlen($_POST['phone'])<10 || strlen($_POST['phone'])>10){
                    header('Location: ./register.php?error=Моля въведете валиден телефонен номер');
                }else{
                    if(strlen($_POST['names'])<3){
                        header('Location: ./register.php?error=Въведете валидно име от поне 3 символа');
                    }else{
                     $data['names'] = trim($_POST['names']);
                     $data['mail'] = $_POST['names']."@".$_POST['phone'];
                     $data['phone'] = trim($_POST['phone']);
                     $data['city'] = trim($_POST['city']);
                     if($Basic->checkIfPhoneExist($data['phone'])){
                         header('Location: ./register.php?error=Този телефон вече е регистриран. Опитайте отново');
                     }else{
                           $data['password'] = $_POST['password'];
                     
                     
$mail->setFrom('novadres@almustaxi.semicolondi.com', 'ALMUS TAXI');

$mail->addAddress($data['mail'], 'AlmusDriver');     //sssslssllssl Add a recipient
    

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'ALMUS TAXI Регистрация';
$mail->Body    = 'Вие успешно се регистрирахте в AlmusTaxi. Потребителско име:'.$data['mail'].'; Телефон: '.$data['phone'];
$mail->AltBody = 'Вие успешно се регистрирахте в AlmusTaxi.';

                        setcookie('emailalmus', $data['phone'], time() + (10 * 365 * 24 * 60 * 60));
              setcookie('passwordalmus', $data['password'], time() + (10 * 365 * 24 * 60 * 60));
              $Basic->register($data);
        /*      $url = "https://trigger.macrodroid.com/2efce25b-c6e2-46e0-8710-dba210d7a369/newacc?fbclid=IwAR1tMIxMfmieTgxaxYlsRpUJRO2KBIyGYi-9eLt9tYeOXxjIn1fn6rFvy0Q";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);*/
                     $Basic->logIn($data['phone'], $data['password'], '1');
                     
                     
                      
              
                     header('Location: ./index.php?reg=Вие се регистрирахте успешно!&m='.$data['mail']);
                     }
                   
                     
                     
                     
                     
                    }
                    
                }
                
            }
        

    }





//$Smarty->assign('doctors', $doctors);
$Smarty->display('index.tpl');
