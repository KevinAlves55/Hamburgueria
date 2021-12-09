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

    // Função para retorna um registro, com base no id
    function buscar($idCategorias) {

        $sql = "select * from tblcategorias where idcategorias = ".$idCategorias;

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarNomeJuncao($categoria) {

        $sql = "select PC.idprodutosCategorias, tblprodutos.*, tblcategorias.*, round((preco - ((preco * desconto) / 100)), 2) as percentual
        from tblprodutosCategorias as PC
            inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
            inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias
        where tblcategorias.nome like '%".$categoria."%'";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>