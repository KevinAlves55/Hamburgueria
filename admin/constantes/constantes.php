<?php

/*

    Obejetivo: Arquivo de configurações de variáveis e constantes que serão utilizadas no sistema
    Data: 14/10/2021
    Autor: Kevin

*/

    // Variável para ajudar nos require_once
    define ('SRC' , $_SERVER['DOCUMENT_ROOT'] . '/PROJETO_BACK-END/admin/');

    // Variáveis para conexão com o BD
    const BD_SERVER = 'localhost';
    const BD_USER = 'root';
    const BD_PASSWORD = 'bcd127';
    const BD_DATABASE = 'db_burguergods';

    // Mensagens do sistema
    const ERRO_CONEXAO_BD = 'Não foi possível realizar a conexão com o Banco De Dados. Entrar em contato com o administrador do sistema';
    const BD_MSG_INSERIR = 'Registro salvo com sucesso';
    const BD_MSG_ERRO = 'Algo deu errado, tente novamente';

?>