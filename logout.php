<?php
session_start();
 setcookie('emailalmus', '', time()+60*60*365);
              setcookie('passwordalmus', '', time()+60*60*365);
session_destroy();
header("Location: ./index.php");