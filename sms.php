<?php
error_reporting(E_ERROR);
session_start();
include_once './model/Basic.php';
$Basic = new Basic();
$phones = $Basic->getInactiveUsers();
$phone = $phones[0]['user_phone']
$_GET[$phone];