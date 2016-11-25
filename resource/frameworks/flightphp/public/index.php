<?php

function dbg($param, $exit = true)
{
    if (!isset($_SERVER['argv']['1'])) {
        echo '<pre>';
    }

    if (isset($_SERVER['argv']['1'])) {
        echo "\n";
    }

    print_r($param);

    if (isset($_SERVER['argv']['1'])) {
        echo "\n";
    }

    if ($exit) {
        exit;
    }

    if (!isset($_SERVER['argv']['1'])) {
        echo '</pre>';
    }
}

include realpath(
    __DIR__ . DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..'
) .
    DIRECTORY_SEPARATOR . 'vendor' .
    DIRECTORY_SEPARATOR . 'autoload.php';

Flight::route('/', function(){
  echo 'hello world!';
});

Flight::start();
