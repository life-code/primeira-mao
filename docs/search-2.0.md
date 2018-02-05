# Primeira Mao Documentation

[Return documentation](https://github.com/life-code/primeira-mao/blob/master/docs/README.md)

## Searchs documentation

```sh
<?php

require('./vendor/autoloSearch.php');

use PrimeiraMao\Searchs\Search;

$search = new Search();

// Searching
// Send an array with the same structure as the official documentation says.
// https://primeiramao.docs.apiary.io/#reference/search-2.0/search/fazendo-consulta
$data = [];
$response = $search->searching($data);

var_dump($response);
die();
```