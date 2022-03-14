<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Application\StoreRequest;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        
        Application::firstOrCreate($data);
        
        return redirect()->route('main.index');
    }
}
