<?php

/*

    Obejetivo: Arquivo responsável por receber os dados de categorias e criar a variável de seção
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/listarProdutos.php');

    $idProdutos = $_GET['id'];

    $dadosProdutos = buscar($idProdutos);

    if ($rsProdutos = mysqli_fetch_assoc($dadosProdutos)) {

        session_start();

        $_SESSION['produtos'] = $rsProdutos;

        header('location:../adminProdutos.php');

    } else {

        echo("<script> alert('". BD_MSG_EDITAR_ERRO ."'); window.history.back(); </script>");

    }

?>