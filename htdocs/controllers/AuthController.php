<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->session->setFlash('success', 'Willkommen zurück!');
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('main');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->register()) {
                $loginForm = new LoginForm();
                $_user = new User();
                $_user->loadData($request->getBody());
                $loginForm->email = $_user->email;
                $loginForm->password = $_user->password;
                if($loginForm->login()){
                    Application::$app->session->setFlash('success', 'Willkommen im Blog!');
                    Application::$app->response->redirect('/');
                    exit;
                }
                else{
                    return $this->render('register', [
                        'model' => $user
                    ]);
                }
            }
            return $this->render('register', [
                'model' => $user
            ]);
        }
        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile', [
            'model' => Application::$app->user
        ]);
    }
}