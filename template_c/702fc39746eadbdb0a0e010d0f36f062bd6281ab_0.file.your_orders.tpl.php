<?php
/* Smarty version 3.1.32, created on 2020-06-11 09:18:33
  from '/var/www/html/luber/view/your_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ee1ccb996f8e6_67300612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702fc39746eadbdb0a0e010d0f36f062bd6281ab' => 
    array (
      0 => '/var/www/html/luber/view/your_orders.tpl',
      1 => 1591856305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ee1ccb996f8e6_67300612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/luber/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<head>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width:150px;
            text-align:center;
            border:0px ;
            padding:5px

        }
        .geeks {
            border-right:hidden;
        }
        .gfg {
            border-collapse:separate;
            border-spacing:0 10px;
        }
        h1 {
            color:green;
        }
    </style>
    <ion-nav-view></ion-nav-view>

    <?php echo '<script'; ?>
 id="menu.html" type="text/ng-template">
        <ion-side-menus enable-menu-with-back-views="false">
            <ion-side-menu-content >
                <ion-nav-bar class="bar-stable">
                    <ion-nav-back-button>
                    </ion-nav-back-button>

                    <ion-nav-buttons side="left">

                        <button class="button button-icon" menu-toggle="left">
                            <span class="menuButton" ng-class="$ionicSideMenuDelegate.isOpen() ? 'menu-arrowButton' : 'arrow-menuButton'"  ></span>
                        </button>

                    </ion-nav-buttons>
                </ion-nav-bar>
                <ion-nav-view name="menuContent"></ion-nav-view>
            </ion-side-menu-content>

            <ion-side-menu side="left">

                <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="feed.html" type="text/ng-template">
        <!-- Feed Screen - Refer to feed.scss -->
        <ion-view view-title="Luber" hide-nav-bar="true" class="rubyonic-pane feed-screen">
            <!-- Custom Header:
            We did this so we could have a custom bar without
            altering ionic's state/history management.
            Use with 'hide-nav-bar="true"' attribute at line 1: -->
            <div class="bar bar-ruby-header bar-transparent">
                <button class="button ruby-button-clear icon ion-navicon brand-base-text-color" menu-toggle="left">
                    <span class="new-notification-bubble"></span>
                </button>
                <h1 class="title brand-base-text-color"><img src="../images/luber.png" width="90" height="40"></h1>
                <button class="button ruby-button-clear icon ion-android-notifications brand-base-text-color" menu-toggle="right"></button>
            </div>
            <!-- End Custom navbar -->
            <ion-content class="has-header">

                <div class="padding feed ruby" style="background-color: шхите;margin: 3px;padding: 3px; opacity: 0.9;color:white;width: 100%;height: 100%">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>

                    <div  <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == 1 || $_smarty_tpl->tpl_vars['order']->value['status'] == 2) {?>onclick="window.location='view_order.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
';"<?php }?>
                         style="cursor: pointer;opacity: 0.88;background-color: black;margin: 3px;padding: 3px; color:yellow;width: 98%;height: 100%">
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
 №<?php echo $_smarty_tpl->tpl_vars['order']->value['start_destiantion'][1];?>
 ПК:<?php echo $_smarty_tpl->tpl_vars['order']->value['start_destiantion'][2];?>

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
