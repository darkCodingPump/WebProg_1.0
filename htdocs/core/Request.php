<?php

namespace app\core;

class Request
{
    private array $routeParams = [];

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function getUrl()
    {
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function isGet()
    {
        return $this->getMethod() === 'get';
    }

    public function isPost()
    {
        return $this->getMethod() === 'post';
    }
    // Request Body gegen Injections und anderem Säubern und aufbereiten
    public function getBody()
    {
        $data = [];
        if ($this->isGet()) {
            foreach ($_GET as $key => $value) {
                $data[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->isPost()) {
            foreach ($_POST as $key => $value) {
                $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $data;
    }
    //Routen Parameter setzen
    public function setRouteParams($params)
    {
        $this->routeParams = $params;
        return $this;
    }
    //Routen Parameter leer zurückgeben
    public function getRouteParams()
    {
        return $this->routeParams;
    }
    // Routen-Parameter zurückgeben
    public function getRouteParam($param, $default = null)
    {
        return $this->routeParams[$param] ?? $default;
    }
}