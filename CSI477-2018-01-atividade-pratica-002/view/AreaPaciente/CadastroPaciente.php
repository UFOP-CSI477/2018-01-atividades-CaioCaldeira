<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['cadastropacientefalse'])){
        echo "<script>alert('E-mail já existente.')</script>";
        unset ($_SESSION['cadastropacientefalse']);
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
        <link rel="stylesheet" href="./CSS-JQuery/Bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="./CSS-JQuery/Config.css">
        <script src="./CSS-JQuery/jquery-3.3.1.js"></script>
        <script src="./CSS-JQuery/CadastroPaciente.js"></script>
    </head>
    <body>
        <br>
        <h1>Cadastro de paciente</h1>
        <br>
        <div class="minha-div-cadastro">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <form method="post" action="router.php?op=6">
                        <h4>Faça o seu cadastro</h4>
                        <label for="nome">Nome:</label><br>
                        <input type="text" name="nome" class="login" id="inputNome" placeholder="Digite seu nome"><br><br>

                        <label for="email">E-mail:</label><br>
                        <input type="text" name="email" class="login" id="inputEmail" placeholder="Digite seu e-mail"><br><br>

                        <label for="senha">Senha:</label><br>
                        <input type="password" name="senha" class="login" id="password" placeholder="Digite sua senha"><br><br>

                        <label for="senha2">Confirmação da senha:</label><br>
                        <input type="password" name="senha2" class="login" id="password2" placeholder="Digite novamente sua senha"><br><br>

                        <input type="submit" class="btn btn-success adireitaemaior" id="btnCadastro" value="Cadastrar">
                        <input type="reset" value="Limpar" class="btn btn-warning adireitaemaior">
                    </form>
                    <br><br><br>
                    <a href="router.php?op=2">Voltar à área de login do paciente</a>
                    <a href="index.php" class="adireita">Voltar à página inicial</a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </body>
</html>
