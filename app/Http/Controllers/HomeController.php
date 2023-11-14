<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function appOrdersDetails()
    {
        return view('app_orders_details');

    }

    public function webOrdersDetails()
    {
        return view('web_orders_details');

    }

    public function hangGameDetails()
    {
        return view('hang_game_details');

    }

    public function gymmobiDetails()
    {
        return view('app_gymmobi');

    }
}
