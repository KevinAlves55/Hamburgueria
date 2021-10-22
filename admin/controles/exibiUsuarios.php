<?php

/* 

    Objetivo: Buscar/Listar os dados de categorias
    Data: 19/10/2021
    Autor: Kevin

*/

    require_once(SRC.'dataBase/listarUsuarios.php');

    function exibirUsuarios() {

        $dados = listar();

        return $dados;

    }

?>