<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Luber Вход</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro'>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="screen">
    <div style="text-align: center; font-size: 26px"><img src="./images/luber.png" width="200" height="100">
        <a href="./index.php" style="padding: 2px; text-decoration: none; background-color: darkorange; color: white;">Назад към ВХОД</a>
          {if isset($mm)}
            <p style="font-size: 14px; background-color: red;color:white">  {$mm}</p>
        {/if}
        <form action="" method="post">
            <input type="text" name="names" placeholder="*Имена" style="width: 90%; height: 20px; border-color: darkorange; text-align: center" required>
            <input type="email" name="mail" placeholder="*Mail" style="width: 90%; height: 20px; border-color: darkorange; text-align: center" required>
            <input type="text" name="phone" placeholder="*Телефон" style="width: 90%; height: 20px; border-color: darkorange; text-align: center" required>
            <input type="text" name="password" placeholder="*Парола" style="width: 90%; height: 20px; border-color: darkorange; text-align: center" required>
            <input type="submit" name="register" value="Регистрирай се" style="width: 90%; background-color: darkorange;color: white;border: none;height: 25px">

        </form>
      
    </div>


</div>
<!-- partial -->
<script  src="../js/login.js"></script>

</body>
</html>
