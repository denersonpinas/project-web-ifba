<?php
    $servidor = 'localhost';
    $usuario = 'DIGITAR O USUARIO DO BANCO';
    $senha = 'DIGITAR A SENHA DO BANCO';
    $dbname = 'radar';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$conexao):
        die("Houve um erro: " . mysqli_connect_error());
    endif;
?>