<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;

class DepartmentController extends Controller
{
    //

    public function index(Request $request){

        // Get all the deparments
        $departments = Department::all();
        // Return back to the view
        return view('department', [
            'departments ' => $departments,
        ]);

    }
}
