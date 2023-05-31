<?php
define('HOME', 'http://localhost/cursos/ws_php/modulos/11-pratica-em-gestao-de-dados');

// CONFIGRAÇÕES DO SITE ####################
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBSA', 'wsphp');


// TRATAMENTO DE ERROS #####################
//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');

//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if ($ErrDie):
        die;
    endif;
}

//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');

/*
trigger_error("Essa é uma notíciia", E_USER_NOTICE);
        trigger_error("Essa é um alerta", E_USER_WARNING);
//        trigger_error("Essa é um erro", E_USER_ERROR);
        
        WSErro("Esse é um sucesso", WS_ACCEPT);
        
        PHPErro(WS_ERROR, "Falha ao processar arquivo", __FILE__, __LINE__);  
        
        try {
            throw new Exception("Essa é uma excessão",E_USER_WARNING);
        } catch (Exception $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            WSErro($e->getMessage() ,$e->getCode());
        }
        