<?php 
session_start();
include('../database.php');

if(empty($_POST['usuario'] || empty($_POST['senha']))){
    header('Location: ../../login');
    exit();
}

$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT id, usuario FROM login WHERE usuario = '$usuario' AND senha = md5('$senha');";
$result = mysqli_query($connect, $query);
$row = mysqli_num_rows($result);
if($row == 1){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['msgLogin'] = "Seja Bem Vindo!";
    header('Location: ../../painel');
    exit();
}else{
    $_SESSION['msgLogin'] = "Erro ao Efetuar Login.";
    header('Location: ../../login');
    exit();
}