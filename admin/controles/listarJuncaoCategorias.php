<?php

/*

    Obejetivo: Listar os dados de categorias no BD
    Data: 04/11/2021
    Autor: Kevin

*/
    require_once(SRC.'dataBase/listarNomeCategorias.php');

    function exibirNomeCategorias() {

        // Chama a função que busca os dados no BD e recebe os registros de clientes
        $dados = listarNomeCategorias();

        return $dados;

    }

?>