<?php

/*

    Objetivo: Buscar/Listar os dados de junção
    Data: 12/11/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarJuncao.php'); 

    function exibirJuncao() {

        $dados = listar();

        return $dados;

    }

?>