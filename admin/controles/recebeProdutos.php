<?php

/*
    Objetivo: Arquivo responsável por receber dados
    Data: 28/10/2021
    Autor: Kevin
*/

    require_once('../constantes/constantes.php');
    require_once('../constantes/upload.php');
    require_once('../dataBase/inserirProdutos.php');
    require_once('../dataBase/atualizarProdutos.php');

    $nome = (string) null;
    $descricao = (string) null;
    $imagem = (string) null;
    $preco = (float) null;
    $desconto = (float) null;
    $destaque = (boolean) null;

    if (isset($_GET['id'])) {

        $id = (int) $_GET['id'];

    } else {

        $id = (int) 0;

    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];
        $desconto = $_POST['txtDesconto'];
        $destaque = $_POST['sltDestaque'];
        $nomeImagem = $_GET['nomeImagem'];

        if (strtoupper($_GET['modo']) == 'ATUALIZAR') {
            
            if ($_FILES['fleImagem']['name'] != '') {
                
                $imagem = uploadFile($_FILES['fleImagem']);
                unlink(SRC.NOME_DIRETORIO_FILE.$nomeImagem);

            } else {

                $imagem = $nomeImagem;

            }

        } else {

            $imagem = uploadFile($_FILES['fleImagem']);

        }

        $produtos = array (

            'nome' => $nome,
            'descricao' => $descricao,
            'imagem' => $imagem,
            'preco' => $preco,
            'desconto' => $desconto,
            'destaque' => $destaque,
            'id' => $id
            
        );

        if (strtoupper($_GET['modo']) == 'SALVAR') {

            if(inserirProdutos($produtos)) {

                echo("<script> alert('". BD_MSG_INSERIR ."'); window.location.href = '../adminProdutos.php';</script>");
    
            } else {
    
                echo("<script> alert('". BD_MSG_ERRO ."'); window.history.back(); </script>");
    
            }

        } else if (strtoupper($_GET['modo']) == 'ATUALIZAR') {

            if(editar($produtos)) {

                echo("<script> alert('". BD_MSG_ATUALIZADO ."'); window.location.href = '../adminProdutos.php';</script>");
    
            } else {
    
                echo("<script> alert('". BD_MSG_EDITAR_ERRO ."'); window.history.back(); </script>");
    
            }

        }

    }

?>