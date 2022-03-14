<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;


class ServicesController extends Controller
{
    public function __invoke()
    {
        return view('main.services');
    }
}
