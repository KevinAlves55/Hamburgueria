<?php

/*

    Objetivo: Atualizar dados de uma categoria já existente
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function editar($arrayUsuarios) {

        $sql = "update tblusuarios set
            nome = '".$arrayUsuarios['nome']."',
            usuario = '".$arrayUsuarios['usuario']."',
            senha = '".$arrayUsuarios['senha']."'

        where idusuarios = ".$arrayUsuarios['id'];

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }
    }

?>