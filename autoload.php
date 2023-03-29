<?php

spl_autoload_register(
    function ($nomeClasse)
    {
        $caminhoCompleto = str_replace('Gitirana\\Teste', 'src', $nomeClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
        $caminhoArquivo .= '.php';
        if(file_exists($caminhoArquivo)){
            require_once($caminhoArquivo);
        }
    }
);