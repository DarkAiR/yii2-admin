Yii2 admin backend panel
=================

##Install
```
php composer.phar require darkair/yii2-admin:dev-master
```

## Setup
In config file:

```php
'bootstrap' => ['admin'],
'components' => [
    'admin' => [
        'class' => 'darkair\admin\Module',
    ],
]
```
## Usage

```php
class YourAdminController extends \darkair\admin\AdminController
{
    // TODO
}
```
