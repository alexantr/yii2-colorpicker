<?php

namespace alexantr\colorpicker;

use yii\web\AssetBundle;

class WidgetAsset extends AssetBundle
{
    public $sourcePath = '@alexantr/colorpicker/assets';
    public $js = [
        'widget.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
