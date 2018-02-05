# Primeira Mao Documentation

[Return documentation](https://github.com/life-code/primeira-mao/blob/master/docs/README.md)

## Ads documentation

```sh
<?php

require('./vendor/autoload.php');

use PrimeiraMao\Ads\Ad;

$ad = new Ad();

// ------- FIND -------
// Find one register for id
$response = $ad->find(1);

// Find all registers
$response = $ad->all();

var_dump($response);
die();


// ------- DELETE -------
// Delete one register for id
$response = $ad->delete(1);

var_dump($response);
die();


// ------- CREATE -------
// Create one register
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/ad/ads/criando-um-registro
$data = [];
$response = $ad->create($data);

var_dump($response);
die();


// ------- UPDATE -------
// Update one register for id
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/ad/ad/editando-um-anuncio
$data = [];
$response = $ad->update($id, $data);

var_dump($response);
die();
```