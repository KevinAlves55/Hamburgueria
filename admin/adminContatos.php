<?php

    require_once('constantes/constantes.php');
    require_once('dataBase/conexaoSql.php');
    require_once('controles/exibiContatos.php');

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS - local privado</title>
    <link rel="stylesheet" href="assets/sass/admin.css">
    <link rel="stylesheet" href="assets/sass/contatos.css">
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
            Contatos
        </h2>

        <div id="consultaDeDados">
            <table id="tblConsulta">
                <tr>
                    <td id="tblTitulo" colspan="3">
                        <h3>Consulta De Dados.</h3>
                    </td>
                </tr>
                <tr class="tblLinhas">
                    <td class="tblColunas destaque">Nome</td>
                    <td class="tblColunas destaque">E-mail</td>
                    <td class="tblColunas destaque">Celular</td>
                    <td class="tblColunas destaque">Opção</td>
                </tr>

                <?php
                
                    $dadosContatos = exibirContatos();

                    while ($rsContatos = mysqli_fetch_assoc($dadosContatos)) {
                
                ?>

                    <tr class="tblLinhas">
                        <td class="tblColunas">
                            <?=$rsContatos['nome']?>
                        </td>
                        <td class="tblColunas">
                            <?=$rsContatos['email']?>
                        </td>
                        <td class="tblColunas">
                            <?=$rsContatos['celular']?>
                        </td>
                        
                        <td class="tblColunas">
                            <a onclick="return confirm('Tem certeza que deseja excluir o dado')" 
                            href="controles/excluiContatos.php?id=<?=$rsContatos['idcontatos']?>">
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