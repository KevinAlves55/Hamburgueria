<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 19/10/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirCategorias.php');

    // Declaração de variável
    $categorias = (string) null;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $categorias = $_POST['txtCategoria'];

        $categorias = array(

            "categorias" => $categorias

        );

        // Chamada da função inserir() do arquivo arquivo inseririCliente.php
        if (inserirCategorias($categorias))
        echo("<script> alert('". BD_MSG_INSERIR ."'); window.location.href = '../adminCategorias.php';</script>");
        
        else
        echo("<script> alert('". BD_MSG_ERRO ."'); window.history.back(); </script>");

    }

?>