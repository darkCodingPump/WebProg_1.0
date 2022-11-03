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