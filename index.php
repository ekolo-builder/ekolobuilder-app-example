<?php
    require __DIR__.'/vendor/autoload.php';

    use Ekolo\Builder\Bin\Application;
    use Ekolo\Builder\Bin\Error;
    use Ekolo\Builder\Http\Request;
    use Ekolo\Builder\Http\Response;

    // Router
    $index = require('./routes/index.php');
    $users = require('./routes/users.php');

    $app = new Application;

    $app->set('views', 'views');

    // Middlewares
    $app->use(function (Request $req, Response $res) {

    });

    $app->use('/', $index);
    $app->use('/users', $users);

    $app->trackErrors(function (Error $error, Request $req, Response $res) {
        $res->render('error', [
            'error' => $error
        ]);
    });