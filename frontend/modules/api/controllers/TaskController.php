<?php


namespace frontend\modules\api\controllers;

use common\models\Task;
use Yii;
use yii\rest\ActiveController;


class TaskController extends ActiveController
{
    public $modelClass = Task::class;
}