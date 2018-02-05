# Primeira Mao Documentation

[Return documentation](https://github.com/life-code/primeira-mao/blob/master/docs/README.md)

## Profiles documentation
> Whenever you use PrimeiraMao checkout, you must create a session.

```sh
<?php

require('./vendor/autoload.php');

use PrimeiraMao\Profiles\Profile;

$profile = new Profile();

// ------- FIND -------
// Find one register for id
$response = $profile->find(1);

// Find all registers
$response = $profile->all();

var_dump($response);
die();


// ------- DELETE -------
// Delete one register for id
$response = $profile->delete(1);

var_dump($response);
die();


// ------- CREATE -------
// Create one register
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/profile/profiles/criando-um-registro
$data = [];
$response = $profile->create($data);

var_dump($response);
die();


// ------- UPDATE -------
// Update one register for id
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/profile/profile/editando-um-profile
$data = [];
$response = $profile->update($id, $data);

var_dump($response);
die();
```