<?php
/* Smarty version 3.1.32, created on 2021-04-08 23:21:11
  from '/home/vsyakadu/almus.semicolondi.com/view/rate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_606f65b7a449d6_61970546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fab525e1652fe896680a9b06a03bf64dd7cc6ef0' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/rate.tpl',
      1 => 1617913233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606f65b7a449d6_61970546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<head>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"><?php echo '</script'; ?>
>
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

        @charset "UTF-8";
        .star-cb-group {
            /* remove inline-block whitespace */
            font-size: 0;
            /* flip the order so we can use the + and ~ combinators */
            unicode-bidi: bidi-override;
            direction: rtl;
            /* the hidden clearer */
        }
        .star-cb-group * {
            font-size: 1rem;
        }
        .star-cb-group > input {
            display: none;
        }
        .star-cb-group > input + label {
            /* only enough room for the star */
            display: inline-block;
            overflow: hidden;
            text-indent: 9999px;
            width: 1em;
            white-space: nowrap;
            cursor: pointer;
        }
        .star-cb-group > input + label:before {
            display: inline-block;
            text-indent: -9999px;
            content: "☆";
            color: #888;
        }
        .star-cb-group > input:checked ~ label:before, .star-cb-group > input + label:hover ~ label:before, .star-cb-group > input + label:hover:before {
            content: "★";
            color: #e52;
            text-shadow: 0 0 1px #333;
        }
        .star-cb-group > .star-cb-clear + label {
            text-indent: -9999px;
            width: 0.5em;
            margin-left: -0.5em;
        }
        .star-cb-group > .star-cb-clear + label:before {
            width: 0.5em;
        }
        .star-cb-group:hover > input + label:before {
            content: "☆";
            color: #888;
            text-shadow: none;
        }
        .star-cb-group:hover > input + label:hover ~ label:before, .star-cb-group:hover > input + label:hover:before {
            content: "★";
            color: #e52;
            text-shadow: 0 0 1px #333;
        }

        :root {
            font-size: 2em;
            font-family: Helvetica, arial, sans-serif;
        }

        body {
            background: #333;
            color: #888;
        }

        fieldset {
            border: 0;
            background: #222;
            width: 5em;
            border-radius: 1px;
            padding: 1em 1.5em 0.9em;
            margin: 1em auto;
        }

        #log {
            margin: 1em auto;
            width: 5em;
            text-align: center;
            background: transparent;
        }

        h1 {
            text-align: center;
        }


    </style>
   
   
            
                     <div style="background-color: #1b1c13;margin: 3px;padding: 3px; opacity: 0.9;color:white;width: 100%;height: 100%">
                        <p style="color: yellow; font-size: 18px;text-align: center;">Как пътувахте?</p>
                        <b>Оценете шофьор:</b> <?php echo $_smarty_tpl->tpl_vars['driver']->value[0]['driver_names'];?>

                        <form action="./rate.php?driver=<?php echo $_smarty_tpl->tpl_vars['driver']->value[0]['driver_id'];?>
&order_id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
&finished_order=1" method="post">
                        
                            <fieldset>
    <span class="star-cb-group" >
    <input type="radio" id="rating-5" name="rating" value="5" onchange='this.form.submit();' /><label for="rating-5">5</label>
      <input type="radio" id="rating-4" name="rating" value="4" onchange='this.form.submit();' /><label for="rating-4">4</label>
      <input type="radio" id="rating-3" name="rating" value="3" onchange='this.form.submit();' /><label for="rating-3">3</label>
      <input type="radio" id="rating-2" name="rating" value="2" onchange='this.form.submit();' /><label for="rating-2">2</label>
      <input type="radio" id="rating-1" name="rating" value="1" onchange='this.form.submit();' /><label for="rating-1">1</label>
    </span>
                                <?php echo $_smarty_tpl->tpl_vars['driver']->value[0]['driver_rating'];?>

                            </fieldset>
                        </form>
<?php echo '<script'; ?>
>var logID = "log",
        log = $('<div id="' + logID + '"></div>');
    $("body").append(log);
    $('[type*="radio"]').change(function () {
        var me = $(this);
        log.html(me.attr("value"));
    });

    <?php echo '</script'; ?>
>
                    </div>
                </div>
      
      
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php }
}
