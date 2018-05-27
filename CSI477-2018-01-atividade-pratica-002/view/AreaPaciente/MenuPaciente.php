<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadotrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=2");
    }
    if(isset($_SESSION['CadastroExame'])){
        echo "<script>alert('Exame solicitado com sucesso.')</script>";
        unset ($_SESSION['CadastroExame']);
    }
    if(isset($_SESSION['DeleteExame'])){
        echo "<script>alert('Exame deletado com sucesso.')</script>";
        unset ($_SESSION['DeleteExame']);
    }
    if(isset($_SESSION['AlteraExame'])){
        echo "<script>alert('Exame alterado com sucesso.')</script>";
        unset ($_SESSION['AlteraExame']);
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
        <h1>Sistema de Controle de Solicitações de Análises Laboratoriais - Área Paciente</h1><br><br><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="router.php?op=8" class="btn btn-info width100">Solicitar exames</a><br><br><br>
                <a href="router.php?op=12" class="btn btn-warning width100">Alterar solicitação de exame</a><br><br><br>
                <a href="router.php?op=13" class="btn btn-dark width100">Excluir solicitação de exame</a><br><br><br>
                <a href="router.php?op=9" class="btn btn-success width100">Exibir lista de exames solicitados.</a><br><br><br>
                <a href="router.php?op=10" class="btn btn-danger width100">Sair.</a><br><br><br>
            </div>
            <div class="cold-md-2">
            </div>
        </div>
    </body>
</html>
