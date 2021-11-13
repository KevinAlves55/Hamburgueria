<?php

/*

    Obejetivo: Arquivo responsável por exclui os dados das junções e encaminhar para a função que irá exluir o dado 
    Data: 12/11/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/excluirJuncao.php');

    $id = $_GET['id'];

    if (excluir($id)) {

        echo("<script> alert('". BD_MSG_EXCLUI ."'); window.location.href = '../adminJuncao.php' ; </script>");

    } else {

        echo("<script> alert('". BD_MSG_ERRO_EXCLUI ."'); window.history.back(); </script>");

    }

?>