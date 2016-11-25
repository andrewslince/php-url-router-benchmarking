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

$vendorPath = realpath(
    __DIR__ . DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . '..'
) . DIRECTORY_SEPARATOR . 'vendor';

$f3 = require $vendorPath . DIRECTORY_SEPARATOR . 'bcosca' .
    DIRECTORY_SEPARATOR . 'fatfree-core' .
    DIRECTORY_SEPARATOR . 'base.php';

$f3->route('GET /', function() {
    echo 'Hello, world!';
});

$f3->run();
