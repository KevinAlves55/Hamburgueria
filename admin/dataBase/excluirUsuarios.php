<?php

/*

    Obejetivo: Arquivo responsável por excluir os dados
    Data: 21/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function excluir($idusuarios) {

        $sql = "delete from tblusuarios where idusuarios = ".$idusuarios;

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }

?>