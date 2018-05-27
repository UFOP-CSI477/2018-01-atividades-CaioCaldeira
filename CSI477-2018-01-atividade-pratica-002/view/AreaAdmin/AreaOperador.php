<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadooperadortrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=3");
    }
    if(isset($_SESSION['AlterarPreco'])){
        echo "<script>alert('Preço do procedimento alterador com sucesso.')</script>";
        unset ($_SESSION['AlterarPreco']);
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
        <h1>Sistema de Controle de Solicitações de Análises Laboratoriais - Área Operador</h1><br><br><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="router.php?op=19" class="btn btn-dark width100">Listar Exames</a><br><br><br>
                <a href="router.php?op=20" class="btn btn-dark width100">Alterar preço de um procedimento</a><br><br><br><br><br>
                <a href="router.php?op=3" class="btn btn-danger width100">Sair</a>
            </div>
            <div class="cold-md-2">
            </div>
        </div>
    </body>
</html>
