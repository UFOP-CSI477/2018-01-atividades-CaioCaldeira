<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadoadmintrue'])){
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
        <h1>Lista de procedimentos</h1>
        <div class="table-responsive">
            <table class="table table-sm table-light table-striped table-bordered">
                <caption>Lista de procedimentos cadastrados</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Nome do criador do procedimento</th>
                        <th>E-mail do criador do procedimento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $lista as $linha ): ?>
                        <tr>
                            <td><?= $linha['id'] ?></td>
                            <td><?= $linha['name'] ?></td>
                            <td><?= $linha['price'] ?></td>
                            <td><?= $linha['nome'] ?></td>
                            <td><?= $linha['email'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div><br>
        <a href="router.php?op=17" class="btn btn-info adireitaemaior">Voltar ao menu do administrador.</a><br><br><br>
    </body>
</html>
