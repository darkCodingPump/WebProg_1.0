<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params =[
            'name' => "Test Test"
        ];
        return $this->render('home', $params);
    }
    public function handleCar(){
        return "TEST TEST";
    }
    public function car(){
        return $this->render('car');
    }
}