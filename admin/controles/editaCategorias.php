<?php

/*

    Obejetivo: Arquivo responsável por receber os dados de categorias e criar a variável de seção
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/listarCategorias.php');

    $idCategorias = $_GET['id'];

    // Chama a função para buscar o id
    $dadosCategorias = buscar($idCategorias);

    // Chama a função buscar e encaminha o id que será localizado no BD
    if ($rsCategorias = mysqli_fetch_assoc($dadosCategorias)) {

        // Ativação de variáveis de seção
        session_start();

        // Criação da variável de seção
        $_SESSION['categorias'] = $rsCategorias;

        // Permite  chamar um arquivo como se fosse um link, atráves do php
        header('location:../adminCategorias.php');

    } else {

        echo("<script> alert('". BD_MSG_EDITAR_ERRO ."'); window.history.back(); </script>");

    }

?>