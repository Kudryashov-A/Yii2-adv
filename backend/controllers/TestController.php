<?php


namespace backend\controllers;
include '../../funcs.php';

use common\models\Task;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex() {
        return $this->render('test');
    }
}
