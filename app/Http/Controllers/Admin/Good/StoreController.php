<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Good\StoreRequest;
use App\Models\Good;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        
        $data = $request->validated();
        
        if  (isset($data['main_image'])){
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }
        Good::firstOrCreate($data);
        return redirect()->route('admin.good.index');
    }
}
