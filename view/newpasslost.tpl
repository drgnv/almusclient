<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Almus Taxi</title>
  <link rel="stylesheet" href="../lstyle.css">

</head>
<body style="background-image: url('../view/Taxi2.jpg');">
<!-- partial:index.partial.html -->
<!-- Designed by Jaysen Henderson. Developed by me for fun. Source: https://dribbble.com/shots/3686055-hello-login-Ui -->

<div class="wrapper11" style="border:none;">
  
  <!--  Header  -->
  <header class="section header" style="border:none;">
    
    <div class="header__text1" style="padding:0;margin:0;border:none;">
      <img src="../images/luber.png" style="width: 150px; height: 150px; position: relative; top: 30px; ">
      <p style="color:black;font-size:30px;margin-bottom:-10px">T A X I</p>
 {if isset($error)}
 <p style="background-color: red;color:white; padding:1px;">{$error}</p>
 {/if}
 
 {if isset($reg)}
 <p style="background-color: green;color:white; padding:1px;">{$reg}</p>
 {/if}
    </div>
  </header>


    <!--  Sign In  -->

    
        <section class="section sign-in" style="padding:0;margin:0;border:none;">
    
            <center>
             

            <br>
       </center><br><br>  <center>
     </center>
       <center><a href="https://almus.semicolondi.com/rights.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">Общи правила</a>
     </center> </form>
    </section>

    <section class="section sign-in" style="padding:0;margin:0;border:none;">
        {if isset($ok)}
        <p style="background-color:green;color:white;font-size:16px">{$ok}</p>
        <a href="../index.php" style="background-color:blue;color:white;padding:10px;text-decoration:none">НАЧАЛО</a>
        {else}
      <form action="./newpasslost.php" method="post">
           <input class="info1" id="username" type="text" name="newpass" placeholder="Нова" style="padding-bottom: 0px; height:60px; font-size:22px;background-color:#171717; position: relative;opacity: 0.5; top: 30px;" {if isset($m)}  {/if}>
        <br><center>
    <br>   <button style="background-color: #dea527;color: white;height:55px; font-size:22px;width:80%;border-radius: 10px; font-family:Arial; position: relative; top: 50px;" id="login" type="submit" >Промени</button></center>
       
            <center>
             

            <br>
       </center><br><br>  <center><a href="../index.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">НАЧАЛО</a>
     </center>
       <center><a href="https://almus.semicolondi.com/rights.php" style="text-decoration: none; color:white; font-size:20px; vertical-align: text-bottom;bottom:5px">Общи правила</a>
     </center> </form>
   {/if} </section>
</div>


<!-- partial -->
  <script  src="../lscript.js"></script>

</body>
</html>
