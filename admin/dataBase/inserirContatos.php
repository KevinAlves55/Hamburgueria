<?php

/*

    Objetivo: Arquivo responsável por inserir contatos no BD
    Data: 25/10/2021
    Autor: Kevin

*/

    require_once(SRC.'dataBase/conexaoSql.php');

    function inserirContatos($arrayContatos) {

        $sql = "insert into tblcontatos(
            
            nome,
            email,
            celular
            
        
        )values(

            '".$arrayContatos['nome']."',
            '".$arrayContatos['email']."',
            '".$arrayContatos['celular']."'
            
        )";

        $conexao = conexaoSql();

        if (mysqli_query($conexao, $sql)) {

            return true;

        } else {

            return false;

        }

    }

?>