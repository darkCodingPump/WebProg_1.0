<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\DbModel;
use app\core\Request;
use app\models\Car;

class CarController extends Controller
{
    public ?DbModel $car;
    public function getAll()
    {
        $entrys = [];
        $this->car = new car();
        $entrys = $this->car->getAllInstances();
        return $this->render('cars',[
            'models' => $entrys
        ]);
    }

    public function getSpecific(Request $request)
    {
        $this->car = new car();
        $cID = $request->getRouteParam('id');
        $primaryKey = $this->car->primaryKey();
        $this->car = Car::findInstance([$primaryKey => $cID]);
        return $this->render('carDetail',[
            'model' => $this->car
            ]);
    }
    public function create(Request $request)
    {
        $car = new car();
        if ($request->isPost()) {
            $car->loadData($request->getBody());

            if ($car->validate() && $car->saveCar()) {
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('register', [
                'model' => $car
            ]);
        }
        return $this->render('register', [
            'model' => $car
        ]);
    }
}