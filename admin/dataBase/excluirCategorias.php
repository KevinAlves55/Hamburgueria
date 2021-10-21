<?php

/*

    Obejetivo: Arquivo responsável por excluir os dados
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    // Função responsável por excluí dados de categorias
    function excluir($idcategorias) {

        $sql = "delete from tblcategorias where idcategorias = ".$idcategorias;

        // Abre a conexão com o BD

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {
         
            return true;
    
        } else {
        
            return false;
    
        }
    }


?>