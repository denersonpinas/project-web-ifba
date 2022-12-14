<?php 
    session_start();
    include('./admin/conexao.php'); 
    $sql_crm = "select * from cr_crm where cr_id =" . $_REQUEST['id'];
    $res = $conexao->query($sql_crm);
    $row = $res -> fetch_object();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Comercial</title>
    <link rel="stylesheet" href="assets/css/vars.css">
    <link rel="stylesheet" href="assets/css/crud-crm.css">
    <script src="https://kit.fontawesome.com/e01d3ca5f5.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('./header.php'); ?>
    <main id="section-data">
        <h1 class="title-panel">CRM</h1>
        <p class="paragraph">Edite uma tarefa</p>
        <form action="./admin/crud-crm.php" class="form-addUpdate" method="post">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?= $row->cr_id ?>">
            <div class="panel-div">
                <div class="single-input">
                    <input
                    required 
                    type="text" 
                    id="formTarefa"
                    class="input-personaliza"
                    name="tarefa"
                    value="<?= $row->cr_tarefa ?>">                        
                    <label for="formTarefa" class="personaliza">Tarefa</label>
                </div>
                <div class="single-input">
                    <input
                    type="text" 
                    id="formNome"
                    class="input-personaliza"
                    name="nome"
                    value="<?= $row->cr_nome ?>">                        
                    <label for="formNome" class="personaliza">Nome</label>
                </div>
            </div>
            <div class="panel-div">
                <div class="single-input">
                    <input
                    required 
                    type="text" 
                    id="formContato"
                    class="input-personaliza"
                    name="contato"
                    value="<?= $row->cr_contato ?>">                        
                    <label for="formContato" class="personaliza">Contato</label>
                </div>
                <div class="single-input">
                    <input
                    required 
                    type="text" 
                    id="formCliente"
                    class="input-personaliza"
                    name="cliente"
                    value="<?= $row->cr_cliente ?>">                        
                    <label for="formCliente" class="personaliza">Cliente</label>
                </div>
            </div>
            <div class="panel-div">                
                <div class="select-input">
                    <label for="formSituacao" class="label-completo">Situação</label> 
                    <select 
                    name="situacao" 
                    class="input-personalizado"
                    required
                    value="<?= $row->cr_situacao ?>"
                    >
                        <option value="andamento">Andamento</option>
                        <option value="concluido">Concluido</option>
                        <option value="cancelado">Cancelado</option>
                    </select>            
                </div>
            </div>
            <div class="panel-div">
                <div class="select-input">
                    <label for="formProxContact" class="label-completo">Proximo Contato</label>
                    <input
                    required 
                    type="date" 
                    id="formProxContact"
                    class="input-personaliza"
                    name="proxContato"
                    value="<?= $row->cr_proxContato ?>">                        
                </div>
                <div class="select-input">
                    <label for="formDataFin" class="label-completo">Data Final</label>
                    <input
                    type="date" 
                    id="formDataFin"
                    class="input-personaliza"
                    name="dataFinal"
                    value="<?= $row->cr_dataFinal ?>">                        
                </div>
            </div>
            <div class="select-input">
                <label for="formAtendimento" class="label-completo">Atendimento</label>
                <input
                type="text" 
                id="formAtendimento"
                class="input-completo"
                name="atendimento"
                value="<?= $row->cr_observacao ?>">                        
            </div>
            <div class="panel-div">
                <a class="btn btn-cancel" href="./home.php">Cancelar</a>
                <input type="submit" value="Editar" class="btn">
            </div>
        </form>
    </main>
    <?php include('./footer.php'); ?>
    <script src="assets/js/home.js"></script>
</body>
</html>