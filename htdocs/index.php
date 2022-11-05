<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use app\controllers\AuthController;
use app\controllers\BlogController;
use app\controllers\CarController;
use app\controllers\SiteController;
use app\core\Application;

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/aboutus', [SiteController::class, 'aboutus']);
$app->router->get('/shop', [SiteController::class, 'shop']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->router->get('/profile', [AuthController::class, 'profile']);

$app->router->get('/blog', [BlogController::class, 'getAll']);
$app->router->get('/blog/{id}', [BlogController::class, 'getSpecific']);

$app->router->get('/car', [CarController::class, 'getAll']);
$app->router->get('/car/{id}', [CarController::class, 'getSpecific']);

$app->run();