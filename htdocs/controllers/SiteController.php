<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\blog;
//SiteContoller händelt unspezifische Anfragen an Unterseiten
class SiteController extends Controller
{
    //Home-Abfrage
    public function home()
    {
        $entrys = [];
        $this->blog = new blog();
        $entrys = $this->blog->getRandomInstances(5);
        return $this->render('home',[
            'models' => $entrys
        ]);
    }
    //Shop-Abfrage
    public function shop()
    {
        return $this->render('shop');
    }
    //AboutUs-Abfrage
    public function aboutus()
    {
        return $this->render('aboutus');
    }
}