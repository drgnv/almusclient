<?php
error_reporting(E_ERROR);
session_start();

include '../libs/Smarty.class.php';
include_once '../model/Basic.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


    
$Basic = new Basic();

    if(isset($_COOKIE['pp2'])){
       print_r($Basic->getOrdersByPhone($_COOKIE['ph']));
       echo 1;
    }
if(isset($_POST['address'])){
    
    if(strlen($_POST['phone']) > 9 AND strlen($_POST['phone']) < 14){
   
   if(strlen($_POST['phone']) == 10 AND strstr($_POST['phone'], '0')){
      // echo 1;
    $valid_phone=123;
   }
   
   if(strlen($_POST['phone']) == 13 AND strstr($_POST['phone'], "359")){
       $valid_phone=123;
      // echo 2;
   }
}
    
    
    
    
    
    
    
    if(strlen($_POST['address'])>4){
        if(strlen($_POST['name'])>2){
        if($valid_phone == 123){
            
         $data['user_id'] =376;
             $data['street'] = $_POST['address']." за ".$_POST['name']." Телефон ".$_POST['phone'];
    setcookie('pp2', $_POST['phone'], time()+60*60*365);
             $Basic->setNewOrder($data);
              
              $Smarty->assign('noerror', "Вашата поръчка се бработва. Очаквайте обаждане на посочения телефон");
           // header("Location: ./vo.php?street=".$data['street']);
             
        }else{
            $Smarty->assign('error', "Моля въведете валиден телефон");
        }
     }else{
          $Smarty->assign('error', "Моля въведете валидно име");
     }
    }else{
         $Smarty->assign('error', "Моля въведете валиден адрес");
    }
    
    
}


$Smarty->display('guest.tpl');
