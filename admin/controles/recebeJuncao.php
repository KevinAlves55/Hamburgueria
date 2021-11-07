<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 07/11/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirJuncao.php');

    $produtos = (string) null;
    $categorias = (string) null;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $produtos = $_POST['sltProdutos'];
        $categorias = $_POST['sltCategorias'];

        $juncao = array (

            "produtos" => $produtos,
            "categorias" => $categorias

        );

        var_dump($juncao);

        die;

        if (inserirJuncao($juncao)) {

            echo("<script> alert('".BD_MSG_JUNCAO."'); window.location.href = '../adminJuncao.php';");

        } else {

            echo("<script> alert('".BD_MSG_ERRO."'); window.history.back(); </script>");

        }

    }

?>