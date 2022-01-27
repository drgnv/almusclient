<?php
/* Smarty version 3.1.32, created on 2020-06-04 13:10:22
  from '/var/www/html/luber/view/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ed8c88e06c138_88691309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a16d53a020afd8a55c44cf2efe3c6b734a7eda8' => 
    array (
      0 => '/var/www/html/luber/view/register.tpl',
      1 => 1591265421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed8c88e06c138_88691309 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Luber Вход</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro'>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="screen">
    <div style="text-align: center; font-size: 26px"><img src="./images/luber.png" width="200" height="100">
        <a href="./index.php" style="padding: 2px; text-decoration: none; background-color: darkorange; color: white;">Назад към ВХОД</a>
        <form action="" method="post">
            <input type="text" name="names" placeholder="Имена" style="width: 90%; height: 20px; border-color: darkorange; text-align: center">
            <input type="email" name="mail" placeholder="Mail" style="width: 90%; height: 20px; border-color: darkorange; text-align: center">
            <input type="text" name="phone" placeholder="Телефон" style="width: 90%; height: 20px; border-color: darkorange; text-align: center">
            <input type="text" name="password" placeholder="Парола" style="width: 90%; height: 20px; border-color: darkorange; text-align: center">
            <input type="submit" name="register" value="Регистрирай се" style="width: 90%; background-color: darkorange;color: white;border: none;height: 25px">

        </form>
        <?php if (isset($_smarty_tpl->tpl_vars['mm']->value)) {?>
            <p style="font-size: 14px; background-color: red;color:white">  <?php echo $_smarty_tpl->tpl_vars['mm']->value;?>
</p>
        <?php }?>
    </div>


</div>
<!-- partial -->
<?php echo '<script'; ?>
  src="../js/login.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
