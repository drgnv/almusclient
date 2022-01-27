<?php
/* Smarty version 3.1.32, created on 2021-12-17 21:16:00
  from '/home/vsyakadu/almus.semicolondi.com/view/your_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61bce1f07b0d21_98723438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e4cae187dc99e34f5fca6447fe3f6b4fb571a45' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/your_orders.tpl',
      1 => 1639768559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61bce1f07b0d21_98723438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vsyakadu/almus.semicolondi.com/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><center><h2>Предишни поръчки</h2></center>
                <div class="padding feed ruby" style="margin: 3px;padding: 3px; opacity: 0.9;color:white;width: 99%;height: 100%">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>

                    <div  <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 1 || $_smarty_tpl->tpl_vars['order']->value['status'] == 2) {?>onclick="window.location='view_order.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
';"<?php }?>
                         style="background-color:#0384fc;margin:10px;padding:5px;border-radius:5px">
                        <!--Активна търси се шофьор-->
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 1) {?><img src="../images/active.png" width="20" height="20" title="Активна"><?php }?>
                       <!--Намерен е шофьор-->
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 2) {?><img src="../images/taxi-driver.png" width="20" height="20" title="Отказана"><?php }?>
                        <!--Приключена успешно-->
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 3) {?><img src="../images/3-512.png" width="20" height="20" title="Приключена"><?php }?>
                        <!--отказана от клиент-->
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 4) {?><img src="../images/inactive.png" width="20" height="20" title="Отказана"><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 1 || $_smarty_tpl->tpl_vars['order']->value['status'] == 2) {?>
                        <a style="text-decoration: none;color:yellow;" href="view_order.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
"><?php }?>
                        ул.<?php echo $_smarty_tpl->tpl_vars['order']->value['start_destiantion'][0];?>

                         | <?php echo $_smarty_tpl->tpl_vars['order']->value['time'][0];?>
:<?php echo $_smarty_tpl->tpl_vars['order']->value['time'][1];?>
ч. | <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['date']);?>

                            <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 1 || $_smarty_tpl->tpl_vars['order']->value['status'] == 2) {?></a><?php }?>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php echo '<script'; ?>
 id="search.html" type="text/ng-template">
                    <ion-view view-title="Search">
                        <ion-content>
                            <h1>Search</h1>
                        </ion-content>
                    </ion-view>
    <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
