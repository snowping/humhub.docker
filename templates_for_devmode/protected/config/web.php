<?php

return [
    'bootstrap' => ['debug'],
	'modules' => [   
	    'debug' => [
	        'class' => 'yii\debug\Module',
	        'allowedIPs' => ['127.0.0.1', '::1', '172.*'],
	    ],

	    'gii' => [
	        'class' => 'yii\gii\Module',
	        'allowedIPs' => ['127.0.0.1', '::1', '172.*'],
	        'generators' => [
                'module' => [
                    'class' => 'humhub\modules\devtools\Generator',
                    'templates' => [
                        'humhub' => '@app/modules/devtools/default',
                    ]
                ]
            ]
	    ]
	]
];

