<?php
/* Smarty version 3.1.32, created on 2020-09-03 21:51:54
  from '/home/vsyakadu/almus.semicolondi.com/view/guest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f513b4a9343e5_47246436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7ef16972df6be470bf6eff194aef3528ae159a' => 
    array (
      0 => '/home/vsyakadu/almus.semicolondi.com/view/guest.tpl',
      1 => 1599159112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f513b4a9343e5_47246436 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head><?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <style>
            
            * {
  box-sizing: border-box;
}

/* basic stylings ------------------------------------------ */
body {
  background: url(https://scotch.io/wp-content/uploads/2014/07/61.jpg);
  width:100%;
   height: 100%;
   overflow-y: hidden;
   margin:0;
   padding:0;
   position: fixed; 

}
.container {
  font-family: "Roboto";
  width: 600px;
  margin: 30px auto 0;
  display: block;
  background: #fff;
  padding: 40px 20px 20px;
}
h2 {
  text-align: center;
  margin-bottom: 50px;
}
h2 small {
  font-weight: normal;
  color: #888;
  display: block;
}
.footer {
  text-align: center;
}
.footer a {
  color: #53b2c8;
}

/* form starting stylings ------------------------------- */
.group {
  position: relative;
  margin-bottom: 45px;
}
input {
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 90%;
  border: none;
  border-bottom: 1px solid #757575;
}
input:focus {
  outline: none;
}

/* LABEL ======================================= */
label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

/* active state */
input:focus ~ label,
input:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: #5264ae;
}

/* BOTTOM BARS ================================= */
.bar {
  position: relative;
  display: block;
  width: 300px;
}
.bar:before,
.bar:after {
  content: "";
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #5264ae;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}
.bar:before {
  left: 50%;
}
.bar:after {
  right: 50%;
}

/* active state */
input:focus ~ .bar:before,
input:focus ~ .bar:after {
  width: 50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position: absolute;
  height: 60%;
  width: 100px;
  top: 25%;
  left: 0;
  pointer-events: none;
  opacity: 0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
  from {
    background: #5264ae;
  }
  to {
    width: 0;
    background: transparent;
  }
}
@-moz-keyframes inputHighlighter {
  from {
    background: #5264ae;
  }
  to {
    width: 0;
    background: transparent;
  }
}
@keyframes inputHighlighter {
  from {
    background: #5264ae;
  }
  to {
    width: 0;
    background: transparent;
  }
}


* {
  font-family: "Roboto", sans-serif;
}

.container2 {
  position: absolute;
  top: 70%;
  left: 38%;
  margin-left: -65px;
  margin-top: -20px;
  width: 130px;
  height: 40px;
  text-align: center;
  
}

button {
  outline: none;
  height: 80px;
  text-align: center;
  width: 230px;
  border-radius: 40px;
  background: #fff;
  border: 2px solid #1ecd97;
  color: #1ecd97;
  letter-spacing: 1px;
  text-shadow: 0;
  font-size: 17px;
  font-weight: bold;
  cursor: pointer;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  top:200px;
}
button:hover {
  color: white;
  background: #1ecd97;
}
button:active {
  letter-spacing: 2px;
}
button:after {
  content: "";
}

.onclic {
  width: 40px;
  border-color: #bbbbbb;
  border-width: 3px;
  font-size: 0;
  border-left-color: #1ecd97;
  -webkit-animation: rotating 2s 0.25s linear infinite;
          animation: rotating 2s 0.25s linear infinite;
}
.onclic:after {
  content: "";
}
.onclic:hover {
  color: #1ecd97;
  background: white;
}

.validate {
  font-size: 13px;
  color: white;
  background: #1ecd97;
}
.validate:after {
  font-family: "FontAwesome";
  content: "\f00c";
}

@-webkit-keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

        </style>
    </head>
    <body >
     <div class="container">
         
         
         
         <?php if (isset($_smarty_tpl->tpl_vars['a']->value)) {?>
         
         <?php }?>
      
           <center>
  <h2 align="center"><img src="https://almus.semicolondi.com/images/luber.png" style="width:120px; height:75px; position: relative; left: -125px;""><small</small></h2></center>
 
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
         
 <p style="color:white;background-color:#eb4f34;padding:5px"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
         <?php }?>
           <?php if (isset($_smarty_tpl->tpl_vars['noerror']->value)) {?>
            <p style="color:white;background-color:#34a1eb;padding:5px"><?php echo $_smarty_tpl->tpl_vars['noerror']->value;?>
</p>

               <?php }?>
  <form action="./guest.php" method="post">
      <div class="group">      
      <input type="text" name="name" required style="width:70%">
      <span class="highlight" style="width:70%"></span>
      <span class="bar" style="width:70%"></span>
      <label style="width:70%">Клиент</label>
    </div>
    <div class="group">      
      <input type="text" name="phone" required style="width:70%">
      <span class="highlight" style="width:70%"></span>
      <span class="bar" style="width:70%"></span>
      <label style="width:70%">Телефон</label>
    </div>
      
    <div class="group" >      
      <input type="text" name="address" required style="width:70%">
      <span class="highlight" style="width:70%"></span>
      <span class="bar" style="width:70%"></span>
      <label style="width:70%">Адрес</label>
    </div>
    <div class="container2">
  <button id="button" type="submit">Повикай Такси</button>
</div>
  </form>
      <br><br><br><br><br><br><br><br>
С натискането на бутона "Повикай такси"<br> се съгласявате с:<br>
<a href="https://almus.semicolondi.com/rights.php" style="color:green;">Общи правила и условия<br> за ползване</a>
  <br><br>
  <a href="../index.php" style="padding:10px; background-color:green;color:white;text-decoration:none;border-radius: 25px;">Към Начало</a>
  
</div>

<?php echo '<script'; ?>
>
$(function () {
  $("#button").click(function () {
    $("#button").addClass("onclic", 250, validate);
  });

  function validate() {
    setTimeout(function () {
      $("#button").removeClass("onclic");
      $("#button").addClass("validate", 450, callback);
    }, 2250);
  }
  function callback() {
    setTimeout(function () {
      $("#button").removeClass("validate");
    }, 1250);
  }
});

  <?php echo '</script'; ?>
>
  
  
    </body>
    
    </html><?php }
}
