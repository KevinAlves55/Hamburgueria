<?php

/*

    Objetivo: Arquivo responsável por inserir categorias no BD
    Data: 19/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function inserirProdutos($arrayProdutos) {

        $sql = "insert into tblprodutos(

            nome,
            descricao,
            imagem,
            preco,
            desconto,
            destaque

        )
        values(

            '".$arrayProdutos['nome']."',
            '".$arrayProdutos['descricao']."',
            '".$arrayProdutos['imagem']."',
            '".$arrayProdutos['preco']."',
            '".$arrayProdutos['desconto']."',
            '".$arrayProdutos['destaque']."'

        )";

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }


?>