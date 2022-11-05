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
    public function handleCar(Request $request){
        $body = $request->getBody();
        return "TEST TEST";
    }
    public function car(){
        return $this->render('car');
    }
    public function shop(){
        return $this->render('shop');
    }
    public function aboutus(){
        return $this->render('aboutus');
    }
    public function newPost(){
        return $this->render('newBlog');
    }
    public function posts(){
        return $this->render('posts');
    }
    public function settings(){
        return $this->render('settings');
    }
    public function user(){
        return $this->render('profile');
    }
}