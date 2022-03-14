<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Application;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Application $application)
    {
       
        $application->delete();
        return redirect()->route('admin.good.index');
    }
}
