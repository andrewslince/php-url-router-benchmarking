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

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
    ],
]);

$app->get('/', function ($request, $response, $args) {
    echo 'Hello world';
});

$app->run();
