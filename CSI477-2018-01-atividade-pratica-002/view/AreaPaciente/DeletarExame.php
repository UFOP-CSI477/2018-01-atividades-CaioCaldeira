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
        <script src="./CSS-JQuery/jquery-3.3.1.js"></script>
        <script src="./CSS-JQuery/DeletarExame.js"></script>
    </head>
    <body>
        <br><br>
        <h1>Solicitação de exclusão de exame</h1><br><br><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <form method="post" action="router.php?op=14">

                    <label class="dif" for="Exame">Exame:</label><br>
                    <select id="selectExame" name="Exame" class="width100 btn btn-info">
                        <option value="0">Selecione:</option>
                        <?php foreach( $lista as $e ): ?>
                            <option value="<?= $e['id'] ?>">Nome: <?= $e['name'] ?>, Preço: <?= $e['price']?>, Data: <?= $e['date'] ?></option>
                        <?php endforeach ?>
                    </select><br><br>

                    <input type="submit" value="Deletar" class="btn btn-danger adireitaemaior" id="btn-Deletar"><br><br>
                    <input type="reset" value="Limpar" class="btn btn-warning adireitaemaior"><br><br><br><br><br><br><br>

                </form>
                <a href="router.php?op=7" class="btn btn-success width100">Voltar ao menu do paciente.</a>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </body>
</html>
