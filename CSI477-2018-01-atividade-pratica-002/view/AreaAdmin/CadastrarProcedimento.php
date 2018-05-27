<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['autenticadoadmintrue'])){
        $_SESSION['Tentativadeacessarsemlogin'] = true;
        header("Location: router.php?op=3");
    }
?>
<head>
    <meta charset="utf-8">
    <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
    <style type="text/css">
    </style>
    <link rel="stylesheet" href="./CSS-JQuery/Bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="./CSS-JQuery/Config.css">
    <script src="./CSS-JQuery/jquery-3.3.1.js"></script>
    <script src="./CSS-JQuery/CadastroProcedimento.js"></script>
</head>
<body>
    <br><br>
    <h1>Cadastro de Procedimento</h1><br><br><br>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <form method="post" action="router.php?op=26">
                <label class="dif" for="name"> Nome do Procedimento:</label>
                <input type="text" class="eoq" name="name" id="inputName" placeholder="Por favor digite o nome do procedimento."><br><br><br><br>

                <label class="dif" for="preco"> Preço do Procedimento:</label>
                <input type="text" class="eoq" name="preco" id="inputPreco" placeholder="Por favor digite o preço do procedimento."><br><br><br>

                <input type="submit" value="Cadastrar" class="btn btn-success adireitaemaior" id="btn-Cadastrar"><br><br>
                <input type="reset" value="Limpar" class="btn btn-warning adireitaemaior"><br><br><br><br>

            </form>
            <a href="router.php?op=17" class="btn btn-danger width100">Voltar ao menu do administrador.</a>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</body>
