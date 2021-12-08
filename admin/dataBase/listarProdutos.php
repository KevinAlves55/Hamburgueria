<?php

/*

    Objetivo: Listar todas as categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/  

    require_once(SRC.'dataBase/conexaoSql.php');

    function listar() {

        $sql = "select * from tblprodutos order by idprodutos desc";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarProdutos() {

        $sql = "select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as Percentualfrom from tblprodutos";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function buscar($idProdutos) {

        $sql = "select * from tblprodutos where idprodutos = ".$idProdutos;

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarQuantidadeProduto() {

        $sql = "select count(*) as quantidadeProduto from tblprodutos";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>