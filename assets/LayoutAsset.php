<?php

namespace app\assets;

use yii\web\AssetBundle;

class LayoutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/header.css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}