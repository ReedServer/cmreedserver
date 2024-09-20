<?php

// Autoloader
spl_autoload_register(function ($class) {
    // Convert namespace to full file path
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Define base directory where class files are stored
    $baseDir = __DIR__ . '/../src/';

    $file = $baseDir . $class . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    }
});


echo "hi world";

?>