<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class AdminBotManController extends Controller
{
    public function registerTelegram() {
        $user = Auth::user();
        $random_string = str_random();
        Cache::put($random_string, $user->id, 15);

        return redirect('https://telegram.me/TTI_Bot?start='.$random_string);
    }
}
