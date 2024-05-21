<?php

namespace App\Controllers;

use Leafgram\TelegramBotApi\Bot;

class TestController extends Controller
{
    public function index()
    {
        $bot = new Bot();
        $bot->sendMessage(677949397, "Test leaftgram");
        response()->json([
            'message' => 'Hi Jony'
        ]);
    }
}
