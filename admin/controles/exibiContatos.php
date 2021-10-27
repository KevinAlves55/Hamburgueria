<?php

/*

    Objetivo: Buscar/Listar os dados de categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarContatos.php');

    function exibirContatos() {

        $dados = Listar();

        return $dados;

    }
    
?>