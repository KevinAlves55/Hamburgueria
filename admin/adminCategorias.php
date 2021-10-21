<?php

    require_once('constantes/constantes.php');
    require_once('dataBase/conexaoSql.php');
    require_once('controles/exibiCategorias.php');

    session_start();

    $nome = (string) null;
    $id = (int) 0;

    // Essa variavel será utilizada para definir o modo de manipulação com o BD(Se ela for salvar será feito o insert, se ela tiver atualizar, será feito o update do dado)

    $modo = (string) "Salvar";

    if (isset($_SESSION['categorias'])) {

        $nome = $_SESSION['categorias']['nome'];
        $id = $_SESSION['categorias']['idcategorias'];
        $modo = "Atualizar";

        // Elimina um objeto, varivel da memória
        unset($_SESSION['categorias']);
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
    <link rel="stylesheet" href="assets/sass/categorias.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="assets/js/validacao.js" defer></script>
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
            Categorias
        </h2>

        <form action="controles/recebeCategorias.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCategorias" method="post">
            <img src="assets/img/tridente.png" alt="Tridente" id="img1">
            <img src="assets/img/raio.png" alt="Raio" id="img2">

            <div id="caixa">
                <label>nome da categoria: </label>
                <input type="text" name="txtCategoria" value="<?=$nome?>" placeholder="Insira o nome da categoria" class="input-caixa-login" onkeyup="caracteresInvalidos(this)" required maxlength="50">
            </div>

            <div id="button">
                <input type="submit" value="<?=$modo?>">
            </div>
        </form>

        <div id="consultaDeDados">
            <table id="tblConsulta">
                <tr>
                    <td id="tblTitulo" colspan="6">
                        <h3>Manipulação De Dados.</h3>
                    </td>
                </tr>
                <tr class="tblLinhas">
                    <td class="tblColunas destaque">Nome</td>
                    <td class="tblColunas destaque">Opções</td>
                </tr>

                <?php

                    $dadosCategorias = exibirCategorias();

                    while ($rsCategorias = mysqli_fetch_assoc($dadosCategorias)) {

                ?>

                <tr class="tblLinhas">
                    <td class="tblColunas">
                        <?=$rsCategorias['nome']?>
                    </td>

                    <td class="tblColunas">
                        <a href="controles/editaCategorias.php?id=<?=$rsCategorias['idcategorias']?>">
                            <img src="assets/img/editar.png" alt="Editar" title="Editar" class="editar">
                        </a>

                        <a onclick="return confirm('Tem certeza que deseja excluir o dado?');" href="controles/excluiCategorias.php?id=<?=$rsCategorias['idcategorias']?>">
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