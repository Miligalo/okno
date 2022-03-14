<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $application = Application::all();
        return view('admin.application.index',compact('application'));
    }
}
