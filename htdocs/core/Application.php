<?php

namespace app\core;

use app\models\User;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Database $db;
    public ?Controller $controller = null;
    public Session $session;
    public ?DbModel $user;
    public View $view;
    public string $layout = 'main';
    //Application Konstrukter
    public function __construct($rootPath, array $config)
    {
        $this->user = new User();
        self::$ROOT_DIR = $rootPath;
        self::$ROOT_DIR .= "/html";
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->session = new Session();

        $this->view = new View();
        $this->db = new Database($config['db']);

        $primaryValue = $this->session->get('user');
        if ($primaryValue) {
            $primaryKey = $this->user->primaryKey();
            $this->user = User::findInstance([$primaryKey => $primaryValue]);
        } else {
            $this->user = null;
        }

    }
    //Abfrage ob aktueller Benutzer eingeloggt ist
    public static function isGuest()
    {
        return !self::$app->user;
    }
    public function run()
    {
        echo $this->router->resolve();
    }

    //Controller erfragen
    public function getController(): Controller
    {
        return $this->controller;
    }
    //Controller setzen
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }
    //Benutzer einloggen bzw. in Session speichern
    public function login(DbModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }
    //Benutzer ausloggen 
    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
}