<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RoleController extends Controller
{
    //
    public function index(){
        return View::make('settings.roles', ['roles' => $this->checkRoles() , 'r' => config('roles.models.role')::all()]);
    }


    protected function checkRoles(){

        $role = config('roles.models.role')::all();
        return isset($role);
    }
}
