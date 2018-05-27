<!DOCTYPE html>
<?php
    if(!isset($_SESSION['autenticadotrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=2");
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
        <h1>Lista de exames solicitados</h1>
        <div class="table-responsive">
            <table class="table table-sm table-light table-striped table-bordered">
                <caption>Lista de exames solicitados</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>Id do exame</th>
                        <th>Nome do procedimento</th>
                        <th>Preço do procedimento</th>
                        <th>Data do exame</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $lista as $linha ): ?>
                        <tr>
                            <td><?= $linha['id'] ?></td>
                            <td><?= $linha['name'] ?></td>
                            <td><?= $linha['price'] ?></td>
                            <td><?= $linha['date'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td>Quantidade de exames:</td>
                        <td><?=   $lista->rowCount()     ?></td>
                    </tr>
                    <?php foreach( $SomaExames as $linha2 ): ?>
                        <tr>
                            <td colspan="2"></td>
                            <td>Valor total:</td>
                            <td><?= $linha2['SUM(procedures.price)'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tfoot>
            </table>
        </div><br>
        <a href="router.php?op=7" class="btn btn-info adireitaemaior">Voltar ao menu do paciente.</a><br><br><br>
    </body>
</html>
