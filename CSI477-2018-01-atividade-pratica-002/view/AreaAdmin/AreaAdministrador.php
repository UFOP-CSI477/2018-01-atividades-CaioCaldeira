<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadoadmintrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=3");
    }
    if(isset($_SESSION['CadastroProcedimento'])){
        echo "<script>alert('Cadastro de Procedimento realizado com sucesso.')</script>";
        unset ($_SESSION['CadastroProcedimento']);
    }
    if(isset($_SESSION['AtualizarProcedimento'])){
        echo "<script>alert('Atualização de Procedimento realizado com sucesso.')</script>";
        unset ($_SESSION['AtualizarProcedimento']);
    }
    if(isset($_SESSION['DeletarProcedimento'])){
        echo "<script>alert('Exclusão de Procedimento realizado com sucesso.')</script>";
        unset ($_SESSION['DeletarProcedimento']);
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
        <br><br>
        <h1>Sistema de Controle de Solicitações de Análises Laboratoriais - Área Administrador</h1><br><br><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="router.php?op=22" class="btn btn-dark width100">Listar Procedimentos</a><br><br><br>
                <a href="router.php?op=23" class="btn btn-dark width100">Cadastrar Procedimento</a><br><br><br>
                <a href="router.php?op=24" class="btn btn-dark width100">Alterar Procedimento</a><br><br><br>
                <a href="router.php?op=25" class="btn btn-dark width100">Excluir Procedimento</a><br><br><br><br><br>
                <a href="router.php?op=3" class="btn btn-danger width100">Sair</a>
            </div>
            <div class="cold-md-2">
            </div>
        </div>
    </body>
</html>
