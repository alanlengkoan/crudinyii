<?php

namespace frontend\admin\controllers;

use yii\web\Controller;

class DataController extends Controller
{
    public function actionIndex()
    {
        echo "halaman default";
        // return $this->render('index');
    }

    public function actionHelloWorld()
    {
        return 'Hello World';
    }
}
