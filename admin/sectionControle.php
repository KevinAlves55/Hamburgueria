<?php

    if (session_status() != PHP_SESSION_ACTIVE) {   
        
        session_start();

    }

?>

<div class="conteudo">
    <div id="nav-controles">
        <div class="opcoes-nav-controles">
            <img src="assets/img/home.png" alt="Home">
            <span><a href="admin.php">Home</a></span>
        </div>
        <div class="opcoes-nav-controles">
            <img src="assets/img/produtos.png" alt="Adm produtos">
            <span><a href="adminProdutos.php">Adm. de produtos</a></span>
        </div>
        <div class="opcoes-nav-controles">
            <img src="assets/img/filtro.png" alt="Categorias">
            <span><a href="adminCategorias.php">Adm. de categorias</a></span>
        </div>
        <div class="opcoes-nav-controles">
            <img src="assets/img/juncao.png" alt="Adm produtos">
            <span><a href="adminJuncao.php">Adm. de junção</a></span>
        </div>
        <div class="opcoes-nav-controles">
            <img src="assets/img/contatos.png" alt="Contatos">
            <span><a href="adminContatos.php">Contatos</a></span>
        </div>
        <div class="opcoes-nav-controles">
            <img src="assets/img/usuarios.png" alt="Usúarios">
            <span><a href="adminUsuarios.php">Usuários</a></span>
        </div>
    </div>
    <div id="logout">
        <span>Bem vindo <?=$_SESSION['nomeUsuario'];?></span>
        <img src="assets/img/logout.png" alt="Logout">
        <i><a href="#">Logout</a></i>
    </div>
</div>