<?php

namespace alexantr\colorpicker;

use yii\web\AssetBundle;

class ColorPickerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/2.2.6/jquery.minicolors.min.css',
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/2.2.6/jquery.minicolors.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
