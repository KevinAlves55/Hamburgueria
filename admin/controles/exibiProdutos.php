<?php

/*

    Objetivo: Buscar/Listar os dados de categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarProdutos.php');
    require_once(SRC. 'dataBase/listarNomeProdutos.php');

    function exibirProdutos() {

        $dados = listar();

        return $dados;

    }

    function exibirProdutosSite() {

        $dados = listarProdutos();

        return $dados;

    }

    function exibirNomeProdutos($nome) {

        $dados = listarNome($nome);
        
        return $dados;

    }

    function exibiQuantidade() {

        $total = listarQuantidadeProduto();

        return $total;

    }

    function criarArray($objeto) {

        $i = (int) 0;

        while ($rsDados = mysqli_fetch_assoc($objeto)) {

            $arrayDadosProdutos[$i] = array(

                'id' => $rsDados['idprodutos'],
                'nome' => $rsDados['nome'],
                'descricao' => $rsDados['descricao'],
                'imagem' => $rsDados['imagem'],
                'preco' => $rsDados['preco'],
                'desconto' => $rsDados['desconto'],
                'destaque' => $rsDados['destaque']

            );

            $i++;

        }

        if (isset($arrayDadosProdutos)) {

            return $arrayDadosProdutos;

        } else {

            return false;

        }

    }

    function criarJson ($arrayDadosProdutos) {

        header('content-type:application/json');

        $listarJson = json_encode($arrayDadosProdutos);

        if (isset($listarJson)) {
            
            return $listarJson;

        } else {

            return false;

        }

    }

?>