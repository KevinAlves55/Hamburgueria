<?php

/*

    Obejetivo: Arquivo responsável por receber os dados de categorias e criar a variável de seção
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../constantes/constantes.php');
    require_once(SRC.'dataBase/listarUsuarios.php');

    $idUsuarios = $_GET['id'];

    $dadosUsuarios = buscar($idUsuarios);

    if ($rsUsuarios = mysqli_fetch_assoc($dadosUsuarios)) {

        session_start();

        $_SESSION['usuarios'] = $rsUsuarios;

        header('location:../adminUsuarios.php');

    } else {

        echo("<script> alert('". BD_MSG_EDITAR_ERRO ."'); window.history.back(); </script>");

    }

?>