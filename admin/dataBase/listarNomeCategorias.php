<?php
/*

    Obejetivo: Listar todos o nome de produtos do BD
    Data: 04/11/2021
    Autor: Kevin

*/

    require_once(SRC.'dataBase/conexaoSql.php');
        
    function listarNomeCategorias () {

        $sql = "select * from tblcategorias order by idcategorias";

        $conexao = conexaoSql();

        $select = mysqli_query($conexao, $sql);

        return $select;

    }
?>