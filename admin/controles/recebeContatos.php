<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 10/11/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../dataBase/inserirContatos.php');

    $nome = (string) null;
    $email = (string) null;
    $celular = (string) null;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $celular = $_POST['txtCelular'];

        $contatos = array(
            
            "nome" => $nome,
            "email" => $email,
            "celular" => $celular
        
        );

        if(inserirContatos($contatos)) {

            echo("<script> alert('". APERTOU_BOTAO ."'); window.location.href = '../../index.html'; </script>");

        } else {

            echo("<script> alert('Algo deu errado, volte mais tarde e tente novamente); window.history.back(); </script>");

        }
    }
?>