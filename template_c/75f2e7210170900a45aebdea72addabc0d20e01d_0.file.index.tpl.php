<?php
/* Smarty version 3.1.32, created on 2020-06-11 09:27:17
  from '/var/www/html/luber/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ee1cec55c3a82_06533863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f2e7210170900a45aebdea72addabc0d20e01d' => 
    array (
      0 => '/var/www/html/luber/view/index.tpl',
      1 => 1591856834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1cec55c3a82_06533863 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Luber Вход</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro'>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body style="background-color: black">
<!-- partial:index.partial.html -->

    <div style="text-align: center; font-size: 26px;">
        <img src="./images/luber.png" width="150" height="100">

    <form id="sign-in" action="./index.php" method="post">
        <input class="info" id="username" type="text" name="username" placeholder="Потребител">
        <input class="info" id="password" type="password" name="password" placeholder="Парола">
        <input type="checkbox" name="remember" id="remember-me" >
        <label for="remember-me" style="color: #dea527">Запомни ме</label><br><br>
        <button style="background-color: #dea527;color: black" id="login" type="submit">Вход</button>
        <center>
        <a href="./register.php" style="background-color: #dea527;color: black;text-decoration: none;border-radius: 10%;padding: 5px">Регистрирай се</a>
        </center> </form>
    </div>

<!-- partial -->
<?php echo '<script'; ?>
  src="../js/login.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
