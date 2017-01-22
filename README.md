Yii2 admin backend panel
=================

##Install
```
php composer.phar required darkair/yii2-admin:dev-master
```

## Setup
In config file:

```php
'bootstrap' => ['madmin'],
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
