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
        <script src="./CSS-JQuery/jquery-3.3.1.js"></script>
        <script src="./CSS-JQuery/AlterarPreco.js"></script>
    </head>
    <body>
        <br><br>
        <h1>Alteração de preço dos procedimentos</h1><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <form method="post" action="router.php?op=21">

                    <label class="dif" for="Procedimento">Procedimento a ser alterado:</label><br>
                    <select id="selectProcedimento" name="Procedimento" class="width100 btn btn-info">
                        <option value="0">Selecione:</option>
                        <?php foreach( $lista as $f ): ?>
                            <option value="<?= $f['id'] ?>">Nome: <?= $f['name']?>, Preço: <?= $f['price']?></option>
                        <?php endforeach ?>
                    </select><br><br>

                    <label class="dif" for="Preco">Novo preço do procedimento:</label><br>
                    <input type="text" name="Preco" id="inputPreco" class="eoq"><br><br>


                    <input type="submit" value="Alterar" class="btn btn-success adireitaemaior" id="btn-Alterar"><br><br>
                    <input type="reset" value="Limpar" class="btn btn-warning adireitaemaior"><br><br>

                </form>
                <a href="router.php?op=18" class="btn btn-danger adireitaemaior">Voltar ao menu do operador.</a>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </body>
</html>
