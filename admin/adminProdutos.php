<?php

    require_once('constantes/constantes.php');
    require_once('dataBase/conexaoSql.php');
    require_once('controles/exibiProdutos.php');

    session_start();

    $nome = (string) null;
    $descricao = (string) null;
    $imagem = (string) 'semFoto.png';
    $preco = (string) null;
    $desconto = (string) null;
    $destaque = (boolean) null;
    $id = (int) 0;
    $modo = (string) "Salvar";
    $destaqueNao = (boolean) "Não";
    $destaqueSim = (boolean) "Sim";

    if (isset($_SESSION['produtos'])) {

        $nome = $_SESSION['produtos']['nome'];
        $descricao = $_SESSION['produtos']['descricao'];
        $imagem = $_SESSION['produtos']['imagem'];
        $preco = $_SESSION['produtos']['preco'];
        $desconto = $_SESSION['produtos']['desconto'];
        $destaque = $_SESSION['produtos']['destaque'];
        $id = $_SESSION['produtos']['idprodutos'];
        $imagem = $_SESSION['produtos']['imagem'];
        $modo = 'Atualizar';
        $destaqueNao = 0;
        $destaqueSim = 1;

        unset($_SESSION['produtos']);

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
    <link rel="stylesheet" href="assets/sass/produtos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/js/file.js" defer></script>
    <script src="assets/js/validacao.js" defer></script>
    <script src="assets/js/modal.js" defer></script>
</head>

<body>

    <div id="container-modal" class="fechar">
        <div class="modal">
            
        </div>
    </div>

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
            Produtos
        </h2>

        <form enctype="multipart/form-data" action="controles/recebeProdutos.php?modo=<?=$modo?>&id=<?=$id?>&nomeImagem=<?=$imagem?>" name="frmProdutos" method="post">
            <img src="assets/img/tridente.png" alt="Tridente" id="img1">
            <img src="assets/img/raio.png" alt="Raio" id="img2">

            <div id="container-form">
                <div class="caixa">
                    <input type="file" accept="image/png, image/jpg, image/jpeg" name="fleImagem" id="arquivo" class="arquivo" required>
                    <input type="text" name="file" id="file" class="file" placeholder="Imagem do produto * " readonly="readonly">
                    <input type="button" class="btn" value="SELECIONAR">
                    <div id="visualizar-imagem">
                        <img src="<?=NOME_DIRETORIO_FILE.$imagem?>" id="fotopreview" alt="">
                    </div>
                </div>
                <div class="caixa">
                    <label class="centro">nome: </label>
                    <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Insira o nome do produto" class="input-caixa-login" onkeyup="caracteresInvalidos(this)" required maxlength="80">
                </div>
                <div id="caixa-textarea">
                    <label class="centro">descrição: </label>
                    <textarea name="txtDescricao" required maxlength="250" placeholder="Insira a descrição do produto"><?=$descricao?></textarea>
                </div>
                <div class="caixa">
                    <label class="centro">preço: </label>
                    <input type="text" name="txtPreco" value="<?=$preco?>" placeholder="Insira o preço" class="input-caixa-login" 
                    pattern="^\d*(\.\d{0,2})?$" required maxlength="6">
                </div>
                <div class="caixa">
                    <label class="centro">desconto: </label>
                    <input type="text" name="txtDesconto" value="<?=$desconto?>" placeholder="Insira um desconto" class="input-caixa-login" 
                    pattern="^\d*(\.\d{0,2})?$" required maxlength="6">
                </div>
                <div id="caixa-select">
                    <label class="centro">destaque: </label>
                    <select name="sltDestaque" required>
                        <option value="">Selecione uma opção</option>
                        <option value="<?=$destaqueSim?>"<?=$destaqueSim == $destaque? 'selected' : ''?>>Sim</option>
                        <option value="<?=$destaqueNao?>"<?=$destaqueNao == $destaque? 'selected' : ''?>>Não</option>
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
                    <td id="tblTitulo" colspan="12">
                        <h3>Manipulação De Dados.</h3>
                    </td>
                </tr>
                <tr class="tblLinhas">
                    <td class="tblColunas destaque">Nome</td>
                    <td class="tblColunas destaque">Descrição</td>
                    <td class="tblColunas destaque">Imagem</td>
                    <td class="tblColunas destaque">Preço</td>
                    <td class="tblColunas destaque">Desconto</td>
                    <td class="tblColunas destaque">Destaque</td>
                    <td class="tblColunas destaque">Opções</td>
                </tr>

                <?php
                
                    $dadosProdutos = exibirProdutos();

                    while($rsProdutos = mysqli_fetch_assoc($dadosProdutos)) {

                ?>
                
                <tr class="tblLinhas">
                    <td class="tblColunas"><?=$rsProdutos['nome']?></td>
                    <td class="tblColunas"><?=$rsProdutos['descricao']?></td>
                    <td class="tblColunas">
                        <img src="<?=NOME_DIRETORIO_FILE.$rsProdutos['imagem']?>" id="upload-imagem" alt="Imagem do produto">
                     </td>
                    <td class="tblColunas"><?=$rsProdutos['preco']?></td>
                    <td class="tblColunas"><?=$rsProdutos['desconto']?></td>
                    <td class="tblColunas"><?=$rsProdutos['destaque']?></td>

                    <td class="tblColunas">
                        <a href="controles/editaProdutos.php?id=<?=$rsProdutos['idprodutos']?>">
                            <img src="assets/img/editar.png" alt="Editar" title="Editar" class="editar ferramentas">
                        </a>

                        <a onclick="return confirm('Tem certeza que deseja excluir o dado')" href="controles/excluiProdutos.php?id=<?=$rsProdutos['idprodutos']?>&imagem=<?=$rsProdutos['imagem']?>">
                            <img src="assets/img/x.png" alt="Excluir" title="Excluir" class="excluir ferramentas">
                        </a>

                        <img src="assets/img/search.png" data-id="<?=$rsProdutos['idprodutos']?>" alt="Visualizar" title="Visualizar" class="pesquisar ferramentas">
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