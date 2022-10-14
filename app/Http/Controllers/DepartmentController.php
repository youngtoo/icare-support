<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class DepartmentController extends Controller
{
    //

    public function index(Request $request){

        // Get all the deparments
        $d = Department::all();
       
        // Return back to the view
        return view('department', [
            'd' => $d,
            'hello' => 'Hello World!'
        ]);

    }
}
