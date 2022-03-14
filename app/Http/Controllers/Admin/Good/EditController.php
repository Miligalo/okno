<?php

namespace App\Http\Controllers\Admin\Good;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Good $good)
    {
        $categories = Category::all();
        return view('admin.goods.edit', compact('good','categories'));
    }
}
