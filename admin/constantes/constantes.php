<?php

/*

    Obejetivo: Arquivo de configurações de variáveis e constantes que serão utilizadas no sistema
    Data: 14/10/2021
    Autor: Kevin

*/

    // Variáveis para ajudar nos require_once
    
    # Local
    define ('SRC' , $_SERVER['DOCUMENT_ROOT'] . '/BurguerGods/admin/');
    
    # Senai
    // define ('SRC' , $_SERVER['DOCUMENT_ROOT'] . '/ds2t20212/Kevin/BurguerGods/admin/');

    // Variáveis para conexão com o BD
    const BD_SERVER = 'localhost';
    const BD_USER = 'root';
    const BD_PASSWORD = 'bcd127';
    const BD_DATABASE = 'db_burguergods';

    // Mensagens do sistema
    const CAMPO_VAZIO = 'Por favor, preencher todos os campos';
    const ERRO_CONEXAO_BD = 'Não foi possível realizar a conexão com o Banco De Dados. Entrar em contato com o admin do sistema';
    const BD_MSG_INSERIR = 'Registro salvo com sucesso';
    const BD_MSG_ERRO = 'Algo deu errado, tente novamente';
    const BD_MSG_EXCLUI = 'Dado excluído com sucesso';
    const BD_MSG_ERRO_EXCLUI = 'Não foi possivel apagar o dado, tente novamente ou contate o admin';
    const BD_MSG_ATUALIZADO = 'Dados atualizados com sucesso';
    const BD_MSG_EDITAR_ERRO = 'Não foi possivel atualizar os dados, tente novamente ou contate o admin';
    const BD_ERRO_UPLOAD = 'Erro no upload de imagem';
    const BD_TIPO_UPLOAD = 'Tipo de arquivo inválido';
    const BD_SIZE_UPLOAD = 'Escolher imagem menor do que 5mb';
    const BD_UPLOAD_VAZIO = 'Campo de arquivo vazio';
    const BD_MSG_JUNCAO = 'Junção registrada';
    const ERRO_LOGIN = 'Login ou Senha inválidos';

    // Mensagens para a index
    const APERTOU_BOTAO = 'Agradecemos seu feedback, retornaremos em breve';

    // Constantes para a função de upload
    define ('NOME_DIRETORIO_FILE', 'arquivos/');
    $extencoesPermitidas = array('image/png', 'image/jpg', 'image/jpeg');
    define ('EXTENCOES_PERMITIDAS', $extencoesPermitidas);
    const TAMANHO_ARQUIVO = '5120';

?>