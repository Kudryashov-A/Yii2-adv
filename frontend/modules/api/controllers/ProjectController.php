<?php


namespace frontend\modules\api\controllers;

use common\models\Project;
use Yii;
use yii\rest\ActiveController;


class ProjectController extends ActiveController
{
    public $modelClass = Project::class;
}