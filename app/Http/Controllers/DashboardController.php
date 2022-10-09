<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\GeneralStatus;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('welcome', [
           'general_statuses' => GeneralStatus::all(), 
        ]);
    }
}
