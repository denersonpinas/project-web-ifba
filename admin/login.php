<?php
session_start();
include('./conexao.php');

// Verifica se o usuario preencheu o formulario ou não.
if(empty($_POST['usuario'] || empty($_POST['senha']))) {
    header('Location: ../index.php');
    exit();
}

// Passando valor digitado pelo usuario usando uma camada de proteção contra ataques de sql injection.
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select * from rc_usuario where us_nome = '$usuario' and us_senha = md5(md5('$senha'))";

$result = $conexao->query($sql);

if(mysqli_num_rows($result) == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../home.php');
    exit();
} else {
    $_SESSION['não autenticado'] = true;
    header('Location: ../index.php');
    exit();
}