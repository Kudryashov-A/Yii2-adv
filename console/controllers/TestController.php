<?php


namespace console\controllers;


use yii\console\Controller;
use yii\helpers\Console;

class TestController extends Controller
{
    public function actionIndex() {
        $this->stdout('Hello, consoleworld', Console::BG_GREY, Console::FG_BLACK);
    }
}