<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ViewController extends Controller
{
    //
    function getData(){
        
        return User::all();
    }
}
