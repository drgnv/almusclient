<?php
/* Smarty version 3.1.32, created on 2022-01-20 09:31:37
  from '/home/vsyakadu/almus.semicolondi.com/view/home3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61e90fd987c701_04145930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60694b5201094a5bcde703d32e6f39f6301d8e73' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/home3.tpl',
      1 => 1642663896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e90fd987c701_04145930 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AlmusTaxi</title>
  <link rel='stylesheet' href='https://codepen.io/abdullahturkmen/pen/ZEypWjK.css'><link rel="stylesheet" href="./dist/style.css">
 <?php echo '<script'; ?>
 type="text/javascript">
    $(function()  { 
        $(document).on('click','input[type=text]',function() {  this.select();  }  );
     }  );
<?php echo '</script'; ?>
>
<style>
        body {
            font-family: -apple-system, 
                BlinkMacSystemFont, sans-serif;
        }
       *, *::after, *::before {
  box-sizing: border-box;
}




img {
  max-width: 100%;
}

/* -------------------------------- 

Stretchy Nav style - common to:
 - basic navigation
 - add-content navigation
 - edit-content navigation

-------------------------------- */
.cd-stretchy-nav {
  position: absolute;
  z-index: 2;
  top: 150px;
  right: 5%;
}
.cd-stretchy-nav .stretchy-nav-bg {
  /* this is the stretching navigation background */
  position: absolute;
  z-index: 1;
  top: 0;
  right: 0;
  width: 60px;
  height: 60px;
  border-radius: 30px;
  background: #9acd91;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
  -webkit-transition: height 0.2s, box-shadow 0.2s;
  -moz-transition: height 0.2s, box-shadow 0.2s;
  transition: height 0.2s, box-shadow 0.2s;
}
.cd-stretchy-nav.nav-is-visible .stretchy-nav-bg {
  height: 100%;
  box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
}

.cd-nav-trigger {
  position: absolute;
  z-index: 3;
  top: 0;
  right: 0;
  height: 60px;
  width: 60px;
  border-radius: 50%;
  /* replace text with image */
  overflow: hidden;
  white-space: nowrap;
  color: transparent;
}
.cd-nav-trigger span, .cd-nav-trigger span::after, .cd-nav-trigger span::before {
  /* this is the hamburger icon */
  position: absolute;
  width: 16px;
  height: 2px;
  background-color: #ffffff;
}
.cd-nav-trigger span {
  /* middle line of the hamburger icon */
  left: 50%;
  top: 50%;
  bottom: auto;
  right: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -o-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-nav-trigger span::after, .cd-nav-trigger span::before {
  /* top and bottom lines of the hamburger icon */
  content: '';
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.2s;
  -moz-transition: -moz-transform 0.2s;
  transition: transform 0.2s;
}
.cd-nav-trigger span::before {
  -webkit-transform: translateY(-6px);
  -moz-transform: translateY(-6px);
  -ms-transform: translateY(-6px);
  -o-transform: translateY(-6px);
  transform: translateY(-6px);
}
.cd-nav-trigger span::after {
  -webkit-transform: translateY(6px);
  -moz-transform: translateY(6px);
  -ms-transform: translateY(6px);
  -o-transform: translateY(6px);
  transform: translateY(6px);
}
.no-touch .cd-nav-trigger:hover ~ .stretchy-nav-bg {
  box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
}
.nav-is-visible .cd-nav-trigger span {
  background-color: transparent;
}
.nav-is-visible .cd-nav-trigger span::before {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.nav-is-visible .cd-nav-trigger span::after {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.cd-stretchy-nav ul {
  position: relative;
  z-index: 2;
  padding: 60px 0 0;
  visibility: hidden;
  -webkit-transition: visibility 0.3s;
  -moz-transition: visibility 0.3s;
  transition: visibility 0.3s;
  text-align: right;
}
.cd-stretchy-nav ul a {
  position: relative;
  display: block;
  height: 50px;
  line-height: 50px;
  padding: 0 calc(1em + 60px) 0 1em;
  color: rgba(255, 255, 255, 0.7);
  font-size: 1.4rem;
  -webkit-transition: color 0.2s;
  -moz-transition: color 0.2s;
  transition: color 0.2s;
}
.cd-stretchy-nav ul a::after {
  /* navigation item icons */
  content: '';
  position: absolute;
  height: 16px;
  width: 16px;
  right: 22px;
  top: 50%;
  -webkit-transform: translateY(-50%) scale(0);
  -moz-transform: translateY(-50%) scale(0);
  -ms-transform: translateY(-50%) scale(0);
  -o-transform: translateY(-50%) scale(0);
  transform: translateY(-50%) scale(0);
  opacity: .6;
  background: url(https://aux.iconspalace.com/uploads/favorite-icon-256.png) no-repeat 0 0;
}
.cd-stretchy-nav ul a::before {
  /* line visible next to the active navigation item */
  content: '';
  position: absolute;
  width: 3px;
  height: 16px;
  top: 50%;
  right: 60px;
  -webkit-transform: translateX(3px) translateY(-50%) scaleY(0);
  -moz-transform: translateX(3px) translateY(-50%) scaleY(0);
  -ms-transform: translateX(3px) translateY(-50%) scaleY(0);
  -o-transform: translateX(3px) translateY(-50%) scaleY(0);
  transform: translateX(3px) translateY(-50%) scaleY(0);
  background-color: #0a9581;
}
.cd-stretchy-nav ul li:first-of-type a::after {
  /* change custom icon using image sprites */
  background-position: -32px 0;
}
.cd-stretchy-nav ul li:nth-of-type(2) a::after {
  background-position: -64px 0;
}
.cd-stretchy-nav ul li:nth-of-type(3) a::after {
  background-position: -48px 0;
}
.cd-stretchy-nav ul li:nth-of-type(4) a::after {
  background-position: 0 0;
}
.cd-stretchy-nav ul li:nth-of-type(5) a::after {
  background-position: -16px 0;
}
.cd-stretchy-nav ul span {
  /* navigation item labels */
  display: block;
  opacity: 0;
  -webkit-transform: translateX(-25px);
  -moz-transform: translateX(-25px);
  -ms-transform: translateX(-25px);
  -o-transform: translateX(-25px);
  transform: translateX(-25px);
}

.cd-stretchy-nav.nav-is-visible ul {
  visibility: visible;
}
.cd-stretchy-nav.nav-is-visible ul a::after {
  /* navigation item icons */
  -webkit-transform: translateY(-50%) scale(1);
  -moz-transform: translateY(-50%) scale(1);
  -ms-transform: translateY(-50%) scale(1);
  -o-transform: translateY(-50%) scale(1);
  transform: translateY(-50%) scale(1);
  -webkit-animation: scaleIn 0.15s backwards;
  -moz-animation: scaleIn 0.15s backwards;
  animation: scaleIn 0.15s backwards;
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  transition: opacity 0.2s;
}
.cd-stretchy-nav.nav-is-visible ul a.active {
  color: #ffffff;
}
.cd-stretchy-nav.nav-is-visible ul a.active::after {
  opacity: 1;
}
.cd-stretchy-nav.nav-is-visible ul a.active::before {
  -webkit-transform: translateX(3px) translateY(-50%) scaleY(1);
  -moz-transform: translateX(3px) translateY(-50%) scaleY(1);
  -ms-transform: translateX(3px) translateY(-50%) scaleY(1);
  -o-transform: translateX(3px) translateY(-50%) scaleY(1);
  transform: translateX(3px) translateY(-50%) scaleY(1);
  -webkit-transition: -webkit-transform 0.15s 0.3s;
  -moz-transition: -moz-transform 0.15s 0.3s;
  transition: transform 0.15s 0.3s;
}
.cd-stretchy-nav.nav-is-visible ul span {
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  -webkit-animation: slideIn 0.15s backwards;
  -moz-animation: slideIn 0.15s backwards;
  animation: slideIn 0.15s backwards;
  -webkit-transition: -webkit-transform 0.2s;
  -moz-transition: -moz-transform 0.2s;
  transition: transform 0.2s;
}
.no-touch .cd-stretchy-nav.nav-is-visible ul a:hover {
  color: #ffffff;
}
.no-touch .cd-stretchy-nav.nav-is-visible ul a:hover::after {
  opacity: 1;
}
.no-touch .cd-stretchy-nav.nav-is-visible ul a:hover span {
  -webkit-transform: translateX(-5px);
  -moz-transform: translateX(-5px);
  -ms-transform: translateX(-5px);
  -o-transform: translateX(-5px);
  transform: translateX(-5px);
}
.cd-stretchy-nav.nav-is-visible ul li:first-of-type a::after,
.cd-stretchy-nav.nav-is-visible ul li:first-of-type span {
  -webkit-animation-delay: 0.05s;
  -moz-animation-delay: 0.05s;
  animation-delay: 0.05s;
}
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(2) a::after,
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(2) span {
  -webkit-animation-delay: 0.1s;
  -moz-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(3) a::after,
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(3) span {
  -webkit-animation-delay: 0.15s;
  -moz-animation-delay: 0.15s;
  animation-delay: 0.15s;
}
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(4) a::after,
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(4) span {
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(5) a::after,
.cd-stretchy-nav.nav-is-visible ul li:nth-of-type(5) span {
  -webkit-animation-delay: 0.25s;
  -moz-animation-delay: 0.25s;
  animation-delay: 0.25s;
}

/* -------------------------------- 

add-content navigation style

-------------------------------- */
.cd-stretchy-nav.add-content {
  top: 40px;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  width: 300px;
}
.cd-stretchy-nav.add-content .stretchy-nav-bg {
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  background-color: #8ac57f;
  -webkit-transition: width 0.2s, box-shadow 0.2s;
  -moz-transition: width 0.2s, box-shadow 0.2s;
  transition: width 0.2s, box-shadow 0.2s;
}
.cd-stretchy-nav.add-content.nav-is-visible .stretchy-nav-bg {
  width: 100%;
  box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
}

.cd-stretchy-nav.add-content .cd-nav-trigger {
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  background-color: #9acd91;
}
.cd-stretchy-nav.add-content .cd-nav-trigger span {
  background-color: transparent;
}
.cd-stretchy-nav.add-content .cd-nav-trigger span::before {
  /* used to create the plus icon */
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.cd-stretchy-nav.add-content .cd-nav-trigger span::after {
  /* used to create the plus icon */
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}

.cd-stretchy-nav.add-content.nav-is-visible .cd-nav-trigger {
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
}
.cd-stretchy-nav.add-content.nav-is-visible .cd-nav-trigger span::before {
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
.cd-stretchy-nav.add-content.nav-is-visible .cd-nav-trigger span::after {
  -webkit-transform: rotate(-225deg);
  -moz-transform: rotate(-225deg);
  -ms-transform: rotate(-225deg);
  -o-transform: rotate(-225deg);
  transform: rotate(-225deg);
}

.cd-stretchy-nav.add-content ul {
  padding-top: 0;
}
.cd-stretchy-nav.add-content ul::after {
  clear: both;
  content: "";
  display: table;
}
.cd-stretchy-nav.add-content ul li {
  display: inline-block;
  float: left;
  width: 60px;
}
.cd-stretchy-nav.add-content ul li:nth-of-type(2) {
  /* space occupied by the navigation trigger */
  margin-right: 60px;
}
.cd-stretchy-nav.add-content ul a {
  padding: 0;
  height: 60px;
  width: 100%;
}
.cd-stretchy-nav.add-content ul a::after {
  top: 50%;
  left: 22px;
  right: auto;
  -webkit-transform: translateY(-50%) scale(0);
  -moz-transform: translateY(-50%) scale(0);
  -ms-transform: translateY(-50%) scale(0);
  -o-transform: translateY(-50%) scale(0);
  transform: translateY(-50%) scale(0);
  background-image: url(https://codyhouse.co/demo/stretchy-navigation/img/cd-sprite-2.svg);
}
.cd-stretchy-nav.add-content ul li:first-of-type a::after {
  background-position: -16px 0px;
}
.cd-stretchy-nav.add-content ul li:nth-of-type(2) a::after {
  background-position: 0px 0px;
}
.cd-stretchy-nav.add-content ul li:nth-of-type(3) a::after {
  background-position: -48px 0px;
}
.cd-stretchy-nav.add-content ul li:nth-of-type(4) a::after {
  background-position: -32px 0px;
}
.cd-stretchy-nav.add-content ul li:first-of-type a::after,
.cd-stretchy-nav.add-content ul li:nth-of-type(4) a::after {
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.cd-stretchy-nav.add-content ul li:nth-of-type(2) a::after,
.cd-stretchy-nav.add-content ul li:nth-of-type(3) a::after {
  -webkit-animation-delay: 0.1s;
  -moz-animation-delay: 0.1s;
  animation-delay: 0.1s;
}

.cd-stretchy-nav.add-content.nav-is-visible ul a::after {
  -webkit-animation-name: scaleIn;
  -moz-animation-name: scaleIn;
  animation-name: scaleIn;
  -webkit-transform: translateY(-50%) scale(1);
  -moz-transform: translateY(-50%) scale(1);
  -ms-transform: translateY(-50%) scale(1);
  -o-transform: translateY(-50%) scale(1);
  transform: translateY(-50%) scale(1);
}

.cd-stretchy-nav.add-content ul span {
  position: absolute;
  left: 0;
  top: -20px;
  width: 100%;
  padding: 0.6em 0;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: 2px;
  font-size: 1.2rem;
  line-height: 1;
  white-space: nowrap;
  text-align: center;
  -webkit-transition: opacity 0.2s, visibility 0.2s;
  -moz-transition: opacity 0.2s, visibility 0.2s;
  transition: opacity 0.2s, visibility 0.2s;
  /* reset default style */
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
.cd-stretchy-nav.add-content ul span::after {
  /* triangle below the tooltip */
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  height: 0;
  width: 0;
  border: 4px solid transparent;
  border-top-color: rgba(0, 0, 0, 0.8);
}

.cd-stretchy-nav.add-content.nav-is-visible ul span {
  /* reset default style */
  -webkit-animation: none;
  -moz-animation: none;
  animation: none;
}

.no-touch .cd-stretchy-nav.add-content.nav-is-visible ul a:hover span {
  opacity: 1;
  visibility: visible;
  /* reset default style */
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}

/* -------------------------------- 

edit content

-------------------------------- */
.cd-editable-content-wrapper{
  position:absolute;
  top:40px;
  left: 5%;
}

.cd-editable-content {
  /* used to wrap the image and the navigation */
  position: relative;
  width: 90%;
  max-width: 400px;
}
.cd-editable-content img {
  display: block;
  border-radius: .25em;
}

.cd-stretchy-nav.edit-content {
  position: absolute;
  top: 15px;
  right: 15px;
}
.cd-stretchy-nav.edit-content .stretchy-nav-bg {
  height: 30px;
  width: 30px;
  background-color: rgba(0, 0, 0, 0.4);
  box-shadow: none;
  -webkit-transition: background 0.2s, height 0.2s;
  -moz-transition: background 0.2s, height 0.2s;
  transition: background 0.2s, height 0.2s;
}
.cd-stretchy-nav.edit-content.nav-is-visible .stretchy-nav-bg {
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  /* reset default style */
  box-shadow: none;
}

.cd-stretchy-nav.edit-content .cd-nav-trigger {
  height: 30px;
  width: 30px;
}
.cd-stretchy-nav.edit-content .cd-nav-trigger span {
  opacity: 0;
  background-color: transparent;
}
.cd-stretchy-nav.edit-content .cd-nav-trigger span::before {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.cd-stretchy-nav.edit-content .cd-nav-trigger span::after {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.cd-stretchy-nav.edit-content .cd-nav-trigger span, .cd-stretchy-nav.edit-content .cd-nav-trigger span::before, .cd-stretchy-nav.edit-content .cd-nav-trigger span::after {
  /* used to create the 'X' icon when the navigation is open */
  width: 12px;
}
.cd-stretchy-nav.edit-content .cd-nav-trigger::after {
  /* edit icon */
  content: '';
  position: absolute;
  height: 16px;
  width: 16px;
  left: 50%;
  top: 50%;
  bottom: auto;
  right: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -o-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  background: url(https://codyhouse.co/demo/stretchy-navigation/img/cd-sprite-3.svg) no-repeat 0 0;
}
.cd-stretchy-nav.edit-content .cd-nav-trigger span, .cd-stretchy-nav.edit-content .cd-nav-trigger::after {
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  transition: opacity 0.2s;
}
.no-touch .cd-stretchy-nav.edit-content .cd-nav-trigger:hover ~ .stretchy-nav-bg {
  box-shadow: none;
  background-color: rgba(0, 0, 0, 0.8);
}

.cd-stretchy-nav.edit-content.nav-is-visible .cd-nav-trigger span {
  opacity: 1;
}
.cd-stretchy-nav.edit-content.nav-is-visible .cd-nav-trigger span::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.cd-stretchy-nav.edit-content.nav-is-visible .cd-nav-trigger span::after {
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
}

.cd-stretchy-nav.edit-content.nav-is-visible .cd-nav-trigger::after {
  /* hide edit icon */
  opacity: 0;
}

.cd-stretchy-nav.edit-content ul {
  padding-top: 30px;
}

.cd-stretchy-nav.edit-content ul a {
  width: 30px;
  height: 30px;
  line-height: 30px;
  padding: 0;
}
.cd-stretchy-nav.edit-content ul a::after {
  right: 7px;
  background-image: url(https://codyhouse.co/demo/stretchy-navigation/img/cd-sprite-3.svg);
}

.cd-stretchy-nav.edit-content ul li:first-of-type a::after {
  background-position: -16px 0;
}

.cd-stretchy-nav.edit-content ul li:nth-of-type(2) a::after {
  background-position: -32px 0;
}

.cd-stretchy-nav.edit-content ul li:nth-of-type(3) a::after {
  background-position: -48px 0;
}

.cd-stretchy-nav.edit-content ul li:nth-of-type(4) a::after {
  background-position: -64px 0;
}

.cd-stretchy-nav.edit-content ul span {
  position: absolute;
  top: 0;
  right: 35px;
  height: 30px;
  line-height: 30px;
  padding: 0 1em;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, 0.55);
  border-radius: 2px;
  text-align: center;
  -webkit-transition: opacity 0.2s, visibility 0.2s;
  -moz-transition: opacity 0.2s, visibility 0.2s;
  transition: opacity 0.2s, visibility 0.2s;
}
.cd-stretchy-nav.edit-content ul span::after {
  /* triangle below the tooltip */
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  height: 0;
  width: 0;
  border: 4px solid transparent;
  border-left-color: rgba(0, 0, 0, 0.55);
}

.cd-stretchy-nav.edit-content.nav-is-visible ul span {
  /* reset default style */
  -webkit-animation: none;
  -moz-animation: none;
  animation: none;
}
.no-touch .cd-stretchy-nav.edit-content.nav-is-visible ul a:hover span {
  opacity: 1;
  visibility: visible;
  /* reset default style */
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}

/* -------------------------------- 

main content basic style

-------------------------------- */
.cd-main-content {
  position: relative;
  z-index: 1;
  min-height: 100vh;
  padding: 100px 0;
  background-color: #003c5d;
}

/* -------------------------------- 

keyframes

-------------------------------- */
@-webkit-keyframes scaleIn {
  from {
    -webkit-transform: translateY(-50%) scale(0);
  }
  to {
    -webkit-transform: translateY(-50%) scale(1);
  }
}
@-moz-keyframes scaleIn {
  from {
    -moz-transform: translateY(-50%) scale(0);
  }
  to {
    -moz-transform: translateY(-50%) scale(1);
  }
}
@keyframes scaleIn {
  from {
    -webkit-transform: translateY(-50%) scale(0);
    -moz-transform: translateY(-50%) scale(0);
    -ms-transform: translateY(-50%) scale(0);
    -o-transform: translateY(-50%) scale(0);
    transform: translateY(-50%) scale(0);
  }
  to {
    -webkit-transform: translateY(-50%) scale(1);
    -moz-transform: translateY(-50%) scale(1);
    -ms-transform: translateY(-50%) scale(1);
    -o-transform: translateY(-50%) scale(1);
    transform: translateY(-50%) scale(1);
  }
}
@-webkit-keyframes slideIn {
  from {
    opacity: 0;
    -webkit-transform: translateX(-25px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes slideIn {
  from {
    opacity: 0;
    -moz-transform: translateX(-25px);
  }
  to {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}
@keyframes slideIn {
  from {
    opacity: 0;
    -webkit-transform: translateX(-25px);
    -moz-transform: translateX(-25px);
    -ms-transform: translateX(-25px);
    -o-transform: translateX(-25px);
    transform: translateX(-25px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
::placeholder {
  color: black;
  font-size: 1.0em;
}
    </style>
</head>
<body onload="getLocation();">

<div id="mapCanvas">&#160;</div>


<header>
  <nav class="cd-stretchy-nav" style="display:none">
    <a class="cd-nav-trigger" href="#0">
			Menu
			<span aria-hidden="true"></span>
		</a>
    <ul style="list-style-type: none;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fav_pl']->value, 'place');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
?>
         <li style="background-color:#9ACD91;margin-bottom:5px;border-radius:20px"><a style="text-decoration:none" href="./get_taxi.php?street=<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
&number=0&post_code=0" class="active"><span>📍<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
</span></a></li>
     
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <li style="background-color:#9ACD91;margin-bottom:5px;border-radius:20px"><a style="text-decoration:none" href="./favorite_places.php" class="active"><span>📍+</span></a></li>
     
        
  </ul>
    <span aria-hidden="true" class="stretchy-nav-bg"></span>
  </nav>
</header>




  <div id="directionsPanel" style=" border-radius:10px;background-color:#f5f5f5">

   <div class="directionInputs" >
       
     
    <form action="./get_taxi.php" method="get">
        
     <p><label style="background-color:#f5f5f5;border:none;margin-right:-7px;border-radius:10px;font-size:33px" onclick="getLocation()">🌍</label>
     <input onclick="this.select();"   type="text"  name="street" value="" id="dirSource" style="margin-left:0px;border:none;background-color:#e3eeff;padding:10px;font-size:18px;border-radius:10px;height:45px"/></p>
      <p><label style="background-color:#f5f5f5;border:none;margin-right:-7px">
          <select id="dropdown" style="background-color:#F5F5F5;border:none;border-radius:30px;width:40px;height:40px;font-size:16px;background-color:white">
            
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fav_pl']->value, 'place');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
?> 
        
    <option value="<?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
"><?php echo $_smarty_tpl->tpl_vars['place']->value['street'];?>
</option>
     
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <option value="" disabled selected style="display:none">⭐</option>

</select>
  
          </label><input onclick="this.select();" type="text" placeholder="Накъде?" value="" id="dirDestination" name="end_destination" style="border:none;background-color:#e3eeff;padding:10px;font-size:18px;border-radius:10px;height:45px"/></p>
     <input type="submit" value="Поръчай такси" name="call_taxi"  style="background-color:#ffcd42;;color:white;border:none;border-radius:10px;font-size:17px;height:45px">


<?php if ($_smarty_tpl->tpl_vars['drivers_count']->value > 0) {?>
<center>Има <b><?php echo $_smarty_tpl->tpl_vars['drivers_count']->value;?>
</b> <?php if ($_smarty_tpl->tpl_vars['drivers_count']->value == 1) {?>шофьор<?php } else { ?>шофьора<?php }?> на линия в град <?php echo $_smarty_tpl->tpl_vars['user_info2']->value[0]['city'];?>
.</center>
<?php } else { ?>
<center><b style="color:red">В момента нямаме свободни коли около вас. Поръчката Ви може да бъде забавена.</b></center>
<?php }?>

  <div style="display:none">  <div class="btns">
       <a href="#getDirections" id="getDirections">Hesapla</a>
     <a href="#reset" id="paneReset">Yenile</a>
      
     </div>
      
      <hr>
       <a onclick="getLocation()" id="getDirections" style="background: red">Get Location with button</a>
     
     
      <div class="address"></div>
  <textarea class="lat" name="lat"></textarea>
  <textarea class="lng" name="lng"></textarea>
  <textarea class="msg" name="distance"></textarea>
  </div>
  
   </form>	

 </div>
 <div id="directionSteps">
  

</div>
</div>


<!-- partial -->
 <?php echo '<script'; ?>
 src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDmR2jKUoDdMY_giAYCkDGi_dkW-WYaBTs&amp;v=3.exp&amp;sensor=true&amp;libraries=places&language=bg&region=BG'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='https://codepen.io/abdullahturkmen/pen/ZEypWjK.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
jQuery(function() { 
   jQuery('#useGPS').click();
 } );
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
let lat = 41.07;
let lng = 29.03;

document.addEventListener("load", getLocation());

function getLocation()  { 
  if (navigator.geolocation)  { 
    navigator.geolocation.getCurrentPosition(showPosition);
  
   }  else  { 
    alert("Geolocation is not supported by this browser.");
   } 
 } 
function showPosition(position)  { 
   lat = position.coords.latitude;
   lng = position.coords.longitude;
  document.querySelector('.lat').innerText = "Lat: " + lat;
  document.querySelector('.lng').innerText = "Lng: " + lng;
  setMap(lat,lng);
  getReverseGeocodingData(lat,lng);
  //map.setCenter(new google.maps.LatLng(lat, lng));
 } 




function getReverseGeocodingData(lat, lng)  { 
    var latlng = new google.maps.LatLng(lat, lng);
    // This is making the Geocode request
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( {  'latLng': latlng  } ,  (results, status) => { 
        if (status !== google.maps.GeocoderStatus.OK)  { 
            alert("Открихме местоположението Ви!");
         } 
        // This is checking to see if the Geoeode Status is OK before proceeding
        if (status == google.maps.GeocoderStatus.OK)  { 
            console.log(results);
            let address = (results[0].formatted_address);
            document.querySelector('.address').innerText = "Address: " + address;
            var inputF = document.getElementById("dirSource");
            inputF.value = address;
            el_down.innerHTML = 
                   "Value = " + "'" + inputF.value + "'";
         } 
     } );
 }   


function setMap()  { 
  const myLatLng =  {  lat: lat, lng: lng  } ;
  const map = new google.maps.Map(document.getElementById("mapCanvas"),  { 
    zoom: 18,
    center: myLatLng,
    streetViewControl: false,
    scrollwheel: false,
   } );


  const contentString =
    'Ето те!';
const infowindow = new google.maps.InfoWindow( { 
    content: contentString,
   } );


 const marker =  new google.maps.Marker( { 
    position: myLatLng,
    map,
    title: "Hello World!",
    
    optimized: true 
   } );
  
   marker.addListener("click", () =>  { 
    infowindow.open( { 
      anchor: marker,
      map,
      shouldFocus: false,
     } );
   } );

 } 




(function(mapDemo, $, undefined)  {
   
 	mapDemo.Directions = (function()  { 
 		function _Directions()  { 
 			var map,   
 			directionsService, directionsDisplay, 
 			autoSrc, autoDest, pinA, pinB, 

 			markerA = new google.maps.MarkerImage('https://icons.iconarchive.com/icons/icons-land/vista-map-markers/32/Map-Marker-Marker-Outside-Chartreuse-icon.png',
 				new google.maps.Size(24, 27),
 				new google.maps.Point(0, 0),
 				new google.maps.Point(12, 27)),		
 			markerB = new google.maps.MarkerImage('https://icons.iconarchive.com/icons/icons-land/vista-map-markers/32/Map-Marker-Marker-Outside-Pink-icon.png',
 				new google.maps.Size(24, 28),
 				new google.maps.Point(0, 0),
 				new google.maps.Point(12, 28)), 



  
  
				// Caching the Selectors		
				$Selectors =  { 
					mapCanvas: jQuery('#mapCanvas')[0], 
					dirPanel: jQuery('#directionsPanel'),
					dirInputs: jQuery('.directionInputs'),
					dirSrc: jQuery('#dirSource'),
					dirDst: jQuery('#dirDestination'),
					getDirBtn: jQuery('#getDirections'),
					dirSteps: jQuery('#directionSteps'), 
					paneToggle: jQuery('#paneToggle'), 
					useGPSBtn: jQuery('#useGPS'), 
					paneResetBtn: jQuery('#paneReset')
				 } ,
				
			
				
				autoCompleteSetup = function()  {
		
					autoSrc = new google.maps.places.Autocomplete($Selectors.dirSrc[0]);
					autoDest = new google.maps.places.Autocomplete($Selectors.dirDst[0]);
				 } , // autoCompleteSetup Ends

				directionsSetup = function()  { 
					directionsService = new google.maps.DirectionsService();
					directionsDisplay = new google.maps.DirectionsRenderer( { 
						suppressMarkers: true
					 } );	
					
					directionsDisplay.setPanel($Selectors.dirSteps[0]);											
				 } , // direstionsSetup Ends
				
				trafficSetup = function()  { 					
					// Creating a Custom Control and appending it to the map
					var controlDiv = document.createElement('div'), 
					controlUI = document.createElement('div'), 
					trafficLayer = new google.maps.TrafficLayer();

					jQuery(controlDiv).addClass('gmap-control-container').addClass('gmnoprint');
					jQuery(controlUI).text('Traffic').addClass('gmap-control');
					jQuery(controlDiv).append(controlUI);				

					// Traffic Btn Click Event	  
					google.maps.event.addDomListener(controlUI, 'click', function()  { 
						if (typeof trafficLayer.getMap() == 'undefined' || trafficLayer.getMap() === null)  { 
							jQuery(controlUI).addClass('gmap-control-active');
							trafficLayer.setMap(map);
						 }  else  { 
							trafficLayer.setMap(null);
							jQuery(controlUI).removeClass('gmap-control-active');
						 } 
					 } );							  
					//map.controls[google.maps.ControlPosition.TOP_RIGHT].push(controlDiv);								
				 } , // trafficSetup Ends
				
				mapSetup = function()  { 
					map = new google.maps.Map($Selectors.mapCanvas,  { 
						zoom: 28,
						center: new google.maps.LatLng(lat, lng),	
						styles: [
						 { elementType: 'geometry', stylers: [ { color: '#242f3e' } ] } ,
						 { elementType: 'labels.text.stroke', stylers: [ { color: '#242f3e' } ] } ,
						 { elementType: 'labels.text.fill', stylers: [ { color: '#746855' } ] } ,
						 { 
							featureType: 'administrative.locality',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#d59563' } ]
						 } ,
						 { 
							featureType: 'poi',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#d59563' } ]
						 } ,
						 { 
							featureType: 'poi.park',
							elementType: 'geometry',
							stylers: [ { color: '#263c3f' } ]
						 } ,
						 { 
							featureType: 'poi.park',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#6b9a76' } ]
						 } ,
						 { 
							featureType: 'road',
							elementType: 'geometry',
							stylers: [ { color: '#38414e' } ]
						 } ,
						 { 
							featureType: 'road',
							elementType: 'geometry.stroke',
							stylers: [ { color: '#212a37' } ]
						 } ,
						 { 
							featureType: 'road',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#9ca5b3' } ]
						 } ,
						 { 
							featureType: 'road.highway',
							elementType: 'geometry',
							stylers: [ { color: '#746855' } ]
						 } ,
						 { 
							featureType: 'road.highway',
							elementType: 'geometry.stroke',
							stylers: [ { color: '#1f2835' } ]
						 } ,
						 { 
							featureType: 'road.highway',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#f3d19c' } ]
						 } ,
						 { 
							featureType: 'transit',
							elementType: 'geometry',
							stylers: [ { color: '#2f3948' } ]
						 } ,
						 { 
							featureType: 'transit.station',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#d59563' } ]
						 } ,
						 { 
							featureType: 'water',
							elementType: 'geometry',
							stylers: [ { color: '#17263c' } ]
						 } ,
						 { 
							featureType: 'water',
							elementType: 'labels.text.fill',
							stylers: [ { color: '#515c6d' } ]
						 } ,
						 { 
							featureType: 'water',
							elementType: 'labels.text.stroke',
							stylers: [ { color: '#17263c' } ]
						 } 
						],
						mapTypeControl: false,
						mapTypeControlOptions:  { 
							style: google.maps.MapTypeControlStyle.DEFAULT,
							position: google.maps.ControlPosition.TOP_RIGHT
						 } ,

						panControl: false,
						panControlOptions:  { 
							position: google.maps.ControlPosition.RIGHT_TOP
						 } ,

						zoomControl: true,
						zoomControlOptions:  { 
							style: google.maps.ZoomControlStyle.LARGE,
							position: google.maps.ControlPosition.RIGHT_TOP
						 } ,

						scaleControl: true,
						streetViewControl: true, 
						overviewMapControl: true,

						mapTypeId: google.maps.MapTypeId.ROADMAP
					 } );
					
					autoCompleteSetup();
					directionsSetup();
					trafficSetup();
				 } , // mapSetup Ends 
				
				directionsRender = function(source, destination)  { 
					$Selectors.dirSteps.find('.msg').hide();
					directionsDisplay.setMap(map);
					
					var request =  { 
						origin: source,
						destination: destination,
						provideRouteAlternatives: false, 
						travelMode: google.maps.DirectionsTravelMode.DRIVING
					 } ;		
					
					directionsService.route(request, function(response, status)  { 
						if (status == google.maps.DirectionsStatus.OK)  { 
							var distance= 0;
							var _route = response.routes[0].legs[0]; 
							directionsDisplay.setDirections(response);
							pinA = new google.maps.Marker( { position: _route.start_location, map: map, icon: markerA } ), 
							pinB = new google.maps.Marker( { position: _route.end_location, map: map, icon: markerB } );	
							
							for(i = 0; i < response.routes[0].legs.length; i++) { 
							distance += parseFloat(response.routes[0].legs[i].distance.value);// Km nin toplam value değerini alıyorum.
							
						 } 




							var directionSteps = document.getElementById('directionSteps'); // Html deki direction step bölümünü çekip html olarak ekleme yapıyorum.




							var kilometre= Math.round(((distance/ 1000).toFixed(1)*1));
                            
							if (1==1)  { 
       directionSteps.innerHTML +=('<input type="hidden" value="'+distance+'" name="distance" >');// Sonra 1 le çarpıp 11 ekleyip gösteriyorum.	

    }

 } 
 } );
				 } , // directionsRender Ends
				
				fetchAddress = function(p)  { 
					var Position = new google.maps.LatLng(p.coords.latitude, p.coords.longitude),  
					Locater = new google.maps.Geocoder();
					
					Locater.geocode( { 'latLng': Position } , function (results, status)  { 
						if (status == google.maps.GeocoderStatus.OK)  { 
							var _r = results[0];
							$Selectors.dirSrc.val(_r.formatted_address);
						 } 
					 } );
				 } , // fetchAddress Ends
				
				invokeEvents = function()  { 
					// Get Directions
					$Selectors.getDirBtn.on('click', function(e)  { 
						if (document.getElementById('pars') !=null)  {  // Get direction da ücret id sini kontrol
						// ediyorum eğer ücret id'si olan pars varsa temizleme yapıyorum yoksa gösteriyorum.
						$Selectors.dirSteps.html('');
						$Selectors.dirSrc.val('');
						$Selectors.dirDst.val('');
						if(pinA) pinA.setMap(null);
						if(pinB) pinB.setMap(null);		
						
						directionsDisplay.setMap(null);
					 } 
					if (document.getElementById('pars') ==null)  { 
						e.preventDefault();	
						var src = $Selectors.dirSrc.val(), 
						dst = $Selectors.dirDst.val();
						
						directionsRender(src, dst);
					 } 

				 } );
					
					// Reset Btn
					$Selectors.paneResetBtn.on('click', function(e)  { 
						$Selectors.dirSteps.html('');
						$Selectors.dirSrc.val('');
						$Selectors.dirDst.val('');
						
						if(pinA) pinA.setMap(null);
						if(pinB) pinB.setMap(null);		
						
						directionsDisplay.setMap(null);					
					 } );
					
					// Toggle Btn
					$Selectors.paneToggle.toggle(function(e)  { 
						$Selectors.dirPanel.animate( { 'left': '-=305px' } );
						jQuery(this).html('&gt;');
					 } , function()  { 
						$Selectors.dirPanel.animate( { 'left': '+=305px' } );
						jQuery(this).html('&lt;');
					 } );
					
					// Use My Location / Geo Location Btn
					$Selectors.useGPSBtn.on('click', function(e)  { 		
						if (navigator.geolocation)  { 
							navigator.geolocation.getCurrentPosition(function(position)  { 
								fetchAddress(position);
							 } );	
						 } 
					 } );
				 } , //invokeEvents Ends 
				
				_init = function()  { 
					mapSetup();
					invokeEvents();
				 } ; // _init Ends
				
				this.init = function()  { 
					_init();
				return this; // Refers to: mapDemo.Directions
			 } 
			return this.init(); // Refers to: mapDemo.Directions.init()
		 }  // _Directions Ends
		return new _Directions(); // Creating a new object of _Directions rather than a funtion
	 } ()); // mapDemo.Directions Ends
 } )(window.mapDemo = window.mapDemo ||  {  } , jQuery);
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
  if ($('.cd-stretchy-nav').length > 0) {
    var stretchyNavs = $('.cd-stretchy-nav');

    stretchyNavs.each(function() {
      var stretchyNav = $(this),
        stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');

      stretchyNavTrigger.on('click', function(event) {
        event.preventDefault();
        stretchyNav.toggleClass('nav-is-visible');
      });
    });

    $(document).on('click', function(event) {
      (!$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span')) && stretchyNavs.removeClass('nav-is-visible');
    });
  }
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var mytextbox = document.getElementById('dirDestination');
var mydropdown = document.getElementById('dropdown');
mydropdown.onchange = function(){
     mytextbox.value = this.value;
}
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
