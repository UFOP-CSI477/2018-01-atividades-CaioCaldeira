<!DOCTYPE html>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $lista as $linha ): ?>
                        <tr>
                            <td><?= $linha['id'] ?></td>
                            <td><?= $linha['name'] ?></td>
                            <td><?= $linha['price'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div><br>
        <a href="index.php" class="btn btn-info adireitaemaior">Voltar à página inicial</a><br><br><br>
    </body>
</html>
