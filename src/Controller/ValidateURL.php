<?php

namespace Pedroramos\Estagio\Controller;

class ValidateURL
{

// Função para validar se a URL pertence ao domínio da Netshoes
    function validarURLNetshoes($url)
    {
        $pattern = '/^(https:\/\/)?(www\.)?netshoes\.com\.br\/.*/';
        return preg_match($pattern, $url);
    }

// Função para limpar a URL
    function limparURL($url)
    {
        // Remove espaços em branco no início e no final da string
        $url = trim($url);

        // Remove caracteres especiais e espaços da string
        $url = filter_var($url, FILTER_SANITIZE_URL);

        return $url;
    }

}