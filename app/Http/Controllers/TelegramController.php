<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Scenarios\MainBot\Start;

class TelegramController extends Controller
{
    // Логика основного бота
    public function mybot()
    {
        Start::handler();
    }

}