<?php

/*

    Obejetivo: Arquivo responsável por excluir os dados
    Data: 20/10/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function excluir($idcontatos) {

        $sql = "delete from tblcontatos where idcontatos = ".$idcontatos;

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {
         
            return true;
    
        } else {
        
            return false;
    
        }
    }

?>