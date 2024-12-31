<?php

namespace app\modules\v1\controllers;
use yii\rest\ActiveController;

/**
 * Default controller for the `v1` module
 */
class ProjectController extends ActiveController
{
   public $modelClass = "app\models\Project";
}
