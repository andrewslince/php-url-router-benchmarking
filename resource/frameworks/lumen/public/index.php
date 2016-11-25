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

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->get('/', function () use ($app) {
    return 'Hello World!!';
});

$app->run();
