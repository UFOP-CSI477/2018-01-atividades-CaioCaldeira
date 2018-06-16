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
        <h1>Inserir Aluno</h1><br>
        <form method="post" action="router.php?op=4">
            <div class="row">
                <div class ="col-md-1">
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="nome" class="control-label col-sm-2 dif">Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome">
                    </div><br>
                    <div class="form-group">
                        <label for="rua" class="control-label col-sm-2 dif">Rua:</label>
                        <input type="text" name="rua" class="form-control" placeholder="Digite o nome da sua rua">
                    </div><br>
                    <div class="form-group">
                        <label for="numero" class="control-label col-sm-2 dif">Número:</label>
                        <input type="text" name="numero" class="form-control" placeholder="Digite o número da sua casa">
                    </div><br>
                    <div class="form-group">
                        <label for="bairro" class="control-label col-sm-2 dif">Bairro:</label>
                        <input type="text" name="bairro" class="form-control" placeholder="Digite o nome do seu bairro">
                    </div><br><br>
                    <input type="submit" value="Inserir" class="btn btn-success width100"><br><br>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="cep" class="control-label col-sm-2 dif">Cep:</label>
                        <input type="text" name="cep" class="form-control" placeholder="Digite o cep de onde mora">
                    </div><br>
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2 dif">E-mail:</label>
                        <input type="text" name="email" class="form-control" placeholder="Digite o seu e-mail">
                    </div><br>
                    <div class="form-group">
                        <label for="cidade" class="control-label col-sm-2 dif">Cidade:</label>
                        <select name="cidade" class="width100 btn btn-dark form-control">
                            <option value="0">Selecione:</option>
                            <?php foreach( $lista as $f ): ?>
                                <option value="<?= $f['id'] ?>"><?= $f['nome']?></option>
                            <?php endforeach ?>
                        </select>
                    </div><br><br><br><br><br><br><br>
                    <input type="reset" value="Limpar" class="btn btn-warning width100"><br><br>
                </div>
                <div class ="col-md-1">
                </div>
            </div><br>
        </form>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <a href="index.php" class="btn btn-info width100">Voltar à página inicial.</a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </body>
</html>
