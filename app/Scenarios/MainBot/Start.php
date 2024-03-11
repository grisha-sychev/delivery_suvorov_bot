<?php

namespace App\Scenarios\MainBot;
use App\Bots\Main;
use Reijo\Telebot\Helpers\Steps;


class Start
{
    public static function handler()
    {
        // $bot = new Main();
        // $buyer = new Steps('buyer', $bot);
        // $deliver = new Steps('deliver', $bot);

        // $bot->command("start", function () use ($bot) {

        //     $callback = [
        //         ['callback_data' => 'buyer', 'text' => "Заказчиком"],
        //         ['callback_data' => 'deliver', 'text' => "Курьером"],
        //     ];

        //     $bot->sendSelfInline("Я являюсь", $callback);
        // });

        // $bot->callback('buyer', function () use ($bot) {

        //     $bot->sendSelfInline("Укажите адрес и название магазина");

        // });

    }
}
