<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\blog;

class SiteController extends Controller
{
    public function home()
    {
        $entrys = [];
        $this->blog = new blog();
        $entrys = $this->blog->getRandomInstances(5);
        return $this->render('home',[
            'models' => $entrys
        ]);
    }
}