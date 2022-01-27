<?php
/* Smarty version 3.1.32, created on 2021-12-17 09:58:42
  from '/home/vsyakadu/almus.semicolondi.com/view/lostpass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61bc433299ba64_79743442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6033d94e623afa20359aadb0be9ed6821200940d' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/lostpass.tpl',
      1 => 1639727916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bc433299ba64_79743442 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Almus Taxi</title>
  <link rel="stylesheet" href="../lstyle.css">

</head>
<body style="background-image: url('../view/Taxi2.jpg');">
<!-- partial:index.partial.html -->
<!-- Designed by Jaysen Henderson. Developed by me for fun. Source: https://dribbble.com/shots/3686055-hello-login-Ui -->

<div class="wrapper11" style="border:none;">
  
  <!--  Header  -->
  <header class="section header" style="border:none;">
    
    <div class="header__text1" style="padding:0;margin:0;border:none;">
      <img src="../images/luber.png" style="width: 150px; height: 150px; position: relative; top: 30px; ">
      <p style="color:black;font-size:30px;margin-bottom:-10px">T A X I</p>
 <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
 <p style="background-color: red;color:white; padding:1px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
 <?php }?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['reg']->value)) {?>
 <p style="background-color: green;color:white; padding:1px;"><?php echo $_smarty_tpl->tpl_vars['reg']->value;?>
</p>
 <?php }?>
    </div>
  </header>


    <!--  Sign In  -->
    <?php if ($_smarty_tpl->tpl_vars['sendcode']->value == 1) {?>
    
        <section class="section sign-in" style="padding:0;margin:0;border:none;">
      <form action="./lostpass.php" method="post">
           <input class="info1" id="username" type="tel" name="lostp2" placeholder="КОД" style="padding-bottom: 0px; height:60px; font-size:22px;background-color:#171717; position: relative;opacity: 0.5; top: 30px;" <?php if (isset($_smarty_tpl->tpl_vars['m']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
" <?php }?>>
        <br><center>
            <p>Получихте SMS с код за потвърждение. Моля въведете го</p>
    <br>   <button style="background-color: #dea527;color: white;height:55px; font-size:22px;width:80%;border-radius: 10px; font-family:Arial; position: relative; top: 50px;" id="login" type="submit" >Напред</button></center>
       
            <center>
             

            <br>
       </center><br><br>  <center><a href="../index.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">НАЧАЛО</a>
     </center>
       <center><a href="https://almus.semicolondi.com/rights.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">Общи правила</a>
     </center> </form>
    </section>
    <?php } else { ?>
    <section class="section sign-in" style="padding:0;margin:0;border:none;">
      <form action="./lostpass.php" method="post">
           <input class="info1" id="username" type="tel" name="lostp" placeholder="Tелефон" style="padding-bottom: 0px; height:60px; font-size:22px;background-color:#171717; position: relative;opacity: 0.5; top: 30px;" <?php if (isset($_smarty_tpl->tpl_vars['m']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
" <?php }?>>
        <br><center>
    <br>   <button style="background-color: #dea527;color: white;height:55px; font-size:22px;width:80%;border-radius: 10px; font-family:Arial; position: relative; top: 50px;" id="login" type="submit" >Възтанови парола</button></center>
       
            <center>
             

            <br>
       </center><br><br>  <center><a href="../index.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">НАЧАЛО</a>
     </center>
       <center><a href="https://almus.semicolondi.com/rights.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">Общи правила</a>
     </center> </form>
    </section>
</div>



<?php }?>
<!-- partial -->
  <?php echo '<script'; ?>
  src="../lscript.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
