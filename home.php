<?php
session_start();
include('./admin/verifica-login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Comercial</title>
    <link rel="stylesheet" href="assets/css/vars.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="https://kit.fontawesome.com/e01d3ca5f5.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('./header.php'); ?>
    <main id="section-data">
        <a href="./cadastro-crm.php">
            <div class="button-create"><i class="fa-solid fa-plus"></i></div>
        </a>
        <h1 class="title-panel">CRM</h1>        
        <?php 
            include('./admin/conexao.php');
            $sql_crm = "select * from cr_crm";
            $res = $conexao -> query($sql_crm);
            $qtd = $res -> num_rows;
            if($qtd > 0) {
                ?>
                <div class="accordion-menu">
                    <span class="item">Tarefas</span>
                    <span class="item">Nome</span>
                    <span class="item">Proximo Contato</span>
                    <span class="item">Situação</span>
                    <span class="item">...</span>
                    <span></span>
                </div>
                <?php
                while ($row = $res -> fetch_object()) { ?>
                    <div class="accordion-item">
                        <span class="itens"><?= $row-> cr_tarefa?></span>
                        <span class="itens"><?= $row-> cr_nome?></span>
                        <span class="itens"><?= $row-> cr_proxContato?></span>
                        <span class="itens"><?= $row-> cr_situacao?></span>
                        <div class="btn-crud">
                            <button class="btn btn-editar" onclick="location.href='./editar-crm.php?id=<?= $row-> cr_id?>'">Editar</button>
                            <button class="btn btn-excluir" onclick="
                                if(
                                    confirm('Tem certeza que seseja excluir?')
                                ){
                                    location.href='./admin/crud-crm.php?acao=excluir&id=<?= $row-> cr_id?>'
                                }else {
                                    false;
                                }
                            ">Excluir</button>
                        </div>
                        <span class="item-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                    <div class="panel">
                        <form action="#" class="panel_form">
                            <input disabled type="text" class="input-panel" placeholder="<?= $row-> cr_contato?>">
                            <div class="panel-div">
                                <input disabled type="text" class="input-panel" placeholder="<?= $row-> cr_dataInicio?>">
                                <input disabled type="text" class="input-panel" placeholder="DATA FINAL">
                            </div>
                            <input disabled type="text" class="input-panel" placeholder="<?= $row-> cr_observacao?>">
                        </form>
                    </div>

                <?php }
            } else {
            ?>
                <img src="./assets/image/tarefa.jpg" alt="Sem tarefa">  
            <?php
            }
        ?>        
    </main>
    <?php include('./footer.php'); ?>
    <script src="assets/js/home.js"></script>
</body>

</html>