<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Settings extends Controller
{
    //

    public function show(Request $request){

        $option = $request->input('option');

        if(!isset($option)){
            return view('settings');
        }
        else{
            return view('settings', ['option' => $option]);
        }
    }
}
