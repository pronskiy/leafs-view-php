# Leaf View PHP

Pure PHP views for Leaf/ 

## Installation

You can install Veins using the Leaf CLI:

```bash
leaf install view-php
```

Or with composer:

```bash
composer require leafs/view-php
```

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Leaf\ViewPhp;

$veins = new ViewPHP();
$veins->render('views/hello.php', ['name' => 'John']);
```

```html
<!-- views/hello.php -->
<h1>Hello, {$name}!</h1>
```

## Configuration

You can configure Veins by passing an array to the `configure` method:

```php
$veins->configure([
    'debug' => false,
    'templateDir' => 'views/',
]);
```
