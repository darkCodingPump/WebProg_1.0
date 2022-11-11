<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\DbModel;
use app\core\Request;
use app\models\blog;
//BlogController händelt CRUD-Aktionen an BlogObjekten
class BlogController extends Controller
{
    public ?DbModel $blog;
    //Alle Blog-Objekte aus der DB ziehen
    public function getAll()
    {
        $entrys = [];
        $this->blog = new blog();
        $entrys = $this->blog->getAllInstances();
        return $this->render('browseBlog',[
            'models' => $entrys
        ]);
    }
    //Einzelnes Blog Objekt anhand ID aus DB ziehen
    public function getSpecific(Request $request)
    {
        $this->blog = new blog();
        $bID = $request->getRouteParam('id');
        $primaryKey = $this->blog->primaryKey();
        $this->blog = blog::findInstance([$primaryKey => $bID]);
        return $this->render('blogDetail',[
            'model' => $this->blog
            ]);
    }
    //Neues BlogObjekt in Datenbank schreiben 
    public function create(Request $request)
    {
        $blog = new blog();
        if ($request->isPost()) {
            $blog->loadData($request->getBody());

            if ($blog->validate() && $blog->saveBlog()) {
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('blog', [
                'model' => $blog
            ]);
        }
        return $response->redirect('/');
    }
}