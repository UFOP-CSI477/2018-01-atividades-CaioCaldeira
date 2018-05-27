<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['autenticadotrue'])){
        unset ($_SESSION['autenticadotrue']);
        echo "<script>alert('Você se deslogou.')</script>";
    }
    if(isset($_SESSION['autenticadoadmintrue'])){
        unset ($_SESSION['autenticadoadmintrue']);
        echo "<script>alert('Você se deslogou.')</script>";
    }
    if(isset($_SESSION['autenticadooperadortrue'])){
        unset ($_SESSION['autenticadooperadortrue']);
        echo "<script>alert('Você se deslogou.')</script>";
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
        <h1>Sistema de Controle de Solicitações de Análises Laboratoriais</h1><br><br><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="router.php?op=1" class="btn btn-danger width100">Área Geral</a><br><br><br>
                <a href="router.php?op=2" class="btn btn-success width100">Área do Paciente</a><br><br><br>
                <a href="router.php?op=3" class="btn btn-primary width100">Área Administrativa</a>
            </div>
            <div class="cold-md-2">
            </div>
        </div>
    </body>
</html>
