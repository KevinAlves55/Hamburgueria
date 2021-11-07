<?php

/*

    Objetivo: Arquivo responsável por inserir categorias no BD
    Data: 19/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function inserirJuncao($arrayJuncao) {

        $sql = "insert into tblprodutosCategorias(
            
            idprodutos, 
            idcategorias
        
        ) 
        values ( 

            ".$arrayJuncao['produtos'].",
            ".$arrayJuncao['categorias']."

        )";

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;
            
        }

    }

?>