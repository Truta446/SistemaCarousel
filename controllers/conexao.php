<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = ""; 
$banco = 'cadastro_fotos';

$mysqli = new MySQLi($servidor, $usuario, $senha, $banco);

mysqli_set_charset($mysqli, 'utf8');

if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
}
?>
