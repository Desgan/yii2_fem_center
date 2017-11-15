<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '51YcTP7A2K8jE1WPxBLxhT66R5VcGYsZ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'budyaga\users\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/login'],
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'vkontakte' => [
                    'class' => 'budyaga\users\components\oauth\VKontakte',
                    'clientId' => '	https://vk.com/editapp?act=create',
                    'clientSecret' => '	https://vk.com/editapp?act=create',
                    'scope' => 'email'
                ],
                'google' => [
                    'class' => 'budyaga\users\components\oauth\Google',
                    'clientId' => 'https://console.developers.google.com/project',
                    'clientSecret' => 'https://console.developers.google.com/project',
                ],
                'facebook' => [
                    'class' => 'budyaga\users\components\oauth\Facebook',
                    'clientId' => 'https://developers.facebook.com/apps',
                    'clientSecret' => 'https://developers.facebook.com/apps',
                ],
                'github' => [
                    'class' => 'budyaga\users\components\oauth\GitHub',
                    'clientId' => 'https://github.com/settings/applications/new',
                    'clientSecret' => 'https://github.com/settings/applications/new',
                    'scope' => 'user:email, user'
                ],
                'linkedin' => [
                    'class' => 'budyaga\users\components\oauth\LinkedIn',
                    'clientId' => '	https://www.linkedin.com/secure/developer',
                    'clientSecret' => '	https://www.linkedin.com/secure/developer',
                ],
                'live' => [
                    'class' => 'budyaga\users\components\oauth\Live',
                    'clientId' => 'https://account.live.com/developers/applications',
                    'clientSecret' => 'https://account.live.com/developers/applications',
                ],
                'yandex' => [
                    'class' => 'budyaga\users\components\oauth\Yandex',
                    'clientId' => 'https://oauth.yandex.ru/client/new',
                    'clientSecret' => 'https://oauth.yandex.ru/client/new',
                ],
                'twitter' => [
                    'class' => 'budyaga\users\components\oauth\Twitter',
                    'consumerKey' => 'https://dev.twitter.com/apps/new',
                    'consumerSecret' => 'https://dev.twitter.com/apps/new',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/signup' => '/user/user/signup',
                '/login' => '/user/user/login',
                '/logout' => '/user/user/logout',
                '/requestPasswordReset' => '/user/user/request-password-reset',
                '/resetPassword' => '/user/user/reset-password',
                '/profile' => '/user/user/profile',
                '/retryConfirmEmail' => '/user/user/retry-confirm-email',
                '/confirmEmail' => '/user/user/confirm-email',
                '/unbind/<id:[\w\-]+>' => '/user/auth/unbind',
                '/oauth/<authclient:[\w\-]+>' => '/user/auth/index',
                'job/<id:\d+>'=>'job/view',
                'page/<page:\d+>' => 'job/jobs',
                '/job' => 'job/jobs',
                'summary/<id:\d+>'=>'summary/view',
                'page/<page:\d+>' => 'summary/summary',
                '/summary' => 'summary/summary',

            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],

    ],
    'modules' => [
        'messenger' => [
            'class' => \nanson\messenger\Messenger::className(),
        ],
        'user' => [
            'class' => 'budyaga\users\Module',
            'userPhotoUrl' => 'http://example.com/uploads/user/photo',
            'userPhotoPath' => '@frontend/web/uploads/user/photo'
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'uploads/store', //path to origin images
            'imagesCachePath' => 'uploads/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/uploads/store/no-avatar.jpg', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
        'filter' => [
            'class' => 'dvizh\filter\Module',
            'relationFieldName' => 'category_id', //Наименование поля, по значению которого будут привязыватья опции
            //callback функция, которая возвращает варианты relationFieldName
            'relationFieldValues' =>
                function() {
                    //Пример с деревом:
                    $return = [];
                    $categories = \common\models\Category::find()->all();
                    foreach($categories as $category) {
                        if(empty($category->parent_id)) {
                            $return[] = $category;
                            foreach($categories as $category2) {
                                if($category2->parent_id == $category->id) {
                                    $category2->name = ' --- '.$category2->name;
                                    $return[] = $category2;
                                }
                            }
                        }
                    }
                    return \yii\helpers\ArrayHelper::map($return, 'id', 'name');
                },
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
