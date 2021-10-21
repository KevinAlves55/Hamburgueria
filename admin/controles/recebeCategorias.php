<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 19/10/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirCategorias.php');
    require_once('../dataBase/atualizarCategorias.php');

    // Declaração de variável
    $categorias = (string) null;

    // Validação para saber se o id do registro está chegando
    if (isset($_GET['id'])) {

        $id = (int) $_GET['id'];

    } else {

        $id = (int) 0;

    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $categorias = $_POST['txtCategoria'];

        $categorias = array(

            "id" => $id, 
            "categorias" => $categorias

        );

        // Chamada da função inserir() do arquivo arquivo inseririCliente.php
        
        if (strtoupper($_GET['modo']) == 'SALVAR') {

            if (inserirCategorias($categorias)) {

                echo("<script> alert('". BD_MSG_INSERIR ."'); window.location.href = '../adminCategorias.php';</script>");
    
            } else {
    
                echo("<script> alert('". BD_MSG_ERRO ."'); window.history.back(); </script>");
    
            }

        } elseif (strtoupper($_GET['modo']) == 'ATUALIZAR') {
            
            if (editar($categorias)) {

                echo("<script> alert('". BD_MSG_ATUALIZADO ."'); window.location.href = '../adminCategorias.php';</script>");
    
            } else {
    
                echo("<script> alert('". BD_MSG_EDITAR_ERRO ."');  </script>");
    
            }
        
        }

    }

?>