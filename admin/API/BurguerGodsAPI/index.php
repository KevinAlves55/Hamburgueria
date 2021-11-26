<?php

    require_once('vendor/autoload.php');

    $app = new \Slim\App();

    // EndPoint : GET, Retorna todos as categorias do BD
    $app -> get('/hamburgueria', function($request, $response, $args) {

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
            -> withStatus(204);

        }

    });

    // EndPoint : POST, Envia um novo cliente para o BD
    $app -> post('/hamburgueria', function($request, $response, $args) {

        return $response
        -> withStatus(200) 
        -> withHeader('Content-Type', 'application/json') 
        -> write(

            '{
                "message":"POST"
            }'

        ); 

    });

    // EndPoint : PUT, Atualiza um cliente no BD
    $app -> put('/hamburgueria', function($request, $response, $args) {

        return $response
        -> withStatus(200) 
        -> withHeader('Content-Type', 'application/json') 
        -> write(

            '{
                "message":"PUT"
            }'

        );

    });

    // EndPoint : Delete, Exclui um cliente do BD
    $app -> delete('/hamburgueria', function($request, $response, $args) {

        return $response
        -> withStatus(200) 
        -> withHeader('Content-Type', 'application/json') 
        -> write(

            '{
                "message":"DELETE"
            }'

        );

    });

    // Carrega todos os EndPoint para a execução
    $app -> run();

?>