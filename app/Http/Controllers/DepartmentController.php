<?php

namespace App\Http\Controllers;

use App\Models\Lib;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function indexLib(){
        $libs = Lib::all();
        return view('home', [
            'libs' => $libs
        ]);
    }
}
