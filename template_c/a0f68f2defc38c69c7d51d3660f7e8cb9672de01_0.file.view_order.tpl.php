<?php
/* Smarty version 3.1.32, created on 2020-06-07 17:03:00
  from '/var/www/html/luber/view/view_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5edcf394d26d96_46788395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f68f2defc38c69c7d51d3660f7e8cb9672de01' => 
    array (
      0 => '/var/www/html/luber/view/view_order.tpl',
      1 => 1591538566,
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
function content_5edcf394d26d96_46788395 (Smarty_Internal_Template $_smarty_tpl) {
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

                <div class="padding feed ruby">

                <div style="background-color: black;color:yellow;padding: 10px;text-align: center;margin: 5px;"">
                    <p><b>Очаквате такси на адрес:</b></p>
                    ул.<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 №<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 ПК:  <?php echo $_smarty_tpl->tpl_vars['post_code']->value;?>
<p style="margin: 5px;"><hr>

                    <?php if (isset($_smarty_tpl->tpl_vars['end_address']->value) && strlen($_smarty_tpl->tpl_vars['end_address']->value) > 3) {?>
                        <b>Крайна точка:</b><br>
                        ул.<?php echo $_smarty_tpl->tpl_vars['end_address']->value;?>
 №<?php echo $_smarty_tpl->tpl_vars['end_num']->value;?>
 ПК:  <?php echo $_smarty_tpl->tpl_vars['end_post_code']->value;?>

                        <?php } else { ?>
                        <a href="./add_end_destination.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
" style="text-decoration:none;background-color: yellow;color: black;padding: 5px">Задайте крайна точка</a>
                        <br> <i>Заявките с крайна дестинация намират такси по-бързо</i></p>
                    <?php }?>
                  </div>

                    <div
                            <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                                style="background-color: greenyellow;padding: 10px;text-align: center; margin: 5px;"
                            <?php } else { ?>
                                style="background-color:#0a9dc7;padding: 10px;text-align: center; margin: 5px; "
                            <?php }?>
                            >
                        <p><b>Статус на поръчката:
                                <?php if ($_smarty_tpl->tpl_vars['os']->value['status'] == 1) {?>
                                    Активна
                                <?php } else { ?>
                                    НЕактивна
                                <?php }?>
                            </b></p>

                        <?php if (!is_array($_smarty_tpl->tpl_vars['os']->value['driver_info'])) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['ref']->value)) {?>
                                <a href="./home.php" style="color:black;background-color: greenyellow;padding: 5px; text-decoration: none">Вие токазахте вашата поръчка. Върнете се в началото!</a>
                                <?php } else { ?>
<p>
    <a href="./view_order.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
&refuse=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
" style="background-color: red; text-decoration: none; padding: 5px; color:white;">Откажи поръчката</a></p>
                                Всеки момент някой от нашите шофьори ще вземе вашата поръчка
                                <?php }?>

                            <?php } else { ?>
                            <audio autoplay>
                                <source src="../images/n.mp3" type="audio/mpeg">
                            </audio>


                            <p>Вашето такси идва насам</p>
                            <b>Вашия шофьор:</b> <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_names'];?>
<br>
                            <b>Пол:</b> <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_gender'];?>
<br>
                            <b>Възраст:</b> <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_age'];?>
<br>
                            <b>Обади се на шофьора:</b>
                            <a href="tel: <?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_phone'];?>
"><img align="" src="../images/call.png" width="35" height="35"></a>
                            <p style="background-color: yellow;margin: 5px"><b>Съобщение:</b> <?php echo $_smarty_tpl->tpl_vars['order']->value[0]['ordre_note'];?>
</p>
                            <a href="./rate.php?driver=<?php echo $_smarty_tpl->tpl_vars['os']->value['driver_info'][0]['driver_id'];?>
&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[0]['order_id'];?>
"
                               style="text-decoration: none; background-color: black;color: yellow;padding: 4px;margin: 4px">
                                Пътуването приключи (Оценете пътуването)</a>
                            <?php }?>

                    </div>
            </ion-content>
        </ion-view>

    <?php echo '</script'; ?>
>

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
