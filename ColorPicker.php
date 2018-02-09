<?php

namespace alexantr\colorpicker;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * ColorPicker input widget uses jQuery MiniColors
 * @link https://github.com/claviska/jquery-minicolors
 * @link https://labs.abeautifulsite.net/jquery-minicolors/
 */
class ColorPicker extends InputWidget
{
    /**
     * @inheritdoc
     */
    public $options = ['class' => 'form-control colorpicker-input'];
    /**
     * @var array options for the color picker.
     */
    public $clientOptions = [];

    /**
     * @var array default options. Will be merged with $clientOptions.
     */
    protected $defaultClientOptions = [
        'theme' => 'bootstrap',
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
        $input = $this->hasModel()
            ? Html::activeTextInput($this->model, $this->attribute, $this->options)
            : Html::textInput($this->name, $this->value, $this->options);
        $this->registerClientScript();
        return $input;
    }

    /**
     * Registers color picker
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        ColorPickerAsset::register($view);

        $id = $this->options['id'];
        $encodedOptions = !empty($this->clientOptions) ? Json::htmlEncode($this->clientOptions) : '{}';

        $view->registerJs("jQuery('#$id').minicolors($encodedOptions);");
    }
}
