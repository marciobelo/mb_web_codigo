<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head-comum.inc"); ?>
    <script src="login.js"></script>
</head>
<body>

    <div class="container">

        <?php require_once("cabec.inc"); ?>
    
        <div class="row mt-2">
            <div class="col-1">Login:</div>
            <div class="col-4">
                <input type="text" id="login" name="login" class="form-control" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-1">&nbsp;</div>
            <div class="col-4">
                <p>Dica: só mbelo está autorizado!</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-1">Senha:</div>
            <div class="col-4">
                <input type="password" id="senha" name="senha" class="form-control" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-1">&nbsp;</div>
            <div class="col-4">
                <p>Dica: usar a senha patasDeGalinha!</p>
            </div>
        </div>

        <button id="entrar" class="btn btn-primary">Entrar</button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalLabel">Bazar Tem Tudo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="mensagemModal"></div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
        </div>
    </div>

</body>
</html>