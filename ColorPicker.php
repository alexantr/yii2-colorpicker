<?php

namespace alexantr\colorpicker;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * ColorPicker input widget uses jscolor
 * @link http://jscolor.com/
 */
class ColorPicker extends InputWidget
{
    /**
     * @var string jscolor CDN URL
     */
    public static $cdnUrl = 'https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.min.js';

    /**
     * @inheritdoc
     */
    public $options = ['class' => 'form-control colorpicker-input'];
    /**
     * @var array options for the jscolor Color Picker.
     * @link http://jscolor.com/examples/
     */
    public $clientOptions = [];

    /**
     * @var array default options. Will be merged with $clientOptions.
     */
    protected $defaultClientOptions = [
        'hash' => true,
        'required' => false,
        'refine' => false,
        'uppercase' => false,
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->clientOptions = ArrayHelper::merge($this->defaultClientOptions, $this->clientOptions);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        $view->registerJsFile(self::$cdnUrl);

        $options = $this->options;

        Html::addCssClass($options, 'jscolor');
        Html::addCssClass($options, Json::encode($this->clientOptions));

        $input = $this->hasModel()
            ? Html::activeTextInput($this->model, $this->attribute, $options)
            : Html::textInput($this->name, $this->value, $options);

        return $input;
    }
}
