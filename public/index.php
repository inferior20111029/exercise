<?php

require __DIR__.'../../vendor/autoload.php';

$target = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => [
        'key3-1' => 'value3-1',
    ],
    3 => [
        'key3-1' => 'value3-1',
    ],
];

dump( data_get($target, 'key2'));
dump( data_get($target, 3));
dump( data_get($target, 'key3.key3-1'));