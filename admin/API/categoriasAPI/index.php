<?php

    require_once('vendor/autoload.php');

    $app = new \Slim\App();

    // EndPoint : GET, Retorna todos as categorias do BD
    $app -> get('/categorias', function($request, $response, $args) {

        require_once('../constantes/constantes.php');
        require_once('../controles/exibiCategorias.php');

        if (isset($request -> getQueryParams()['id'])) {

            $id = (int) null;
            $id = $request -> getQueryParams()['id'];

            if ($listarDados = BuscarIdCategorias($id)) {

                if ($listarDadosArray = criarArrayJuncao($listarDados)) {

                    $listarDadosJson = criarJsonProdutosCategorias($listarDadosArray);

                }

            }
        
        } else {

            if ($listarDados = exibirCategorias()) {

                if ($listarDadosArray = criarArray($listarDados)) {

                    $listarDadosJson = criarJson($listarDadosArray);

                } 

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

    // Carrega todos os EndPoint para a execução
    $app -> run();

?>