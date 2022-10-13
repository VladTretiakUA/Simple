<?php
   if($_COOKIE['user'] == 'Так')
    setcookie ('user', 'Так', time() - 3600 * 24, '/');
   else
    setcookie ('user', 'Так', time() + 3600 * 24, '/');

 header('Location: /');
 ?>
