<?php require_once("../somenteAutenticado.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../head-comum.inc"); ?>
    <script src="lista.js"></script>
</head>
<body>

    <div class="container">

        <?php require_once("../cabec.inc"); ?>

        <h1>Categorias</h1>

        <div id="nova">

            <div class="row mt-2">
                <div class="col-1">Categoria:</div>
                <div class="col-4">
                    <input type="text" id="descricao" name="descricao" class="form-control" />
                </div>
                <div class="col-1"><button id="adicionar" class="btn btn-primary">Adicionar</button></div>
            </div>

        </div>

        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>ID</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id="corpoTabela">
            </tbody>
        </table>
        <div class="spinner-border" role="status" style="display: none;"></div>
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

    <!-- Modal -->
    <div class="modal fade" id="modalAlteracao" tabindex="-1" aria-labelledby="modalAlteracaoLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalAlteracaoLabel">Alterar Categoria</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="idCategoriaParaAlterar" />
                <form>
                    <div class="form-group">
                        <label for="descricaoParaAlterar" class="col-form-label">Descrição:</label>
                        <input type="text" class="form-control" id="descricaoParaAlterar">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button id="alterar" type="button" class="btn btn-primary" data-bs-dismiss="modal">Alterar</button>
            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
        </div>
    </div>
    


</body>
</html>