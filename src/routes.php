<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

// Define named route
$app->get('/hours', function ($request, $response, $args) {
    return $this->view->render($response, 'hours.html', [
        'name' => $args['name']
    ]);
})->setName('hours');

// Define named route
$app->get('/teachers', function ($request, $response, $args) {
    return $this->view->render($response, 'teachers.html', [
        'name' => $args['name']
    ]);
})->setName('teachers');

// Define named route
$app->get('/cursos', function ($request, $response, $args) {
    return $this->view->render($response, 'cursos.html', [
        'name' => $args['name']
    ]);
})->setName('cursos');

// Define named route
$app->get('/user_profile', function ($request, $response, $args) {
    return $this->view->render($response, 'user_profile.html', [
        'name' => $args['name']
    ]);
})->setName('user_profile');

// Define named route
$app->get('/home_page', function ($request, $response, $args) {
    return $this->view->render($response, 'home_page.html', [
        'name' => $args['name']
    ]);
})->setName('home_page');

// Define named route
$app->get('/signup', function ($request, $response, $args) {
    return $this->view->render($response, 'signup.html', [
        'name' => $args['name']
    ]);
})->setName('signup');


// Define named route
$app->get('/login-failed', function ($request, $response, $args) {
    return $this->view->render($response, 'login-failed.html', [
        'name' => $args['name']
    ]);
})->setName('login-failed');

// Define named route
$app->get('/login', function ($request, $response, $args) {
    return $this->view->render($response, 'login.html', [
        'name' => $args['name']
    ]);
})->setName('login');


// Define named route
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
})->setName('profile');


// Define named route
$app->get('/home', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html', [
        'name' => $args['name']
    ]);
})->setName('home');

// Define named route
$app->get('/cover', function ($request, $response, $args) {
    return $this->view->render($response, 'cover.html', [
        'name' => $args['name']
    ]);
})->setName('cover');

// Define named route
$app->get('/jumbotron', function ($request, $response, $args) {
    return $this->view->render($response, 'jumbotron.html', [
        'name' => $args['name']
    ]);
})->setName('jumbotron');

// Render from string
$app->get('/hi/{name}', function ($request, $response, $args) {
    $str = $this->view->fetchFromString('<p>Hi, my name is {{ name }}.</p>', [
        'name' => $args['name']
    ]);
    $response->getBody()->write($str);
    return $response;
});

$app->get('/examples', function ($request, $response, $args) {

    $sql = "SELECT * FROM example";
    $condition = "1";

    try {
        //$db = MyPDO::getConnection();
        $stmt = $this->db->prepare($sql);
       // $stmt->bindParam("condition", $condition);
        $stmt->execute();
        $examples = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode( $examples ));
    } catch(PDOException $e) {
        $error = array("error"=> array("text"=>$e->getMessage()));
        $response->getBody()->write(json_encode( $error ));
    }

});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
