<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Start', BotManController::class.'@startConversation');
