# Color picker input widget for Yii 2

This extension renders an input with [jQuery MiniColors](https://github.com/claviska/jquery-minicolors).

[![Latest Stable Version](https://img.shields.io/packagist/v/alexantr/yii2-colorpicker.svg)](https://packagist.org/packages/alexantr/yii2-colorpicker)
[![Total Downloads](https://img.shields.io/packagist/dt/alexantr/yii2-colorpicker.svg)](https://packagist.org/packages/alexantr/yii2-colorpicker)
[![License](https://img.shields.io/github/license/alexantr/yii2-colorpicker.svg)](https://raw.githubusercontent.com/alexantr/yii2-colorpicker/master/LICENSE)

> **Note:** Version 1.x uses [jscolor Color Picker](http://jscolor.com/)

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

[Configuring the jQuery MiniColors](https://labs.abeautifulsite.net/jquery-minicolors/#api) should be done using the `clientOptions` attribute:

```php
<?= alexantr\colorpicker\ColorPicker::widget([
    'name' => 'attributeName',
    'clientOptions' => [
        'control' => 'wheel',
        'letterCase' => 'uppercase',
        'theme' => 'default', // the widget uses 'bootstrap' theme
    ],
]) ?>
```
