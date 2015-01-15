<?php
setcookie('login', 'LOGGED', time()-1, '/');
$user = $_COOKIE['user'];
setcookie('user', $user, time()-1, '/');
header('location: /');
