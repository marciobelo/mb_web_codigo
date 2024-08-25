<?php require_once("../somenteAutenticado.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../head-comum.inc"); ?>
</head>
<body>

    <div class="container">

        <?php require_once("../cabec.inc"); ?>

        <h1>Catálogo de Produtos</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/BazarTemTudo/imgs/alicate.jpg" alt="Alicate"></td>
                    <td>R$ 20,00</td>
                    <td>Ferramentas</td>
                </tr>
                <tr>
                    <td><img src="/BazarTemTudo/imgs/martelo.jpg" alt="Martelo"></td>
                    <td>R$ 54,32</td>
                    <td>Ferramentas</td>
                </tr>
                <tr>
                    <td><img src="/BazarTemTudo/imgs/serrote.jpg" alt="Serrote"></td>
                    <td>R$ 12,34</td>
                    <td>Ferramentas</td>
                </tr>
            </tbody>
        </table>

    </div>

    
</body>
</html>