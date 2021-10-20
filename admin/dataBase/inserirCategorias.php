<?php

/*
    Objetivo: Arquivo responsável por inserir categorias no BD
    Data: 19/10/2021
    Autor: Kevin
*/

    require_once('../dataBase/conexaoSql.php');

    // Funcão responsável por conter o script de inserir no BD
    function inserirCategorias($arrayCategorias) {

        $sql = "insert into tblcategorias(

            nome

        )
        values (

            '".$arrayCategorias['categorias']."'

        )";

        // Chama a função de conexão com o BD
        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {
             
            return true;
        
        } else {
            
            return false;
        
        }

    }

?>