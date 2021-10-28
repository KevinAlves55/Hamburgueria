<?php

/*

    Objetivo: Atualizar dados de produtos já existente
    Data: 28/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function editar($arrayProdutos) {

        $sql = "update tblprodutos set
            
            nome = '".$arrayProdutos['nome']."',
            descricao = '".$arrayProdutos['descricao']."',
            imagem = '".$arrayProdutos['imagem']."',
            preco = '".$arrayProdutos['preco']."',
            desconto = '".$arrayProdutos['desconto']."',
            destaque = '".$arrayProdutos['destaque']."'
        
        where idprodutos = ".$arrayProdutos['id'];

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }

?>