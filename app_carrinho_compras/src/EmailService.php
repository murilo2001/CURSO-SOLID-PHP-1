<?php

namespace src;

class EmailService {
    /* ATRIBUTOS */
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    /* METODOS */
    public function __construct(
        string $de = 'contato@site.com.br',
        string $para = '',
        string $assunto = '',
        string $conteudo = ''
    ) {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public static function dispararEmail() {
        return "--- E-mail enviado ---";
    }
}