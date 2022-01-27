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



 $drivers_links = $Basic->getDriversLinks();
$Smarty->assign( 'dl',  $drivers_links);



if(isset($_SESSION['current_order_id'])){
    $_GET['order_id'] = $_SESSION['current_order_id'];
   $os=$Basic->checkOrderStatus($_GET['order_id']);
    $Smarty->assign('os', $os);

    if(isset($_GET['refuse'])){
        $Basic->refuseOrder($_GET['refuse']);

        $Smarty->assign('ref', $_GET['refuse']);
    }

$order_id = $_GET['order_id'];
$order = $Basic->getOrderById($order_id);
//print_r($order);
$address = explode('-', $order[0]['start_destiantion']);
$end_address = explode('-', $order[0]['end_destination']);
$date = explode('-', $order[0]['date']);
$time = explode('-', $order[0]['time']);


$Smarty->assign('bagaj', $order[0]['bagaj']);
$Smarty->assign('order', $order);
$Smarty->assign('address', $address[0]);
$Smarty->assign('num', $address[1]);
$Smarty->assign('post_code', $address[2]);

$Smarty->assign('end_address', $end_address[0]);
$Smarty->assign('end_num', $end_address[1]);
$Smarty->assign('end_post_code', $end_address[2]);
$Smarty->assign('date', $date);
$Smarty->assign('time', $time);

$os=$Basic->checkOrderStatus($_GET['order_id']);
    $Smarty->assign('os', $os);
   //print_r($os);
    if(is_array($os['driver_info'])){

    }else{
        $os['driver_info'] = 0;
    }

    if(!is_array($os['driver_info'])){
       
            header('Refresh: 10');
        
        
    }

}




$noti = $Basic->getDriversLinks();
if($os['status'] == 1){

echo "<form style=\"display:none\"  method=\"GET\" action=\"https://wirepusher.com/send\" target=\"my_iframe\" id=\"myform\">
  
  <input type=\"text\" name=\"id\" value=\"";
   foreach($noti as $n){ 
      if(strlen($n['driver_notifier'])>3 && $n['ava'] == 1){
          echo $n['driver_notifier'].',';
      }
  
  }
  $tt = date('');
  echo "\">
  <input type=\"text\" name=\"title\" value=\"AlmusTaxi\">
  <input type=\"text\" name=\"message\" value=\"".$tt." НОВА ПОРЪЧКА! МОЛЯ ОТВОРЕТЕ ПРИЛОЖЕНИЕТО ЗА ДА Я ПРЕГЛЕДАТЕ\">
  
  <input type=\"submit\" value=\"davai\">
    </form>
    
    
    <iframe name=\"my_iframe\" style=\"display:none\" ></iframe>";
    
    
echo "<script type=\"text/javascript\" style=\"display:none\">
  document.getElementById(\"myform\").submit();
</script>";

//header('Refresh: 5');
    
    
}


 if($os['status'] == 3){
            
        }else{
header('Refresh: 1');
}



$Smarty->assign('user_info', $_SESSION['user_info']);

$Smarty->display('viewframe.tpl');