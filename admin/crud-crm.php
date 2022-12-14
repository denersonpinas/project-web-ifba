<?php
session_start();
include('./conexao.php');

// Verifica se o usuario preencheu o formulario ou não.
if(empty($_POST['tarefa'] || empty($_POST['cliente']) || empty($_POST['proxContato']))) {
    header('Location: ../home.php');
    exit();
}

switch ($_REQUEST['acao']) {
    case 'cadastrar' :
        $tarefa = $_POST['tarefa'];
        $nome = $_POST['nomeCompleto'];
        $contato = $_POST['contato'];
        $cliente = $_POST['cliente'];
        $situacao = $_POST['situacao'];
        $proxContato = $_POST['proxContato'];
        $dataFinal = $_POST['dataFinal'];
        $atendimento = $_POST['atendimento'];

        // Pegar Id do usuario logado
        $usuario = $_SESSION['usuario'];
        $sql_usu = "select us_id from rc_usuario where us_nome = '$usuario'";
        $id_usuario = $conexao->query($sql_usu);
        $id =  mysqli_fetch_array($id_usuario)[0];

        $sql = "INSERT INTO cr_crm (cr_tarefa, cr_nome, cr_contato, cr_cliente, cr_situacao, cr_proxContato, cr_dataFinal, cr_observacao, rc_usuario_us_id) value ('$tarefa', '$nome', '$contato', '$cliente', '$situacao', '$proxContato', '$dataFinal', '$atendimento', '$id')";

        $result = $conexao->query($sql);
        if($result){
            header('Location: ../home.php');
            exit();
        } else{
            echo "Erro ";
        };
        break;

    case 'editar':
        $tarefa = $_POST['tarefa'];
        $nome = $_POST['nome'];
        $contato = $_POST['contato'];
        $cliente = $_POST['cliente'];
        $situacao = $_POST['situacao'];
        $proxContato = $_POST['proxContato'];
        $dataFinal = $_POST['dataFinal'];
        $observacao = $_POST['atendimento'];

        $sql = "UPDATE cr_crm SET
                    cr_tarefa = '$tarefa',
                    cr_nome = '$nome',
                    cr_contato = '$contato',
                    cr_cliente = '$cliente',
                    cr_situacao = '$situacao',
                    cr_proxContato = '$proxContato',
                    cr_dataFinal = '$dataFinal',
                    cr_observacao = '$observacao'
                WHERE
                    cr_id =" . $_REQUEST['id'];

        $result = $conexao->query($sql);
        if($result){
            header('Location: ../home.php');
            exit();
        } else{
            echo "Erro ";
        };
        break;
    
    case 'excluir':
        $sql = "DELETE FROM cr_crm WHERE cr_id =" . $_REQUEST['id'];

        $result = $conexao->query($sql);
        if($result){
            header('Location: ../home.php');
            exit();
        } else{
            echo "Erro ";
        };
        break;
}