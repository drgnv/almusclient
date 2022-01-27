<?php
/* Smarty version 3.1.32, created on 2020-06-11 16:35:55
  from '/home/vsyakadu/almus.semicolondi.com/view/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ee2333b88cf48_45949558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbf84bc7f1807ad776377503df8452ad7b930ce6' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/register.tpl',
      1 => 1591265420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2333b88cf48_45949558 (Smarty_Internal_Template $_smarty_tpl) {
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
