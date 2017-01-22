<?php

namespace darkair\admin;

use Yii;

class Module extends \e96\madmin\Module
{
    public function bootstrap($app)
    {
        parent::bootstrap($app);

        Yii::setAlias('admin', __DIR__);

        Yii::$app->urlManager->addRules([
            '/admin/' => 'admin/admin/main-page',
            '/admin/user/<action:.*>/' => 'user/admin/<action>',
            '/admin/rbac/<action:.*>/' => 'rbac/<action>',
        ], false);
    }
}