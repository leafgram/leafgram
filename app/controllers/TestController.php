<?php

namespace App\Controllers;

class TestController extends Controller
{
    public function index()
    {
        response()->json([
            'message' => 'Hi Jony'
        ]);
    }
}
