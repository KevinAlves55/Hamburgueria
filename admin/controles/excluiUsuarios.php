<?php

/*

    Obejetivo: Arquivo responsável por exclui os dados de usuarios e encaminhar para a função que irá exluir o dado 
    Data: 21/10/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/excluirUsuarios.php');

    $id = $_GET['id'];

    if (excluir($id)) {

        echo("<script> alert('". BD_MSG_EXCLUI ."'); window.location.href = '../adminUsuarios.php'; </script>");

    } else {

        echo("<script> alert('". BD_MSG_ERRO_EXCLUI ."');  </script>");

    }

?>