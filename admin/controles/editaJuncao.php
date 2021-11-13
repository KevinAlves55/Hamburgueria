<?php

/*

    Obejetivo: Arquivo responsável por receber os dados de junção e criar a variável de seção
    Data: 12/11/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/listarJuncao.php');

    $idJuncao = $_GET['id'];

    $dadosJuncao = buscar($idJuncao);

    if ($rsJuncao = mysqli_fetch_assoc($dadosJuncao)) {

        session_start();

        $_SESSION['juncao'] = $rsJuncao;

        header('location:../adminJuncao.php');

    } else {

        echo("<script> alert('".BD_MSG_EDITAR_ERRO."'); window.history.back(); </script>");

    }

?>