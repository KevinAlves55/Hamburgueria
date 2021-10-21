<?php

/*

    Objetivo: Atualizar dados de uma categoria já existente
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    // Função responsável por atualizar dados
    function editar($arrayCategorias) {

        $sql = "update tblcategorias set 
            
            nome = '".$arrayCategorias['categorias']."'

        where idcategorias = ".$arrayCategorias['id'];

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {
              
            return true;
        
        } else {
            
            return false;
        
        }

    }

?>