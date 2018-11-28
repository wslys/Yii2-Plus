<?php

namespace backend\controllers;
use backend\models\Log;
use backend\models\Menu;
use backend\models\PasswordForm;
use yii\data\Pagination;

use Yii;

class TtstController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}

