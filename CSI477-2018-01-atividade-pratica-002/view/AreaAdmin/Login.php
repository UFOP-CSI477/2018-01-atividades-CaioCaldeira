<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['autenticadoadminfalse'])){
        echo "<script>alert('E-mail ou senha inválidos.')</script>";
        unset ($_SESSION['autenticadoadminfalse']);
    }
    if(isset($_SESSION['autenticadoadmintrue'])){
        unset ($_SESSION['autenticadoadmintrue']);
        echo "<script>alert('Você se deslogou.')</script>";
    }
    if(isset($_SESSION['autenticadooperadortrue'])){
        unset ($_SESSION['autenticadooperadortrue']);
        echo "<script>alert('Você se deslogou.')</script>";
    }
    if(isset($_SESSION['autenticadotrue'])){
        unset ($_SESSION['autenticadotrue']);
        echo "<script>alert('Você se deslogou.')</script>";
    }
    if(isset($_SESSION['Tentativadeacessarsemlogin'])){
        unset ($_SESSION['Tentativadeacessarsemlogin']);
        echo "<script>alert('Faça o login para ter acesso a esta página.')</script>";
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
        <style type="text/css">
        </style>
        <link rel="stylesheet" href="./CSS-JQuery/Bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="./CSS-JQuery/Config.css">
    </head>
    <body>
        <br><br><br>
        <div class="minha-div">
            <br><br>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <h4>Login - Admin</h4><br><br>
                    <form action="router.php?op=16" method="post">
                            <label for="usuario">Usuário:</label><br>
                            <input type="text" name="usuario" class="login"  placeholder="Digite seu e-mail"><br><br>

                            <label for="senha">Senha:</label><br>
                            <input type="password" name="senha" class="login" placeholder="Digite sua senha"><br><br><br>

                            <input type="submit" class="btn btn-success width100" name="btnAcesso" value="Acessar"><br><br>
                            <input type="reset" class="btn btn-warning width100" name="btnLimpar" value="Limpar"><br><br><br>
                    </form>
                    <a href="index.php" class="adireita">Voltar à página inicial</a><br><br>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </body>
</html>
