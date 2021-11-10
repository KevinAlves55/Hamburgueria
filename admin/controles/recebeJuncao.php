<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 07/11/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirJuncao.php');

    $produtos = (int) null;
    $categorias = (int) null;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $produtos = $_POST['sltProdutos'];
        $categorias = $_POST['sltCategorias'];

        $juncao = array (

            "produtos" => $produtos,
            "categorias" => $categorias

        );

        if (inserirJuncao($juncao)) {

            echo("<script> alert('". BD_MSG_JUNCAO ."'); window.location.href = '../adminJuncao.php'; </script>");

        } else {

            echo("<script> alert('". BD_MSG_ERRO ."'); window.history.back(); </script>");

        }

    }

?>