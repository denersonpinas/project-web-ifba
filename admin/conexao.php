<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'Demy5@Son';
    $dbname = 'radar';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$conexao):
        die("Houve um erro: " . mysqli_connect_error());
    endif;
?>