<?php

/* 
    Objetivo: Listar todas as categorias
    Data: 19/10/2021
    Autor: Kevin
*/  

    require_once(SRC.'dataBase/conexaoSql.php');

    // Funcão responsável para abrir um script de seleção
    function listar() {

        $sql = "select * from tblcategorias order by idcategorias desc";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>