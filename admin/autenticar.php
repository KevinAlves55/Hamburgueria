<?php
 
/*

    Objetivo: Arquivo responsável por fazer autenticação com a Dashboard
    Data: 01/12/2021
    Autor: Kevin

*/

    require_once('constantes/constantes.php');
    require_once('dataBase/conexaoSql.php');

    $login = (string) null;
    $senha = (string) null;

    $login = $_POST['txtUser'];
    $senha = md5($_POST['txtPassword']);

    if ($login != '' && $senha != '') {

        $sql = "select * from tblusuarios where usuario = '".$login."' and senha = '".$senha."'";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        if ($rsUsuarios = mysqli_fetch_assoc($select)) {

            session_start();

            $_SESSION['nomeUsuario'] = $rsUsuarios['nome'];
            $_SESSION['statusLogin'] = true;

            header('location: admin.php');

        } else {

            echo("<script> alert('".ERRO_LOGIN."') ; window.history.back(); </script>");

        }

    } else {

        echo("<script> alert('".CAMPO_VAZIO."') ; window.history.back(); </script>");

    }
 
?>