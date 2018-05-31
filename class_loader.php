
<?php

spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    if ($parts[0] == 'webshop') {
        array_shift($parts);
        include 'class/' . join('/', $parts) . '.php';
    }
});


