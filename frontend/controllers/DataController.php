<?php

namespace frontend\controllers;

use common\components\MyHelpers;
use frontend\models\Data;
use Yii;
use yii\web\Controller;

class DataController extends Controller
{
    public function actionIndex()
    {
        $data = [
            'page' => 'view',
            'data' => Data::find()->all(),
        ];

        return $this->render('view', $data);
    }

    public function actionAdd()
    {
        // $db = Yii::$app->db;
        // $db->createCommand()->insert('tb_data', [
        //     'judul' => 'Judul',
        //     'link'  => 'Link',
        //     'text'  => 'Text',
        // ])->execute();
        // $db = Yii::$app->db;
        // $test = $db->createCommand('SELECT * FROM tb_data')->queryAll();
        // // $db->createCommand()->insert('tb_data', [
        // // 'judul' => 'Judul',
        // // 'link' => 'Link',
        // // 'text' => 'Text',
        // // ])->execute();
        // MyHelpers::debug($test);
        // if ($model->load(Yii::$app->request->post())) {
        // // $model->save();
        // $post = Yii::$app->request->post();
        // MyHelpers::debug($post);
        // }
        // if ($model->load(Yii::$app->request->post())) {
        //     $model->save();
        //     // $post = Yii::$app->request->post();
        //     // MyHelpers::debug($post);
        //     // return $this->redirect(['index']);
        // }
        // if ($model->load(Yii::$app->request->post())) {
        //     $model->load($_POST);
        //     $model->save();
        //     // return $this->redirect(['index']);
        // }
        // $model->judul = 'YII';
        // $model->link  = 'yii2@framework.com';
        // $model->text  = 'yii2@framework.com';
        // $model->save();
        // $post = Yii::$app->request->post();
        // MyHelpers::debug($post);

        $model = new Data();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        $data = [
            'page'  => 'add',
            'model' => $model
        ];

        return $this->render('add', $data);
    }

    public function actionUpd()
    {
        $id = Yii::$app->request->get('id');

        $model = Data::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        $data = [
            'page'  => 'upd',
            'model' => $model
        ];

        return $this->render('upd', $data);
    }

    public function actionDel()
    {
        $id = Yii::$app->request->get('id');

        $model = Data::findOne($id);
        $model->delete();

        return $this->redirect(['index']);
    }
}
