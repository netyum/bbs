<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'id' => 'bbs',
	'name'=>'Yii2.0 bbs',

	'defaultRoute'=>'home',
	'preload'=>array('log'),
	'modules' => array(
		'debug' => array(
			'class' => 'yii\debug\Module',
		)
	),

	// application components
	'components'=>array(
		'cache' => array(
			'class' => 'yii\caching\FileCache',
		),
		'user' => array(
			'class' => 'yii\web\User',
			'identityClass' => 'app\components\UserIdentity',
		),
		/*
		'assetManager' => array(
			'bundles' => require(__DIR__ . '/assets.php'),
		),
		*/
		/*
		'urlManager'=>array(
			'class'=>'yii\web\UrlManager',
			'enablePrettyUrl'=>true,
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		'db' => array(
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=bbs',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix'=>'sb_',
			'enableSchemaCache'=> !YII_DEBUG,
		),
		'log'=>array(
			'class'=>'yii\logging\Router',
			'targets'=>array(
					'file' => array(
							'class'=>'yii\logging\FileTarget',
							'levels'=> array('trace', 'error', 'warning'),
							'categories' => array('yii\db\*'),
					),
			),
		),
	),
		
	'params'=>array(),
);
		