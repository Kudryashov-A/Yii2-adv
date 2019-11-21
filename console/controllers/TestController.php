<?php


namespace console\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex() {
        return '<h1>Hello, consoleworld</h1>';
    }
}