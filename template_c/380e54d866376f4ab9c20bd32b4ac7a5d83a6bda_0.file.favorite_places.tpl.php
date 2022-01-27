<?php
/* Smarty version 3.1.32, created on 2020-06-04 12:48:17
  from '/var/www/html/luber/view/favorite_places.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ed8c361cf0e08_54004794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380e54d866376f4ab9c20bd32b4ac7a5d83a6bda' => 
    array (
      0 => '/var/www/html/luber/view/favorite_places.tpl',
      1 => 1591264097,
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
function content_5ed8c361cf0e08_54004794 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div style="text-align: center; background-color: #1b1c13; padding: 3px; margin: 3px; width: 100%;opacity: 0.9;color:white;">
                        <b>Добави ново любимо място</b>
                    <form action="./favorite_places.php" method="post">
                        <input type="text" name="street" placeholder="Улица" style="width: 100%"><br>
                        <input type="number" name="number" placeholder="№" style="width: 100%"><br>
                        <input type="number" name="post_code" placeholder="ПК" size="1" style="width: 100%"><br>
                        <input type="submit" name="add_place" value="★Добави любимо място" style="width: 100%; background-color: #2b2b2b; color: yellow">
                    </form></div>
                    <table style="width: 100%;" class = "gfg" >
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fav_pl']->value, 'place');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
?>
                            <tr style=" border-spacing:0 15px;">
                                <td style="text-align: center; padding: 5px; background-color: #1b1c13;color:yellow;opacity: 0.9 ">★
                                        ул.<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
 №<?php echo $_smarty_tpl->tpl_vars['place']->value['street_number'];?>
 ПК:<?php echo $_smarty_tpl->tpl_vars['place']->value['post_code'];?>

                                    <a href="./favorite_places.php?delete=<?php echo $_smarty_tpl->tpl_vars['place']->value['fav_place_id'];?>
"><img src="../images/delete.png" width="25" height="25" align="right"></a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
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
