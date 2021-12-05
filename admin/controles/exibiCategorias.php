<?php

/*

    Objetivo: Buscar/Listar os dados de categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarCategorias.php');

    function exibirCategorias() {

        $dados = listar();

        return $dados;

    }

    function criarArray($objeto) {
        
        $i = (int) 0;

        while ($rsDados = mysqli_fetch_assoc($objeto)) {

            $arrayDadosCategorias[$i] = array(

                'id' => $rsDados['idcategorias'], 
                'nome' => $rsDados['nome']

            );

            $i++;

        }

        if (isset($arrayDadosCategorias)) {

            return $arrayDadosCategorias;

        } else {

            return false;

        }

    }

    function criarJson($arrayDadosCategorias) {

        header('content-type:application/json');

        $listarJson = json_encode($arrayDadosCategorias);

        if (isset($listarJson)) {

            return $listarJson;

        } else {

            return false;

        }

    }

?>