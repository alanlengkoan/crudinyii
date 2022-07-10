<?php

namespace frontend\controllers;

use yii\web\Controller;

class DataController extends Controller
{
    public function actionIndex()
    {
        return $this->render('view');
    }

    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionUpd()
    {
        return $this->render('upd');
    }
}
