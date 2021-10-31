<?php

/*

    Objetivo: Arquivo responsável por buscar e exibir um registro na modal 
    Data: 31/10/2021
    Autor: Kevin

*/   
    require_once("constantes/constantes.php");
    require_once(SRC."/dataBase/listarProdutos.php");
     
    function visualizarProdutos ($id) {
        
        $idProdutos = $id;

        $dadosProdutos = buscar($idProdutos);

        if($rsProdutos = mysqli_fetch_assoc($dadosProdutos)){
            
            return $rsProdutos;
        
        }
        
        else {
            
            return false;
        
        }
    
    }

?>