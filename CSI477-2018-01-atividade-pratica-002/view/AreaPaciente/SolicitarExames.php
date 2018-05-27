<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadotrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=2");
    }
    if(isset($_SESSION['CadastroExameFail'])){
        echo "<script>alert('Impossível realizar esta solicitação. A data deve ser no mínimo amanha.')</script>";
        unset ($_SESSION['CadastroExameFail']);
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
        <script src="./CSS-JQuery/SolicitarExames.js"></script>
    </head>
    <body>
        <br><br>
        <h1>Inclusão de solicitação de exames</h1><br><br><br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <form method="post" action="router.php?op=11">

                    <label class="dif" for="Procedimento_Id">Procedimento:</label><br>
                    <select id="selectProcedimento" name="Procedimento_Id" class="width100 btn btn-info">
                        <option value="0">Selecione:</option>
                        <?php foreach( $lista as $e ): ?>
                            <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                        <?php endforeach ?>
                    </select><br><br>

                    <label class="dif" for="Data_Exame">Data do exame:</label><br>
                    <input type="date" id="inputData" class="" name="Data_Exame"><br><br><br>

                    <input type="submit" value="Solicitar" class="btn btn-success adireitaemaior" id="btn-Solicitar"><br><br>
                    <input type="reset" value="Limpar" class="btn btn-warning adireitaemaior"><br><br><br>

                </form>
                <a href="router.php?op=7" class="btn btn-danger width100">Voltar ao menu do paciente.</a>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </body>
</html>
