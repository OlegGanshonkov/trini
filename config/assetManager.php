<?php

return [
    'appendTimestamp' => true,
    'bundles' => [
        'yii\web\JqueryAsset' => [
            'js' => [ 'jquery.min.js'],
        ],
        'yii\bootstrap\BootstrapAsset' => [
            'css' => [ 'css/bootstrap.min.css'],
        ],
        'yii\bootstrap\BootstrapPluginAsset' => [
            'js' => [ 'js/bootstrap.min.js'],
        ],
    ],
    'converter' => [
        //'forceConvert' => true,
        'class' => 'yii\web\AssetConverter',
        'commands' => [
            'less' => ['css', 'lessc {from} {to} --no-color --compress'],
        ],
    ],
];
