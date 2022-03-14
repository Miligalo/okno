<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke( $application)
    {
        $application=Application::query()->where('id',$application)->first();
        return view('admin.application.show', compact('application'));
    }
}
