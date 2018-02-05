# Primeira Mao Documentation

[Return documentation](https://github.com/life-code/primeira-mao/blob/master/docs/README.md)

## Categories documentation

```sh
<?php

require('./vendor/autoload.php');

use PrimeiraMao\Categories\Category;
use PrimeiraMao\Categories\Trademark;
use PrimeiraMao\Categories\TrademarkModel;

// ------- Categories -------
$category = new Category();

// Find one register for id
$response = $category->find(1);

// Find all registers
$response = $category->all();

var_dump($response);
die();



// ------- Trademark -------
// Init class with category id
$trademark = new Trademark(1);

// Find one register for id
$response = $trademark->find(1);

// Find all registers
$response = $trademark->all();

var_dump($response);
die();



// ------- TrademarkModel -------
// Init class with category id
$trademark_model = new TrademarkModel(1);

// Find one register for id
$response = $trademark_model->find(1);

// Find all registers
$response = $trademark_model->all();

var_dump($response);
die();
```