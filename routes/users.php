<?php
    use Ekolo\Builder\Routing\Router;
    use Ekolo\Builder\Http\Request;
    use Ekolo\Builder\Http\Response;

    $router =  new Router;

    $router->get('/', function (Request $req, Response $res) {
        $res->render('users', [
            'title' => "Home page for users"
        ]);
    });

    return $router;