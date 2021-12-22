<?php

/*

    Objetivo: Listar todas as categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/  

    require_once(SRC.'dataBase/conexaoSql.php');

    // Funcão responsável para abrir um script de seleção
    function listar() {

        $sql = "select * from tblcategorias order by idcategorias";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    // Função para retorna um registro, com base no id
    function buscar($idCategorias) {

        $sql = "select * from tblcategorias where idcategorias = ".$idCategorias;

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>