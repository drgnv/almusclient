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

$Smarty->assign('order_id', $_GET['order_id']);

if(isset($_GET['driver'])){



    $driver = $Basic->getDriverById($_GET['driver']);

    $Smarty->assign('driver', $driver);

    if(isset($_POST['rating'])){
        $rating = $_POST['rating'];
        $driver_rating_count = $driver[0]['driver_rating_count'];
        $driver_rating_count2 = $driver[0]['driver_rating_count']+1;
        $driver_rating = $driver[0]['driver_rating'];
       // $new_rating = (($driver_rating * $driver_rating_count)+ $rating)/$driver_rating_count;
        $x1 = $driver_rating * $driver_rating_count;
        $x2 = $x1+$rating;
        $new_rating = $x2/$driver_rating_count2;

        $Basic->updateDriverRating($new_rating,$driver_rating_count2, $_GET['driver'],$_GET['order_id']);

        header('Location: ./viewframe.php');
    }

}


$Smarty->assign('user_info', $_SESSION['user_info']);
$Smarty->display('rate.tpl');