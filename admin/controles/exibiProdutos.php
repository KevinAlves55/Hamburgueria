<?php

/*

    Objetivo: Buscar/Listar os dados de categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarProdutos.php');

    function exibirProdutos() {

        $dados = listar();

        return $dados;

    }

    function exibiQuantidade() {

        $total = listarQuantidadeProduto();

        return $total;

    }

?>