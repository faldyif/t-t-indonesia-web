<?php
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Cache;

$botman = resolve('botman');

$botman->hears('/start', function ($bot) {
    $bot->types();
    $bot->reply('Halo! Selamat datang dasar tamu tak diundang!');
});
$botman->hears('/start ([a-zA-Z0-9]+)', function ($bot, $key) {
    $payload = json_decode($bot->getMessage()->getPayload());

    if (Cache::has($key)) {
        $userId = Cache::pull($key);

        $user = \App\User::find($userId);
        $user->telegram_chat_id = $payload->from->id;
        $user->save();

        $bot->typesAndWaits(5);
        $bot->reply('Selamat datang, ' . $user->name . '! Anda telah berhasil mengkoneksikan akun TnT Indonesia anda dengan bot!');
    } else {
        $bot->typesAndWaits(2);
        $bot->reply('Start key tidak ditemukan');
    }
});

$botman->hears('/debug', function ($bot) {
    $payload = $bot->getMessage()->getPayload();
    $bot->types();
    $bot->reply(json_encode($payload));
});

$botman->hears('Hai', function ($bot) {
    $bot->types();
    $bot->reply('Halo!');
});
$botman->hears('Hello', function ($bot) {
    $bot->types();
    $bot->reply('Hi there :)');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->fallback(function($bot) {
    $bot->typesAndWaits(3);
    $bot->reply("Saya tidak mengerti perintah tersebut");
});
