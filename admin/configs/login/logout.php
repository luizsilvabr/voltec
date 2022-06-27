<?php
session_start();
unset($_SESSION['usuario']);
$_SESSION['msgLogin'] = "Logout Efetuado com Sucesso!";
header('Location: ../../login');
exit();