<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Radar Comercial</title>
    <link rel="stylesheet" href="assets/css/vars.css">
    <link rel="stylesheet" href="assets/css/login.css">
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
                <h2 class="sub-title">Criar conta</h2>
                <p class="paragraph">Não possui uma conta? Cadastre-se agora</p>
                <form action="admin/cadastro.php" method="post" class="form-login">                    
                    <div class="single-input">
                        <input
                        required 
                        type="text" 
                        id="formNome"
                        class="input-personaliza"
                        name="nome">                        
                        <label for="formNome" class="personaliza">Nome</label>
                    </div>
                    <div class="single-input">
                        <input
                        required 
                        type="text" 
                        id="formSobrenome"
                        class="input-personaliza"
                        name="sobrenome">                        
                        <label for="formSobrenome" class="personaliza">Sobrenome</label>
                    </div>   
                    <div class="single-input">
                        <input
                        required 
                        type="email" 
                        id="formEmail"
                        class="input-personaliza"
                        name="email">                        
                        <label for="formEmail" class="personaliza">E-mail</label>
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
                    <input type="submit" value="Cadastrar" class="btn-login">
                </form>
                <div class="create-conta">
                    <p class="paragraph">Já possui uma conta?</p>
                    <p class="paragraph destaque-min"><a href="./index.php">Clique aqui</a></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>