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

    function listarNome($nome) {

        $sql = "select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual, round(preco, 2) as valor
            from tblprodutos 
        where nome like '%".$nome."%'";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarTodosProdutos() {

        $sql = "select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual,
        round(preco, 2) as valor from tblprodutos";

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

    function listarJuncao($idCategoria) {

        $sql = "select PC.idprodutosCategorias, tblprodutos.*, tblcategorias.nome as Categoria, tblcategorias.idcategorias, 
        round((preco - ((preco * desconto) / 100)), 2) as percentual
        from tblprodutosCategorias as PC
            inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
            inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias
        where tblcategorias.idcategorias = ".$idCategoria;

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>