<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Central De Comando BG</title>
    <link rel="stylesheet" href="assets/sass/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="assets/js/olho.js" defer></script>
</head>

<body>

    <div id="caixa">
        <div id="titulo-login">
            <h1>Autenticação para o CMS</h1>
            <h2>BurguerGods</h2>
        </div>
        
        <form action="autenticar.php" method="post" name="frmLogin">
            <div class="label-float">
                <ion-icon name="mail-outline" class="icon-input-footer"></ion-icon>
                <input class="input-caixa-login" type="text" name="txtUser" value="" placeholder=" " maxlength="100" required="" autocomplete="off">
                <label>Nome de Usuário</label>
            </div>
            <div class="label-float">
                <ion-icon name="lock-closed-outline" class="icon-input-footer"></ion-icon>
                <span class="lnr lnr-eye"></span>
                <input id="password" type="password" class="input-caixa-login"  name="txtPassword" value="" placeholder=" " maxlength="50" required="">
                <label>Senha</label>
            </div>
            <div id="button">
                <input type="submit" value="Autenticar" name="btnLogin">
            </div>
        </form>
    </div>

    <!-- Scripts para icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>