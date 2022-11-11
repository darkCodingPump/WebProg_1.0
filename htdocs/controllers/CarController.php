<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\DbModel;
use app\core\Request;
use app\models\Car;
//CarController händelt CRUD Operationen an Car-Objekten
class CarController extends Controller
{
    public ?DbModel $car;
    //Alle Autos aus der DB ziehen
    public function getAll()
    {
        $entrys = [];
        $this->car = new car();
        $entrys = $this->car->getAllInstances();
        return $this->render('cars',[
            'models' => $entrys
        ]);
    }
    // Speziefisches Auto aus Datenbank bekommen
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
    //Auto in Datenbank hinzufügen
    public function create(Request $request)
    {
        $car = new car();
        if ($request->isPost()) {
            $car->loadData($request->getBody());

            if ($car->validate() && $car->saveCar()) {
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('car', [
                'model' => $car
            ]);
        }
        return $response->redirect('/');
    }
}