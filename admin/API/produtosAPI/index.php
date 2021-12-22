<?php

    require_once('vendor/autoload.php');

    $app = new \Slim\App();

    // EndPoint: GET, Retorna todos os produtos do BD
    $app -> get('/produtos', function($request, $response, $args) {

        require_once('../constantes/constantes.php');
        require_once('../controles/exibiProdutos.php');

        if (isset($request -> getQueryParams()['nome'])) {

            $nome = (string) null;
            
            $nome = $request -> getQueryParams()['nome'];

            if ($listarDados = nomeProdutos($nome)) {
                
                if ($listarDadosArray = criarArray($listarDados)) {
    
                    $listarDadosJson = criarJson($listarDadosArray);
    
                }
    
            }

        } elseif (isset($request -> getQueryParams()['id'])) {

            $id = (int) null;
            
            $id = $request -> getQueryParams()['id'];

            if ($listarDados = buscarIdCategorias($id)) {

                if ($listarDadosArray = criarArrayJuncao($listarDados)) {
    
                    $listarDadosJson = criarJsonProdutosCategorias($listarDadosArray);
    
                }
    
            }

        }
        
        else {
        
            if ($listarDados = exibirProdutosSite()) {

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
            -> withStatus(404)
            -> withHeader('Content-Type', 'application/json')
            -> write (
                
                '{
                    "message":"A pesquisa não corresponde a nenhum produto"
                }'
            
            );

        }

    });

    $app -> run();

?>