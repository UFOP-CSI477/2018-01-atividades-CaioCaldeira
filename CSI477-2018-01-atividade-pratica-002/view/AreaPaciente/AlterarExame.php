<!DOCTYPE html>
<?php
    if(!isset($_SESSION['autenticadotrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=2");
    }
    if(isset($_SESSION['AlteraExameFail'])){
        echo "<script>alert('Impossível realizar a atualização. A data deve ser no mínimo amanha.')</script>";
        unset ($_SESSION['AlteraExameFail']);
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
        <script src="./CSS-JQuery/AlterarExame.js"></script>
    </head>
    <body>
        <br><br>
        <h1>Solicitação de alteração do exame</h1><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <form method="post" action="router.php?op=15">

                    <label class="dif" for="Exame">Exame que irá alterar:</label><br>
                    <select id="selectExame" name="Exame" class="width100 btn btn-info">
                        <option value="0">Selecione:</option>
                        <?php foreach( $lista as $e ): ?>
                            <option value="<?= $e['id'] ?>">Nome: <?= $e['name'] ?>, Preço: <?= $e['price']?>, Data: <?= $e['date'] ?></option>
                        <?php endforeach ?>
                    </select><br><br>

                    <label class="dif" for="Procedimento">Novo procedimento:</label><br>
                    <select id="selectProcedimento" name="Procedimento" class="width100 btn btn-info">
                        <option value="0">Selecione:</option>
                        <?php foreach( $lista2 as $f ): ?>
                            <option value="<?= $f['id'] ?>"><?= $f['name'] ?></option>
                        <?php endforeach ?>
                    </select><br><br>

                    <label class="dif" for="Data">Nova data:</label><br>
                    <input type="date" name="Data" id="inputData"><br><br>


                    <input type="submit" value="Alterar" class="btn btn-success adireitaemaior" id="btn-Alterar"><br><br>
                    <input type="reset" value="Limpar" class="btn btn-warning adireitaemaior"><br><br>

                </form>
                <a href="router.php?op=7" class="btn btn-danger adireitaemaior">Voltar ao menu do paciente.</a>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </body>
</html>
