<?php
/**
 * Created by PhpStorm.
 * User: jingx
 * Date: 2017/4/1
 * Time: 23:34
 */

namespace frontend\controllers;


use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        var_dump(__LINE__);
    }

    public function actionCreate()
    {
        var_dump(\Yii::$app->user->can('createPost'));exit;
        var_dump(__LINE__);
    }

    public function actionUpdate()
    {
        var_dump(__LINE__);
    }

    public function actionDelete()
    {
        var_dump(\Yii::$app->user->can('/post/delete'));
        var_dump(__LINE__);exit;
    }
}