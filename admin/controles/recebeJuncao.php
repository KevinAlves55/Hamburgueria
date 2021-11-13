<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 07/11/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirJuncao.php');
    require_once('../dataBase/atualizarJuncao.php');

    $produtos = (int) null;
    $categorias = (int) null;

    if (isset($_GET['id'])) {

        $id = (int) $_GET['id'];

    } else {

        $id = (int) 0;

    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $produtos = $_POST['sltProdutos'];
        $categorias = $_POST['sltCategorias'];

        $juncao = array (

            "produtos" => $produtos,
            "categorias" => $categorias,
            "id" => $id

        );

        if (strtoupper($_GET['modo']) == 'SALVAR') {

            if (inserirJuncao($juncao)) {

                echo("<script> alert('". BD_MSG_JUNCAO ."'); window.location.href = '../adminJuncao.php'; </script>");
    
            } else {
    
                echo("<script> alert('". CAMPO_VAZIO ."'); window.history.back(); </script>");
    
            }

        } elseif (strtoupper($_GET['modo']) == 'ATUALIZAR') {

            if(editar($juncao)) {

                echo("<script> alert('". BD_MSG_ATUALIZADO ."'); window.location.href = '../adminJuncao.php'; </script>");
    
            } else {
    
                echo("<script> alert('". BD_MSG_EDITAR_ERRO ."'); window.history.back(); </script>");
    
            }

        }

    }

?>