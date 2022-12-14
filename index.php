<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Radar Comercial</title>
    <link rel="stylesheet" href="assets/css/vars.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/e01d3ca5f5.js" crossorigin="anonymous"></script>
</head>
<body>
    <main id="login">
        <section id="section-banner">
            <div class="cabecalho">
                <img src="assets/image/Icone_radar.png" alt="Icone radar Comercial" class="image-soon">
                <h1 class="title">Radar Comercial</h1>
                <p class="paragraph">Encontre seus leads ideais de forma simples, rápida e fácil!</p>
            </div>
        </section>
        <section id="form-login">
            <img src="assets/image/logo.png" alt="Logo radar Comercial" class="logo">
            <div class="form-dados">
                <h2 class="sub-title">Entrar</h2>
                <p class="paragraph">Preencha seus dados para entrar</p>
                
                <?php 
                    if(isset($_SESSION['não autenticado'])):
                ?>
                <div class="error">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <p>Erro: Usuário ou senha inválido!</p>
                </div>
                <?php 
                    endif;
                    unset($_SESSION['não autenticado']);
                ?>
                <form action="./admin/login.php" method="post" class="form-login">                    
                    <div class="single-input">
                        <input
                        required 
                        type="text" 
                        id="formUsu"
                        class="input-personaliza"
                        name="usuario">                        
                        <label for="formUsu" class="personaliza">Usuário</label>
                    </div>
                    <div class="single-input">
                        <input
                        required 
                        type="password" 
                        id="formSenha"
                        class="input-personaliza"
                        name="senha">                        
                        <label for="formSenha" class="personaliza">Senha</label>
                    </div>                   
                    <p class="paragraph">Esqueci minha senha</p>
                    <input type="submit" value="Entrar" class="btn">
                </form>
                <div class="create-conta">
                    <p class="paragraph">Ainda não tem uma conta? </p>
                    <p class="paragraph destaque-min"><a href="./cadastro.php">Crie uma conta agora</a></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>