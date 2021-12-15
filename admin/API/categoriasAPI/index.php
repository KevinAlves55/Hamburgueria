<?php

    require_once('vendor/autoload.php');

    $app = new \Slim\App();

    // EndPoint : GET, Retorna todos as categorias do BD
    $app -> get('/categorias', function($request, $response, $args) {

        require_once('../constantes/constantes.php');
        require_once('../controles/exibiCategorias.php');

        if ($listarDados = exibirCategorias()) {

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
            -> withStatus(204)
            -> withHeader('Content-Type', 'application/json')
            -> write('
                
                {
                    "message":"Não há dados para essa requisição"
                }
            
            '); 


        }

    });

    // Carrega todos os EndPoint para a execução
    $app -> run();

?>