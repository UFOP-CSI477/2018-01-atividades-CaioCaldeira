<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadooperadortrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=3");
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
        <br>
        <h1>Lista de Exames</h1><br>
        <div class="table-responsive">
            <table class="table table-sm table-light table-striped table-bordered">
                <caption>Lista de exames</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>Id do exame</th>
                        <th>Nome do paciente</th>
                        <th>E-mail do paciente</th>
                        <th>Nome do procedimento</th>
                        <th>Preço do procedimento</th>
                        <th>Data do exame</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $lista as $linha ): ?>
                        <tr>
                            <td><?= $linha['id'] ?></td>
                            <td><?= $linha['nome'] ?></td>
                            <td><?= $linha['email'] ?></td>
                            <td><?= $linha['name'] ?></td>
                            <td><?= $linha['price'] ?></td>
                            <td><?= $linha['date'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div><br>
        <a href="router.php?op=18" class="btn btn-info adireitaemaior">Voltar ao menu do operador.</a><br><br><br>
    </body>
</html>
