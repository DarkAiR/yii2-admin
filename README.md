Yii2 admin backend panel
=================

Yii2 admin panel based on MAdmin backend admin engine and RBAC.

##Install
```
php composer.phar require darkair/yii2-admin:dev-master
```

## Setup
In config file:

```php
[
    'bootstrap' => ['admin'],
    'modules' => [
        'admin' => [
            'class' => 'darkair\admin\Module',
            'layout' => '@app/views/layouts/admin.twig',   // NOTE: You must make your admin template in advance
            'as access' => [
                'class' => yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['adminAccess'],      // Specify the admin permissions
                    ]
                ]
            ]
        ],
        'YOUR_ADMIN_MODULE' => [
            'class' => 'YOUR_ADMIN_MODULE_CLASS',
            'layout' => '@app/views/layouts/admin.twig',            
        ]
    ]
]
```

## Usage
1. Create CRUD models via gii. You must to have ```<YourModel>.php``` and ```<YourModel>Search.php``` classes at least.

2. Make your admin controller:
```php
class YourAdminController extends \darkair\admin\AdminController
{
    /**
     * @return string Name of managed model
     */
    public function getManagedModelClass()
    {
        return <YourModel>::className();
    }
}
```

3. Create rules like this or on another:
```php
Yii::$app->urlManager->addRules([
    '/admin/YOUR_ROUTE/<action:\w+>/' => 'YOUR_ADMIN_MODULE/YOUR_CONTROLLER/<action>',
], false);
```
