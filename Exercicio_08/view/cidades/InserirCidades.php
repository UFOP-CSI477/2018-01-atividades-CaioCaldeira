<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício_08</title>
        <style type="text/css">
        </style>
        <link rel="stylesheet" href="./Bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="./Config.css">
    </head>
    <body>
        <h1>Inserir Cidade</h1><br>
        <form method="post" action="router.php?op=5">
            <div class="row">
                <div class ="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="nome" class="control-label col-sm-2 dif">Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome da cidade">
                    </div><br>
                    <div class="form-group">
                        <label for="estado" class="control-label col-sm-2 dif">Estado:</label>
                        <select name="estado" class="width100 btn btn-dark form-control">
                            <option value="0">Selecione:</option>
                            <?php foreach( $lista as $f ): ?>
                                <option value="<?= $f['id'] ?>"><?= $f['nome']?></option>
                            <?php endforeach ?>
                        </select>
                    </div><br><br><br><br><br>
                    <input type="submit" value="Inserir" class="btn btn-success width100"><br><br>
                    <input type="reset" value="Limpar" class="btn btn-warning width100"><br><br>
                    <a href="index.php" class="btn btn-info width100">Voltar à página inicial.</a>
                </div>
                <div class ="col-md-1">
                </div>
            </div><br>
        </form>
    </body>
</html>
