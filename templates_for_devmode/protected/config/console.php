<?php

return [
	'bootstrap' => ['gii'],
	    'modules' => [
	        'gii' => 'yii\gii\Module',
	        'generators' => [
                'module' => [
                    'class' => 'humhub\modules\devtools\Generator',
                    'templates' => [
                        'humhub' => '@app/modules/devtools/default',
                    ]
                ]
            ]
	    ]
];
