<?php

    require_once('constantes/constantes.php');
    require_once('dataBase/conexaoSql.php');
    require_once('controles/exibiUsuarios.php');

    session_start();

    $nome = (string) null;
    $usuario = (string) null;
    $senha = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";

    if (isset($_SESSION['usuarios'])) {

        $nome = $_SESSION['usuarios']['nome'];
        $usuario = $_SESSION['usuarios']['usuario'];
        $senha = $_SESSION['usuarios']['senha'];
        $id = $_SESSION['usuarios']['idusuarios'];
        $modo = "Atualizar";

        unset($_SESSION['usuarios']);

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
    <link rel="stylesheet" href="assets/sass/usuario.css">
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
            Usúarios
        </h2>

        <form action="controles/recebeUsuarios.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCategorias" method="post">
            <img src="assets/img/tridente.png" alt="Tridente" id="img1">
            <img src="assets/img/raio.png" alt="Raio" id="img2">

            <div id="container-form">
                <div id="caixa">
                    <label>nome do usúario: </label>
                    <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Insira o nome do usúario" class="input-caixa-login" onkeyup="caracteresInvalidos(this)" required maxlength="100">
                </div>
                <div id="caixa">
                    <label class="centro">usúario: </label>
                    <input type="text" name="txtUsuario" value="<?=$usuario?>" placeholder="Insira o usúario" class="input-caixa-login" required maxlength="100">
                </div>
                <div id="caixa">
                    <label class="centro">senha: </label>
                    <input type="password" name="txtSenha" value="<?=$senha?>" placeholder="Insira a senha" class="input-caixa-login" required maxlength="100">
                </div>

                <div id="button">
                    <input type="submit" value="<?=$modo?>">
                </div>
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
                    <td class="tblColunas destaque">Usuario</td>
                    <td class="tblColunas destaque">Senha</td>
                    <td class="tblColunas destaque">Opções</td>
                </tr>

                <?php

                    $dadosUsuarios = exibirUsuarios();                    

                    while($rsUsuarios = mysqli_fetch_assoc($dadosUsuarios)) {

                ?>

                <tr class="tblLinhas">
                    <td class="tblColunas"><?=$rsUsuarios['nome']?></td>
                    <td class="tblColunas"><?=$rsUsuarios['usuario']?></td>
                    <td class="tblColunas"><?=$rsUsuarios['senha']?></td>

                    <td class="tblColunas">
                        <a href="controles/editaUsuarios.php?id=<?=$rsUsuarios['idusuarios']?>">
                            <img src="assets/img/editar.png" alt="Editar" title="Editar" class="editar">
                        </a>

                        <a onclick="return confirm('Tem certeza que deseja excluir esse dado?')" href="controles/excluiUsuarios.php?id=<?=$rsUsuarios['idusuarios']?>">
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