<?php

/*

    Obejetivo: Arquivo responsável por exclui os dados das categorias e encaminhar para a função que irá exluir o dado 
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/excluirProdutos.php');

    $id = $_GET['id'];

    if (excluir($id)) {

        echo("<script> alert('". BD_MSG_EXCLUI ."'); window.location.href = '../adminProdutos.php'; </script>");
        
    } else {

        echo("<script> alert('". BD_MSG_ERRO_EXCLUI ."'); window.history.back(); </script>");

    }

?>