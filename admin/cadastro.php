<?php 
    include("./conexao.php");
    if(isset($_POST['email'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = md5(md5($_POST['senha']));
        
        $sql = "insert into rc_usuario (us_nome, us_sobrenome, us_email, us_senha) value ('$nome', '$sobrenome', '$email', '$senha')";
 
        $result = $conexao->query($sql);
 
        if($result){
            header('Location: ../index.php');
            exit();
        } else{
            header('Location: ../cadastro.php');
            exit();
        };

        // mysqli_close($conexao);
    } else {
        echo "erro:";
    }
?>