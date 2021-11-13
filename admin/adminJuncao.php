<?php

    require_once('constantes/constantes.php');
    require_once('controles/exibiJuncao.php');
    require_once(SRC.'controles/listarJuncaoProdutos.php');
    require_once(SRC.'controles/listarJuncaoCategorias.php');

    session_start();

    $produtos = (string) 'Selecione um produto';
    $idProdutos = (int) null;
    $categorias = (string) 'Selecione uma categoria';
    $idCategorias = (int) null;
    $id = (int) 0;
    $modo = (string) 'Salvar';

    if (isset($_SESSION['juncao'])) {

        $produtos = $_SESSION['juncao']['Produto'];
        $categorias = $_SESSION['juncao']['Categoria'];
        $idProdutos = $_SESSION['juncao']['idprodutos'];
        $idCategorias = $_SESSION['juncao']['idcategorias'];
        $id = $_SESSION['juncao']['idprodutosCategorias'];
        $modo = 'Atualizar';

        unset($_SESSION['juncao']);

    }

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS - local privado</title>
    <link rel="stylesheet" href="assets/sass/admin.css">
    <link rel="stylesheet" href="assets/sass/juncao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.png">
</head>

<body>

    <header>
        <?php
            require_once('header.php');
        ?>
    </header>

    <section id="area-controle">
        <?php
            require_once('sectionControle.php');
        ?>
    </section>

    <main>
        <h2>
            junção de categorias e produtos
        </h2>

        <form action="controles/recebeJuncao.php?modo=<?=$modo?>&id=<?=$id?>" name="frmJuncao" method="post">
            <img src="assets/img/tridente.png" alt="Tridente" id="img1">
            <img src="assets/img/raio.png" alt="Raio" id="img2">

            <div id="container-form">
                <div id="caixa-select">
                    <select name="sltProdutos" required>
                        <option selected value="<?=$idProdutos?>"><?=$produtos?></option>
                        
                        <?php

                            $listarNome = exibirNomeProdutos();

                            while($rsJuncaoProduto = mysqli_fetch_assoc($listarNome)) {

                                ?>
                                    <option value="<?=$rsJuncaoProduto['idprodutos']?>"> <?=$rsJuncaoProduto['nome']?> </option>
                                <?php

                            }

                        ?>
                    </select>
                    
                    <select name="sltCategorias" required>
                        <option selected value="<?=$idCategorias?>"><?=$categorias?></option>
                        
                        <?php
                        
                            $listarNome = exibirNomeCategorias();

                            while($rsJuncaoCategoria = mysqli_fetch_assoc($listarNome)) {

                                ?>
                                    <option value="<?=$rsJuncaoCategoria['idcategorias']?>"> <?=$rsJuncaoCategoria['nome']?> </option>
                                <?php

                            }
                        
                        ?>
                    </select>
                </div>

                <div id="button">
                    <input type="submit" value="<?=$modo?>">
                </div>
            </div>
        </form>

        <div id="consultaDeDados">
            <table id="tblConsulta">
                <tr>
                    <td id="tblTitulo" colspan="3">
                        <h3>Manipulação De Dados.</h3>
                    </td>
                </tr>
                <tr class="tblLinhas">
                    <td class="tblColunas destaque">Produto</td>
                    <td class="tblColunas destaque">Categorias</td>
                    <td class="tblColunas destaque">Opções</td>
                </tr>

                <?php
                
                    $dadosjuncao = exibirJuncao();

                    while($rsJuncao = mysqli_fetch_assoc($dadosjuncao)) {
                
                ?>
                
                <tr class="tblLinhas">
                    <td class="tblColunas">
                        <?=$rsJuncao['Produto']?>
                    </td>
                    <td class="tblColunas">
                        <?=$rsJuncao['Categoria']?>
                    </td>

                    <td class="tblColunas">
                        
                        <a href="controles/editaJuncao.php?id=<?=$rsJuncao['idprodutosCategorias']?>">
                            <img src="assets/img/editar.png" alt="Editar" title="Editar" class="editar">
                        </a>
                    
                        <a onclick="return confirm('Tem certeza que deseja excluir o dado')" href="controles/excluiJuncao.php?id=<?=$rsJuncao['idprodutosCategorias']?>">
                            <img src="assets/img/x.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>
    </main>

    <footer>
        <?php
            require_once('footer.php');
        ?>
    </footer>

</body>

</html>