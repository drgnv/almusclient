<?php
/* Smarty version 3.1.32, created on 2021-02-02 10:32:23
  from '/home/vsyakadu/almus.semicolondi.com/view/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60190e17173577_37074335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2912ac6020ce1ec719219fff69a77c6d37f59c27' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/menu.tpl',
      1 => 1612254740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60190e17173577_37074335 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ion-content class="menu-screen">


    <!-- Profile Section -->
    <div class="profile-box">
        <?php if (strlen($_smarty_tpl->tpl_vars['profile_pic']->value) > 5) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['profile_pic']->value;?>
" alt="" class="profile-box-thumb">
        <?php }?>
        <div class="profile-box-details">
            <h4 class="profile-name brand-base-text-color"><?php echo $_smarty_tpl->tpl_vars['user_info']->value[0]['user_names'];?>
</h4>
            <h6 class="profile-location brand-base-text-color"><i class="ion-compass"></i> <?php echo $_smarty_tpl->tpl_vars['user_info']->value[0]['user_mail'];?>
</h6>
              <h6 class="profile-location brand-base-text-color"><i class="ion-star"></i> <?php echo $_smarty_tpl->tpl_vars['user_info']->value[0]['user_rating'];?>
</h6>
            <h6 class="profile-location brand-base-text-color"><i class="ion-android-people"></i> <?php echo $_smarty_tpl->tpl_vars['user_info']->value[0]['user_rating_count'];?>
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
        </ion-item>
      
    </ion-list>


</ion-content>
</ion-side-menu>
</ion-side-menus><?php }
}
