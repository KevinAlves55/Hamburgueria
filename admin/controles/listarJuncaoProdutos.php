<?php

/*

    Obejetivo: Listar os dados de produtos no BD
    Data: 04/11/2021
    Autor: Kevin

*/
    require_once(SRC.'dataBase/listarNomeProdutos.php');

    function exibirNomeProdutos() {

        // Chama a função que busca os dados no BD e recebe os registros de clientes
        $dados = listarNomeProdutos();

        return $dados;

    }

?>