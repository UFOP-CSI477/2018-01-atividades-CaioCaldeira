<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício_07</title>
        <style type="text/css">
        </style>
        <link rel="stylesheet" href="./Bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="./Config.css">
    </head>
    <body>
        <br>
        <h1>Lista de alunos</h1><br>
        <div class="table-responsive">
            <table class="table table-sm table-light table-striped table-bordered">
                <caption>Lista de alunos</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Cep</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $lista as $linha ): ?>
                        <tr>
                            <td><?= $linha['id'] ?></td>
                            <td><?= $linha['nome'] ?></td>
                            <td><?= $linha['rua'] ?></td>
                            <td><?= $linha['numero'] ?></td>
                            <td><?= $linha['bairro'] ?></td>
                            <td><?= $linha['nomeC'] ?></td>
                            <td><?= $linha['cep'] ?></td>
                            <td><?= $linha['mail'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div><br>
        <a href="index.php" class="btn btn-info adireitaemaior">Voltar à página inicial.</a><br><br><br>
    </body>
</html>
