<?php

/*
    
    Obejetivo: Arquivo para fazer upload de imagens
    Data: 06/11/2021
    Autor: Kevin

*/

    function uploadFile($arrayFile) {

        $fotoFile = $arrayFile;
        $tamanhoOriginal = (int) 0;
        $tamanhoKB = (int) 0;
        $tipoArquivo = (string) null;
        $nomeArquivo = (string) null;
        $extensao = (string) null;
        $nomeArquivoCript = (string) null;
        $arquivoTemp = (string) null;
        $foto = (string) null;

        if ($fotoFile['size'] > 0 && $fotoFile['type'] != '') {

            $tamanhoOriginal = $fotoFile['size'];

            $tamanhoKB = $tamanhoOriginal/1024;

            $tipoArquivo = $fotoFile['type'];

            if ($tamanhoKB <= TAMANHO_ARQUIVO) {

                if (in_array($tipoArquivo, EXTENCOES_PERMITIDAS)) { 
                
                    $nomeArquivo = pathinfo($fotoFile['name'], PATHINFO_FILENAME);
                    $extensao = pathinfo($fotoFile['name'], PATHINFO_EXTENSION);
    
                    $nomeArquivoCript = md5($nomeArquivo.uniqid(time()));
    
                    $foto = $nomeArquivoCript.'.'.$extensao;
    
                    $arquivoTemp = $fotoFile['tmp_name'];
    
                    if (move_uploaded_file($arquivoTemp, SRC.NOME_DIRETORIO_FILE.$foto)) {
                        
                        return $foto;
    
                    } else {
    
                        echo("<script> alert('".BD_ERRO_UPLOAD."'); window.history.back(); <script>");
    
                    }
    
                } else {
    
                    echo("<script> alert('".BD_TIPO_UPLOAD."'); window.history.back(); <script>");
    
                }

            } else {

                echo("<script> alert('".BD_SIZE_UPLOAD ."'); window.history.back(); </script>");

            }

        } else {

            echo("<script> alert('".BD_UPLOAD_VAZIO ."'); window.history.back(); </script>");

        }

    }

?>