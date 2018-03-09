<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Hello', function ($bot) {
    $bot->types();
    $bot->reply('Hi there :)');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->fallback(function($bot) {
    $user = $bot->getMessage()->getPayload();
    $bot->reply(json_encode($user));
});
