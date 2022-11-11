<?php

namespace app\core;

class Controller
{
    public string $layout = 'main';
    //View mit Parametern aufrufen
    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }
    //Layout setzen
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
}