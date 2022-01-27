<?php
/* Smarty version 3.1.32, created on 2022-01-25 19:06:48
  from '/home/vsyakadu/almus.semicolondi.com/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61f02e28aeeba7_80007823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0096ba43c26ca6d6892eb782adcec3d430fffb' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/index.tpl',
      1 => 1643127809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f02e28aeeba7_80007823 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Almus Taxi</title>
  <link rel="stylesheet" href="../lstyle.css">

</head>
<body style="background-image: url('./view/Taxi2.jpg');">
<!-- partial:index.partial.html -->
<!-- Designed by Jaysen Henderson. Developed by me for fun. Source: https://dribbble.com/shots/3686055-hello-login-Ui -->

<div class="wrapper11" style="border:none;">
  
  <!--  Header  -->
  <header class="section header" style="border:none;">
    
    <div class="header__text1" style="padding:0;margin:0;border:none;">
      <img src="./images/luber.png" style="width: 150px; height: 150px; position: relative; top: 30px; ">
      <p style="color:black;font-size:30px;margin-bottom:-10px">T A X I</p>
 <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
 <p style="background-color: red;color:white; padding:1px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
 <?php }?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['reg']->value)) {?>
 <p style="background-color: green;color:white; padding:1px;"><?php echo $_smarty_tpl->tpl_vars['reg']->value;?>
</p>
 <?php }?>
 <?php if (isset($_smarty_tpl->tpl_vars['newpass']->value)) {?>
 <p style="background-color: green;color:white; padding:1px;"><?php echo $_smarty_tpl->tpl_vars['newpass']->value;?>
</p>
 <?php }?>
    </div>
  </header>

    <!--  Sign Up  -->
    <section class="section sign-up" style="padding:0;margin:0;">
        <br><br>
      <form action="./register.php" method="POST">
       <input required type="text" name="names" placeholder="Име" style="padding-bottom: 0px; height:55px; font-size:22px;opacity: 0.5;background-color:#171717;color:white;"><br><br>
            <input required type="tel" name="phone" placeholder="Телефон" style="padding-bottom: 0px; height:55px; opacity: 0.5;font-size:22px;background-color:#171717;color:white;"><br><br>
            <input required type="text" name="password" placeholder="Парола" style="padding-bottom: 0px; height:55px; opacity: 0.5;font-size:22px;background-color:#171717;color:white;opacity: 0.5;">
            <select style="padding-bottom: 0px; height:55px; opacity: 0.5;font-size:22px;background-color:#171717;color:white;opacity: 0.5;width:100%;margin-top:10px" name="city" required>
                <option selected disabled required>Избери град</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['city']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['bgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['city'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="hidden" style="" name="register" value="Регистрирай се" >
        
        <button style="font-size:22px;color:white; background-color:#69a7d6; padding:5px;margin:5px;border-radius:5px">Регистрирай се</button>
       <center>  <p class="opposite-btn2" style="background-color: #dea527;color: white;height:55px; font-size:22px;width:80%;border-radius: 10px; font-family:Arial; position: relative; padding-top:10px">Вече имаш профил?</p>  </center>
        <hr>
       <center>  <a href="https://almus.semicolondi.com/rights.php" style="text-decoration: none; color:white; font-size:19px">С натискането на бутон "Регистрирай се" Вие приемате  общите правила</a>
       </center>
      </form>
    </section>
    
    <!--  Sign In  -->
    <section class="section sign-in" style="padding:0;margin:0;border:none;">
      <form action="./index.php" method="post">
           <input class="info1" id="username" type="tel" name="username" placeholder="Tелефон" style="padding-bottom: 0px; height:60px; font-size:22px;background-color:#171717; position: relative;opacity: 0.5; top: 30px;" <?php if (isset($_smarty_tpl->tpl_vars['m']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
" <?php }?>>
        <br><br><input class="info1" id="password" type="password" name="password" placeholder="Парола" style="padding-bottom: 0px; height:60px;font-size:22px;background-color:#171717; opacity: 0.5;position: relative; top: 50px;">
    <br>  <input checked type="checkbox" name="remember" value="1" style="width:20px;height:20px; position: relative; top: 60px;"><b style="color:white; font-size:14px; position: relative; top: 55px;">Запомни ме</b><center>
    <br>   <button style="background-color: #dea527;color: white;height:55px; font-size:22px;width:80%;border-radius: 10px; font-family:Arial; position: relative; top: 50px;" id="login" type="submit" >Вход</button>
       
            <center>
             
   <!-- <br><br><br><br></center>
            <a href="../controller/guest.php" style="background-color: #dea527; height:55px; width:80%; border-radius: 10px; border:1px solid #18ab29; display: inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:22px; padding: 16px 31px; text-decoration:none; text-shadow:0px 1px 0px #2f6627;">Влез като гост</a>-->
            <br>
       </center><br><br> <p class="opposite-btn1" style="font-size:22px;color:white; background-color:#69a7d6; padding:5px;margin:5px;border-radius:5px">
       
       
       
       Регистрация
       
       </p
        <center><a href="./controller/lostpass.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">ЗАБРАВЕНА ПАРОЛА</a>
     </center>
       <center><a href="https://almus.semicolondi.com/rights.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">Общи правила</a>
     </center> </form>
    </section>
</div>




<!-- partial -->
  <?php echo '<script'; ?>
  src="../lscript.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
