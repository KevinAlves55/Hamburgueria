<?php

    require_once('vendor/autoload.php');

    $app = new \Slim\App();

    // EndPoint: GET, Retorna todos os produtos do BD
    $app -> get('/produtos', function($request, $response, $args) {

        require_once('../constantes/constantes.php');
        require_once('../controles/exibiProdutos.php');

        $desconto = (string) null;
        $request -> getQueryParams()['nome'];
        
        if ($listarDados = exibirProdutosSite()) {

            if ($listarDadosArray = criarArray($listarDados)) {

                $listarDadosJson = criarJson($listarDadosArray);

            }

        }

        if ($listarDadosArray) {

            return $response
            -> withStatus(200)
            -> withHeader('Content-Type', 'application/json')
            -> write($listarDadosJson);

        } else {

            return $response
            -> withStatus(204);

        }

    });

    $app -> run();

?>