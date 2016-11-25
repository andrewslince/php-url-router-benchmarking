<?php

include realpath(
    __DIR__ . DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..'
) .
    DIRECTORY_SEPARATOR . 'vendor' .
    DIRECTORY_SEPARATOR . 'autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
    return 'Hello World!';
});

$klein->dispatch();
