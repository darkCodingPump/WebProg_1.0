<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\blog;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        $blog = new blog();
        if ($request->isPost()) {
            $blog->loadData($request->getBody());

            if ($blog->validate() && $blog->saveBlog()) {
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('register', [
                'model' => $user
            ]);
        }
        return $this->render('register', [
            'model' => $user
        ]);
    }
}