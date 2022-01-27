<?php
/* Smarty version 3.1.32, created on 2021-12-18 14:01:55
  from '/home/vsyakadu/almus.semicolondi.com/view/viewframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61bdcdb3f2c632_67910975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfdd911d6deeae0bb7a4f2ec5759599ad1f6d32a' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/viewframe.tpl',
      1 => 1639828915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bdcdb3f2c632_67910975 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
 <div style="background-color: #474747;color:white;padding: 5px;border-radius:10px;text-align: center;margin: 5px;font-size:17px">
                    <p><b>Очаквате такси на</b></p>
                    <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 <p style="margin: 5px;">

                  
                  </div>
   <?php }?>
                    <div
                            <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                                style="background-color: greenyellow;padding: 5px;text-align: center; margin: 5px;font-size:17"
                            <?php } else { ?>
                                style="background-color:#3db8ff;padding: 30px;text-align: center; margin: 5px;margin-top:150px; font-size:17;border-radius:10px"
                            <?php }?>
                            >
                        <p><b>
                                <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                                    Търсим шофьор за вас! Моля, изчакайте секунда... 
                                 
                                <?php }?>
                                
                                  <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 3) {?>
                                    
                                <?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 4) {?>
                                    Поръчката е отказана
                                <?php }?>
                            </b></p>

                        <?php if (!is_array($_smarty_tpl->tpl_vars['os']->value['driver_info'])) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['ref']->value)) {?>
                                <br><a href="./home.php"  target="_PARENT"
                                style="color:black;background-color: greenyellow;padding: 10px; text-decoration: none; font-size:17px;border-radius:10px;margi:20px">
                                   🔙 Върнете се в началото</a>
                                <?php } else { ?>
<p><br>
    <a href="./view_order.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
&refuse=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
" 
    style="background-color: red; text-decoration: none; padding: 5px; color:white;border-radius:10px;opacity:0.8;">Откажи поръчката</a></p>
                             
                             <div>
                             
                             
                             <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                             
                             
                             
                             <?php }?>
                             
                             </div>
                             
                             
                               
                                <?php }?>

                            <?php } else { ?>
                            <audio autoplay>
                                <source src="../images/n.mp3" type="audio/mpeg">
                            </audio>

                            <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                            
                            <?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 2) {?>
                            <p style="color:white"><b><?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_names'];?>
</b>, пътува към вас с <b><?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_car'];?>
</b></p>
                            <?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 3) {?>
                            <p>Таксиметровия шофьор приключи пътуването</p>
                            <?php }?>
                            
                           <p style="text-align:center">
                           
                            <a style="width:100%;background-color:#20bd5f;color:white; text-decoration:none;font-size:25px;padding:10px;border-radius:35px" href="tel: <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_phone'];?>
" >✆ НАБЕРИ</a>
                       
                       </p>
                                
                                
                            <?php }?>
                            

                    </div>
                 <style>
.thought {
  display:flex;
  background-color:#efff12;
  padding:10px;
  border-radius:30px;
  min-width:40px;
  max-width:220px;
  min-height:40px;
  margin:20px;
  position:relative;
  align-items:center;
  justify-content:center;
  text-align:center;
}
.thought:before,
.thought:after {
  content:"";
  background-color:#8dcf13;
  border-radius:50%;
  display:block;
  position:absolute;
  z-index:-1;
}
.thought:before {
  width:44px;
  height:44px;
  top:-12px;
  left:28px;
  box-shadow:-50px 30px 0 -12px #fff;
}
.thought:after {
  bottom:-10px;
  right:26px;
  width:30px;
  height:30px;
  box-shadow:40px -34px 0 0 #fff,
             -28px -6px 0 -2px #fff,
             -24px 17px 0 -6px #fff,
             -5px 25px 0 -10px #fff;
  
}</style>
                   <?php if (strlen($_smarty_tpl->tpl_vars['order']->value[0]['ordre_note']) > 2) {?> <p class="thought" >
                       <?php echo $_smarty_tpl->tpl_vars['order']->value[0]['ordre_note'];?>
</p><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 2) {?>  <center> <p style="width:100%;margin:5px"><br>
                            <a href="./rate.php?driver=<?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_id'];?>
&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
"
                               style="text-decoration: none;border-radius:10px; background-color: #ffaa00;color: black;padding: 10px;margin: 5px;">
                                Приключете пътуването</a></p></center><?php }
}
}
