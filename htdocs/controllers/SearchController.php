<?php

namespace app\controllers;

use app\core\Controller;
use app\core\DbModel;
use app\core\Request;
use app\core\Response;
use app\models\blog;
use app\models\Car;
use app\models\SearchForm;

class SearchController extends Controller
{
    public ?DbModel $blog;
    public ?DbModel $car;
    public array $CarResults;
    public array $BlogResults;

    public function searchFor(Request $request, Response $response)
    {
        $SearchForm = new SearchForm();
        if ($request->isPost()) {
            $SearchForm->loadData($request->getBody());
            if ($SearchForm->validate()) {
                $CarResults = [];
                $BlogResults = [];
                $query = $SearchForm->query;
                $this->blog = new blog();
                $this->car = new Car();
                $allBlogs = $this->blog->getAllInstances();
                $allCars = $this->car->getAllInstances();
                foreach ($allBlogs as $blogs) {
                    foreach ($blogs as $item) {
                        if ($item != null) {
                            if (strpos(strtolower($item), strtolower($query)) !== false) {
                                $BlogResults[] = $blogs;
                                break 1;
                            }
                        }
                    }
                }
                foreach ($allCars as $cars) {
                    foreach ($cars as $item) {
                        if ($item != null) {
                            if (strpos(strtolower($item), strtolower($query)) !== false) {
                                $CarResults[] = $cars;
                                break 1;
                            }
                        }
                    }
                }
                return $this->render('results', [
                    'CarResults' => $CarResults,
                    'BlogResults' => $BlogResults
                ]);
            }
            else{
                return $response->redirect('/');
            }
        }
        return $response->redirect('/');
    }
}