<?php

use App\Controllers\TestController;

app()->get('/', function () {
    response()->json(['message' => 'Congrats!! You\'re on Leaf API']);
});

app()->get('test', 'TestController@index');
