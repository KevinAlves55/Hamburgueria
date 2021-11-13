<?php

/*

    Obejetivo: Arquivo responsável por excluir os dados
    Data: 12/11/2021
    Autor: Kevin

*/

    require_once('../dataBase/conexaoSql.php');

    function excluir($idJuncao) {

        $sql = "delete from tblprodutosCategorias where idprodutosCategorias = ".$idJuncao;

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }

?>