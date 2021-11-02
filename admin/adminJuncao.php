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

        <form name="frmProdutos" method="post">
            <img src="assets/img/tridente.png" alt="Tridente" id="img1">
            <img src="assets/img/raio.png" alt="Raio" id="img2">

            <div id="container-form">
                <div id="caixa-select">
                    <select name="sltProdutos" required>
                        <option value="">Selecione um produto</option>
                        <option value="">Teste</option>
                    </select>
                    
                    <select name="sltProdutos" required>
                        <option value="">Selecione uma categoria</option>
                        <option value="">Teste</option>
                    </select>
                </div>

                <div id="button">
                    <input type="submit" value="Salvar">
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

                <tr class="tblLinhas">
                    <td class="tblColunas"></td>
                    <td class="tblColunas"></td>

                    <td class="tblColunas">
                        <a href="">
                            <img src="assets/img/editar.png" alt="Editar" title="Editar" class="editar">
                        </a>

                        <a href="">
                            <img src="assets/img/x.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>

                        <img src="assets/img/search.png" alt="Pesquisar" title="Visualizar">
                    </td>
                </tr>
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