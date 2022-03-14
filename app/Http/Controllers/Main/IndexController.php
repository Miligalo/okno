<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Requests\Main\Application\StoreRequest;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.index');
    }
}
