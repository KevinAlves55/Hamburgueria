<?php

/*

    Objetivo: Atualizar dados de produtos já existente
    Data: 28/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function editar($arrayJuncao) {

        $sql = "update tblprodutosCategorias set 
            
            idprodutos = ".$arrayJuncao['produtos'].", 
            idcategorias = ".$arrayJuncao['categorias']."
        
        where idprodutosCategorias = ".$arrayJuncao['id'];

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }

?>