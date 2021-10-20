<?php

/*
    Objetivo: Arquivo para configurar a conexão no Banco
    Data: 17/10/2021
    Autor: Kevin
*/

    // Função responsável pela conexão com o BD
    function conexaoSql() {

        // Criando variáveis locais para podemos abrir a conexão com o BD
        $server = (string) BD_SERVER;
        $user = (string) BD_USER;
        $password = (string) BD_PASSWORD;
        $database = (string) BD_DATABASE;

        // if responsável por validar o mysqli_connect para podemos abrir a conexão com o BD
        if($conexao = mysqli_connect($server, $user, $password, $database)) {

            return $conexao;

        } else {

            return false;
            echo(ERRO_CONEXAO_BD);

        }

    }

?>