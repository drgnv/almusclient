<?php
/* Smarty version 3.1.32, created on 2022-01-20 09:30:57
  from '/home/vsyakadu/almus.semicolondi.com/view/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61e90fb16b8757_16037845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38872a5bff7d44b9add5e595bbf0528ee511dc71' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/profile.tpl',
      1 => 1642663855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e90fb16b8757_16037845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { border:1px solid; background:#ccc; }
    </style>
 <p
 <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
              style="font-size:19px;text-align:center;margin:30px; color:black"             <?php } else { ?>   
              style="font-size:19px;text-align:center;margin:30px"
        <?php }?>
 
>Редактирайте профила си</p>
                <a href="../bolnica.php">tuk</a>
                    <div  
                    <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
                          style="margin: auto;
                  border-radius: 25px;
  width: 90%;
  border: 1px ridge #adadad;
 background-color:#242424;
  padding: 10px;"
                     <?php } else { ?>
                          style="margin: auto;
                  border-radius: 25px;
  width: 90%;
  border: 1px ridge #adadad;
 background-color:#e4ecf2;
  padding: 10px;"
                     <?php }?>
                    
               >
               <center>
               
               
               
           <!--    <div >
    
    <form method="POST" action="./profile.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <input type="submit" name="img" value="Запиши" class="btn btn-success">
            </div>
        </div>
    </form>
</div>-->
  
<!-- Configure a few settings and attach camera 
<?php echo '<script'; ?>
 language="JavaScript">
    Webcam.set({
        width: 100,
        height: 100,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
<?php echo '</script'; ?>
>
               -->
                  
                   <form  action="./profile.php" method="post">
                    <input style="border: 1px solid #ccc;border-radius: 4px;padding: 25px;margin: 25px;width: 90%" type="text" name="names" value="<?php echo $_smarty_tpl->tpl_vars['user_info2']->value[0]['user_names'];?>
" placeholder="Имена" required>
                    <input style="padding: 3px;margin: 3px;width: 90%" type="hidden" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['user_info2']->value[0]['user_mail'];?>
" placeholder="Мейл" required>
                    <input style="border: 1px solid #ccc;border-radius: 4px;padding: 25px;margin: 25px;width: 90%" type="tel" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user_info2']->value[0]['user_phone'];?>
" placeholder="Телефон"  required>
                   <select name="city" style="padding: 10px;margin: 3px;width: 90%;font-size:15px">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['city']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['bgid'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value['bgid'] == $_smarty_tpl->tpl_vars['user_info2']->value[0]['city_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['city'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <select name="theme" style="padding: 10px;margin: 3px;width: 90%;font-size:15px;display:none">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?> selected<?php }?>>Тъмна тема</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 1) {?> selected<?php }?>>Светла тема</option>
                    </select>
                      <br>
<br>
                    <input  style="width: 80%; background: radial-gradient(#387989, #1b6da6);
  background-repeat: no-repeat;color:#ebff36;border-radius: 12px;border: none;-webkit-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);
box-shadow: 3px 3px 18px -5px rgba(0,0,0,0.75);margin: 3px;padding:12px;font-size:20px" type="submit" name="save" value="Запишете промените" >
<p><br><a href="./change_password.php" 
 <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
 style="color: white; text-decoration: none;"
 <?php } else { ?>
 style="color: blue; text-decoration: none;"
 <?php }?>
>Промени паролата</a></p

<p><br><a href="../logout.php" 
 <?php if ($_smarty_tpl->tpl_vars['user_info2']->value[0]['theme'] == 0) {?>
 style="color: white; text-decoration: none;"
 <?php } else { ?>
 style="color: blue; text-decoration: none;"
 <?php }?>
>Изход</a></p>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['ok']->value;
$_prefixVariable1 = ob_get_clean();
if (isset($_prefixVariable1) && $_smarty_tpl->tpl_vars['ok']->value == true) {?>
                    <div 
                    
                    
                    
                    style="background-color: #00ff5e;padding: 8px;margin: 5px;border-radius:10px"> Промените са записани успешно</div>
                    <?php }?>
                   </form></center>
                    </div>
                </div>
                

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
