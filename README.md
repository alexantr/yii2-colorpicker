# Color picker input widget for Yii 2

This extension renders an input with [jscolor Color Picker](http://jscolor.com/).

## Installation

Install extension through [composer](http://getcomposer.org/):

```
composer require alexantr/yii2-colorpicker
```

## Usage

The following code in a view file would render an input with color picker:

```php
<?= alexantr\colorpicker\ColorPicker::widget(['name' => 'attributeName']) ?>
```

If you want to use this input widget in an ActiveForm, it can be done like this:

```php
<?= $form->field($model, 'attributeName')->widget(alexantr\colorpicker\ColorPicker::className()) ?>
```

Configuring the [jscolor options](http://jscolor.com/examples/) should be done
using the `clientOptions` attribute:

```php
<?= alexantr\colorpicker\ColorPicker::widget([
    'name' => 'attributeName',
    'clientOptions' => [
        'hash' => false,
    ],
]) ?>
```

By default widget uses jscolor's options:

```php
[
    'hash' => true,
    'required' => false,
    'refine' => false,
    'uppercase' => false,
]
```
