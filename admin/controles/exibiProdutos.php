<?php

/*

    Objetivo: Buscar/Listar os dados de categorias
    Data: 19/10/2021
    Autor: Kevin
    
*/

    require_once(SRC.'dataBase/listarProdutos.php');

    function exibirProdutos() {

        $dados = listar();

        return $dados;

    }

    function exibirProdutosSite() {

        $dados = listarTodosProdutos();

        return $dados;

    }

    function nomeProdutos($nome) {

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
                'destaque' => $rsDados['destaque'],
                'percentual' => $rsDados['percentual']

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