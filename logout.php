<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']); //limpar o cookie
setcookie('usuario', '');
header('Location: login.php');