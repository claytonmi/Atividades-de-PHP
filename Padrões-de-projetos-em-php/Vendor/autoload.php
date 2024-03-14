<?php
// autoload.php

spl_autoload_register(function ($class) {
    // Defina o diretório base onde suas classes estão localizadas
    $baseDir = __DIR__ . '/src/';

    // Substitua as barras invertidas do namespace pelo separador de diretórios do sistema
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    // Verifique se o arquivo da classe existe
    if (file_exists($file)) {
        require $file;
    }
});