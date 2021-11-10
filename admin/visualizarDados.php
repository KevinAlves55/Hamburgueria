<?php

    require_once('constantes/constantes.php');
    require_once('controles/visualizarProdutos.php');

    $id = $_GET['id'];
    $dadosProdutos = visualizarProdutos($id);

?>

<html>
    <head>
        <title>Visualizar</title>
    </head>
    <body>
        <div id="container">
            <table class="tblPesquisar">
                <tr class="linhas">
                    <td class="colunas">Nome:</td>
                    <td class="colunas"><?=$dadosProdutos['nome']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Descrição:</td>
                    <td class="colunas"><?=$dadosProdutos['descricao']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Imagem:</td>
                    <td class="colunas"><?=$dadosProdutos['imagem']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Preço:</td>
                    <td class="colunas"><?=$dadosProdutos['preco']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Desconto:</td>
                    <td class="colunas"><?=$dadosProdutos['desconto']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Destaque:</td>
                    <td class="colunas"><?=$dadosProdutos['destaque']?></td>
                </tr>
            </table>
        </div>
    </body>
</html>