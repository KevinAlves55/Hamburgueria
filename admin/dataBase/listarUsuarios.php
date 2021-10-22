<?php

/*

    Objetivo: Listar todos os usuarios
    Data: 21/10/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/conexaoSql.php');

    function listar() {

        $sql = "select * from tblusuarios order by idusuarios desc";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function buscar($idUsuarios) {

        $sql = "select * from tblusuarios where idusuarios = ".$idUsuarios;

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>