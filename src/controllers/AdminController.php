<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\NotFoundHttpException;

class AdminController extends \e96\madmin\controllers\MAdminController
{
    public function actionMainPage()
    {
        return $this->render('@admin/views/admin.twig', []);
    }
}
