<?php
/* Smarty version 3.1.32, created on 2020-06-09 22:08:26
  from '/var/www/html/luber/view/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5edfde2a3590a3_11696004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59dca06b22d8310943f4d89ede78e67e9fa134af' => 
    array (
      0 => '/var/www/html/luber/view/menu.tpl',
      1 => 1591729692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edfde2a3590a3_11696004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ion-content class="menu-screen">


    <!-- Profile Section -->
    <div class="profile-box">
        <img src="http://audacitus.com/demo/rubyonic-demo-images/demo/profile-image.jpg" alt="" class="profile-box-thumb">
        <div class="profile-box-details">
            <h4 class="profile-name brand-base-text-color"><?php echo $_smarty_tpl->tpl_vars['user_info']->value[0]['user_names'];?>
</h4>
            <h6 class="profile-location brand-base-text-color"><i class="ion-compass"></i> <?php echo $_smarty_tpl->tpl_vars['user_info']->value[0]['user_mail'];?>
</h6>
        </div>
        <i class="profile-settings-icons"></i>
    </div>
    <!-- End Profile Section -->
    <ion-item nav-clear menu-close href="./home.php" class="item item-icon-left brand-base-text-color">
        <i class="icon ion-home"></i>
        Начало
    </ion-item>


    <ion-item nav-clear menu-close href="./your_orders.php" class="item item-icon-left brand-base-text-color">
        <i class="icon ion-android-bookmark"></i>
        Вашите поръчки
    </ion-item>



        <ion-item nav-clear menu-close href="./profile.php" class="item item-icon-left brand-base-text-color">
            <i class="icon ion-person"></i>
            Профил
        </ion-item>
    <ion-item nav-clear menu-close href="./favorite_places.php" class="item item-icon-left brand-base-text-color">
        <i class="icon ion-android-favorite"></i>
        Любими места
    </ion-item>
        <ion-item nav-clear menu-close href="../logout.php" class="item item-icon-left brand-base-text-color">
            <i class="icon ion-log-in"></i>
            Изход
        </ion-item>
    </ion-list>


</ion-content>
</ion-side-menu>
</ion-side-menus><?php }
}
