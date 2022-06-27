<?php
$host ='localhost';
$usuario = 'root';
$senha = '';
$db = 'voltec';
$connect = mysqli_connect($host, $usuario, $senha, $db) or die('Não foi possível conectar ao banco de dados');