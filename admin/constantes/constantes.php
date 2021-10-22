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
    const ERRO_CONEXAO_BD = 'Não foi possível realizar a conexão com o Banco De Dados. Entrar em contato com o admin do sistema';
    const BD_MSG_INSERIR = 'Registro salvo com sucesso';
    const BD_MSG_ERRO = 'Algo deu errado, tente novamente';
    const BD_MSG_EXCLUI = 'Dado excluído com sucesso';
    const BD_MSG_ERRO_EXCLUI = 'Não foi possivel apagar o dado, tente novamente ou contate o admin';
    const BD_MSG_ATUALIZADO = 'Dado atualizado com sucesso';
    const BD_MSG_EDITAR_ERRO = 'Não foi possivel atualizar os dados, tente novamente ou contate o admin';

?>