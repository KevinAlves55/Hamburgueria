<?php

/*

    Objetivo: Arquivo responsável por listar junções no BD
    Data: 12/11/2021
    Autor: Kevin

*/

    require_once(SRC.'dataBase/conexaoSql.php');

    function listar () {

        $sql = "select * from vwListarJuncao";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function buscar($idJuncao) {

        $sql = "select PC.idprodutosCategorias, 
        tblprodutos.nome as Produto, tblprodutos.idprodutos, 
        tblcategorias.nome as Categoria, tblcategorias.idcategorias
        from tblprodutosCategorias as PC
        inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
        inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias where idprodutosCategorias = ".$idJuncao;

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>