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
                    <td class="colunas destaque-modal"><?=$dadosProdutos['nome']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Descrição:</td>
                    <td class="colunas destaque-modal"><?=$dadosProdutos['descricao']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Imagem:</td>
                    <td class="colunas">
                        <img src="<?=NOME_DIRETORIO_FILE.$dadosProdutos['imagem']?>" id="imagem-produto" alt="">
                    </td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Preço:</td>
                    <td class="colunas destaque-modal"><?=$dadosProdutos['preco']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Desconto:</td>
                    <td class="colunas destaque-modal"><?=$dadosProdutos['desconto']?></td>
                </tr>
                <tr class="linhas">
                    <td class="colunas">Destaque:</td>
                    <td class="colunas destaque-modal"><?=$dadosProdutos['destaque']?></td>
                </tr>
            </table>
        </div> 
    </body>
</html>