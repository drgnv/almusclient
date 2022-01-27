<?php
/* Smarty version 3.1.32, created on 2020-06-11 10:12:34
  from '/var/www/html/luber/view/change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ee1d962a5bea6_45924813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f929cb296b64c9528ae9ea95c9a1ff1917605eb' => 
    array (
      0 => '/var/www/html/luber/view/change_password.tpl',
      1 => 1591859552,
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
function content_5ee1d962a5bea6_45924813 (Smarty_Internal_Template $_smarty_tpl) {
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

                    <div style="text-align: center; background-color: #1b1c13; padding: 3px; margin: 3px; width: 100%; color:white;opacity: 0.9"><center>
                      <p>Промени паролата</p>
                        <form action="./change_password.php" method="post">
                            <input type="password" name="old_password" placeholder="Стара парола" style="width: 90%;margin: 5px;">
                            <input type="password" name="new_password" placeholder="Нова парола" style="width: 90%;margin: 5px;">
                            <input type="password" name="new_password2" placeholder="Повтори нова парола" style="width: 90%;margin: 5px;">
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_prefixVariable1 = ob_get_clean();
if (isset($_prefixVariable1)) {?>
                                <p style="background-color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                            <?php }?>
                            <input type="submit" name="change_password" value="Промени парола" style="width: 90%; " >
                        </form>
                        </center></div>
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
