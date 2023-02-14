<?php

namespace app\assets;

use yii\web\AssetBundle;

class DetailsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/video.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}