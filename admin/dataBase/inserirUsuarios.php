<?php

/*
    Objetivo: Arquivo responsável por inserir usuarios no BD
    Data: 21/10/2021
    Autor: Kevin
*/

    require_once('../dataBase/conexaoSql.php');

    function inserirUsuarios($arrayUsuarios) {

        $sql = "insert into tblusuarios(

            nome,
            usuario,
            senha

        ) Values(

            '".$arrayUsuarios['nome']."',
            '".$arrayUsuarios['usuario']."',
            '".$arrayUsuarios['senha']."'

        )";

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }

?>