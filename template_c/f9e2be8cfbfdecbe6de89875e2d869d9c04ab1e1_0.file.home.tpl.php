<?php
/* Smarty version 3.1.32, created on 2020-06-11 09:40:29
  from '/var/www/html/luber/view/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ee1d1ddc61aa3_84438218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e2be8cfbfdecbe6de89875e2d869d9c04ab1e1' => 
    array (
      0 => '/var/www/html/luber/view/home.tpl',
      1 => 1591857628,
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
function content_5ee1d1ddc61aa3_84438218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<head>
    <style>
        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active, .collapsible:hover {
            background-color: #555;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }
    </style>
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
                <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
                    <p style="background-color: green;padding: 5px; color:white; text-align: center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                <?php }?>
                    <table style="width: 100%;" class = "gfg" >
                        <p style="text-align: center; background-color: #a2a2a2; padding: 3px; margin: 3px; width: 100%"

                        >Избери от любимите си адреси: </p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fav_pl']->value, 'place');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
?>
                        <tr style=" border-spacing:0 15px;">
                            <td style="text-align: center; padding: 5px; background-color: #1b1c13; opacity: 0.9;color: yellow">★
                                <a href="./get_taxi.php?street=<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
&number=<?php echo $_smarty_tpl->tpl_vars['place']->value['street_number'];?>
&post_code=<?php echo $_smarty_tpl->tpl_vars['place']->value['post_code'];?>
"
                                style="color: #dea527; text-decoration: none"
                                   onclick="return confirm('Сигурни ли сте, че искате да повикате такси на ул.<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
 №<?php echo $_smarty_tpl->tpl_vars['place']->value['street_number'];?>
 ПК:<?php echo $_smarty_tpl->tpl_vars['place']->value['post_code'];?>
?')"  >
                                ул.<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
 №<?php echo $_smarty_tpl->tpl_vars['place']->value['street_number'];?>
 ПК:<?php echo $_smarty_tpl->tpl_vars['place']->value['post_code'];?>

                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>





                <div style="text-align: center; background-color: #1b1c13; padding: 3px; margin: 3px; width: 100%; opacity: 0.9; color: white">
                    <b>или въведи друг адрес</b>
                    <br><br><center>
                        <form action="./get_taxi.php" method="get">
                    <input type="text" name="street" placeholder="Улица" style="width: 100%"><br>
                    <input type="number" name="number" placeholder="№" style="width: 100%"><br>
                    <input type="number" name="post_code" placeholder="ПК" size="1" style="width: 100%"><br>
                            <input type="submit" name="call_taxi" value="ПОВИКАЙ ТАКСИ" style="width: 100%; background-color: #dea527">
                </form></center>
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
