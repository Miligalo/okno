<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;


class DeliveryController extends Controller
{
    public function __invoke()
    {
        return view('main.delivery');
    }
}
