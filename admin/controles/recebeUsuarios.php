<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 21/10/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirUsuarios.php');
    require_once('../dataBase/atualizarUsuarios.php');

    $nome = (string) null;
    $usuario = (string) null;
    $senha = (string) null;

    if (isset($_GET['id'])) {

        $id = (int) $_GET['id'];
        echo($id);

    }
    else {

        $id = (int) 0;

    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['txtNome'];
        $usuario = $_POST['txtUsuario'];
        $senha = $_POST['txtSenha'];

        $usuarios = array(

            "nome" => $nome,
            "usuario" => $usuario,
            "senha" => $senha,
            "id" => $id

        );

        if (strtoupper($_GET['modo']) == 'SALVAR') {

            if (inserirUsuarios($usuarios)) {

                echo("<script> alert('".BD_MSG_INSERIR."'); window.location.href = '../adminUsuarios.php'; </script>");
    
            } else {
    
                echo("<script> alert('".BD_MSG_ERRO."'); window.history.back() </script>");
    
            }

        } elseif (strtoupper($_GET['modo']) == 'ATUALIZAR') {

            if (editar($usuarios)) {

                echo("<script> alert('".BD_MSG_ATUALIZADO."'); window.location.href = '../adminUsuarios.php'; </script>");
    
            } else {
    
                echo("<script> alert('".BD_MSG_EDITAR_ERRO."'); window.history.back(); </script>");
    
            }

        }

    }

?>