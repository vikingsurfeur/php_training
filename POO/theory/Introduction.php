<?php

$product =
    json_decode(base64_decode('eyJuYW1lIjoiQ2FydGUgbVx1MDBlOHJlIiwic3RvY2siOiIxMiIsImJyYW5kIjoiQXN1cyJ9'),
        true);

echo
    'Name Product : '.$product['name'].'<br>'.
    'Brand Product : '.$product['brand'].'<br>'.
    'Current Stock : '.$product['stock'].'<br>';

//var_dump($product);