<?php

use codexten\yii\base\Module;

return [
    'modules' => [
        'currency' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\currency\controllers',
        ],
    ],
];