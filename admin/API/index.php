<?php
   
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Header: Content-Type');
    header('Content-Type: application/json');

    $url = (string) null;

    $url = explode('/', $_GET['url']);

    switch ($url[0]) {

        case 'categorias':
            require_once('categoriasAPI/index.php');
        break;

        case 'produtos':
            require_once('produtosAPI/index.php');
        break;

        case 'contatos':
            require_once('contatosAPI/index.php');
        break;

    }

?>