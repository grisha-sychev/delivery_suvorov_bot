<?php

namespace App\Http\Middleware;

use App\Bots\Main;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class BannedTelegram
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $bot = new Main();

        $bot->command('start', function () use ($bot) {
            $bot->check(true);
        });

        $user = User::where('tg_id', $bot->getUserId())->first();

        if ($user && !$user->banned) {
            return $next($request);
        }

        $bot->sendSelf('Вы заблокированы за нарушение правил платформы!');
    }
}