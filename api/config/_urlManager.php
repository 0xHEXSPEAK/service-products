<?php

// Api url rules
return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'api\modules\api\v1\web\UrlRule',
            'controller' => 'api/v1/product',
            'extraPatterns' => [],
        ],
    ]
];
