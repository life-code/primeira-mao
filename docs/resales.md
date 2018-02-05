# Primeira Mao Documentation

[Return documentation](https://github.com/life-code/primeira-mao/blob/master/docs/README.md)

## Resales documentation

```sh
<?php

require('./vendor/autoload.php');

use PrimeiraMao\Resales\Resale;

$resale = new Resale();

// ------- FIND -------
// Find one register for id
$response = $resale->find(1);

// Find all registers
$response = $resale->all();

var_dump($response);
die();


// ------- DELETE -------
// Delete one register for id
$response = $resale->delete(1);

var_dump($response);
die();


// ------- CREATE -------
// Create one register
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/resale/resales/criando-um-registro
$data = [];
$response = $resale->create($data);

var_dump($response);
die();


// ------- UPDATE -------
// Update one register for id
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/resale/resale/editando-uma-revenda
$data = [];
$response = $resale->update($id, $data);

var_dump($response);
die();
```