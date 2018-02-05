# Primeira Mao Documentation

[Return documentation](https://github.com/life-code/primeira-mao/blob/master/docs/README.md)

## Newspapers documentation

```sh
<?php

require('./vendor/autoload.php');

use PrimeiraMao\Newspapers\Newspaper;

$newspaper = new Newspaper();

// ------- FIND -------
// Find one register for id
$response = $newspaper->find(1);

// Find all registers
$response = $newspaper->all();

var_dump($response);
die();


// ------- DELETE -------
// Delete one register for id
$response = $newspaper->delete(1);

var_dump($response);
die();


// ------- CREATE -------
// Create one register
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/newspaper/newspapers/criando-um-registro
$data = [];
$response = $newspaper->create($data);

var_dump($response);
die();


// ------- UPDATE -------
// Update one register for id
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/newspaper/newspaper/editando-um-newspaper
$data = [];
$response = $newspaper->update($id, $data);

var_dump($response);
die();
```