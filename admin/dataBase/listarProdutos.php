<?php

/*

    Objetivo: Listar todos os produtos
    Data: 19/10/2021
    Autor: Kevin
    
*/  

    require_once(SRC.'dataBase/conexaoSql.php');

    function listar() {

        $sql = "select tblprodutos.*, round(preco, 2) as valor, round(desconto, 2) as descontoRound, 
            left(descricao, 126) as descLimit 
        from tblprodutos order by idprodutos desc";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarNome($nome) {

        $sql = "select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual, round(preco, 2) as valor, 
        left(descricao, 126) as descLimit
            from tblprodutos 
        where nome like '%".$nome."%'";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function listarTodosProdutos() {

        $sql = "select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual,
        round(preco, 2) as valor, left(descricao, 126) as descLimit from tblprodutos order by rand()";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

    function buscar($idProdutos) {

        $sql = "select tblprodutos.*, round(preco, 2) as valor, round(desconto, 2) as descontoRound 
        from tblprodutos where idprodutos = ".$idProdutos." order by idprodutos desc";

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

        $sql = "CALL procListarJuncaoPorCategoria($idCategoria)";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }

?>