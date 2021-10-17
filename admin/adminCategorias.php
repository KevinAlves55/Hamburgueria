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

        <form name="frmCategorias" method="post">
            <img src="assets/img/tridente.png" alt="Tridente" id="img1">
            <img src="assets/img/raio.png" alt="Raio" id="img2">
            
            <div id="caixa">
                <label>nome da categoria: </label>
                <input type="text" name="categoria" value="" placeholder="Insira o nome da categoria" class="input-caixa-login" onkeyup="caracteresInvalidos(this)" required maxlength="50">
            </div>
            
            <div id="button">
                <input type="submit" value="Salvar">
            </div>
        </form>

        <div id="consultaDeDados">
           <?php
                require_once('sectionConsulta.php');
           ?> 
        </div>
    </main>

    <footer>
        <?php
            require_once('footer.php');
        ?>
    </footer>
</body>

</html>