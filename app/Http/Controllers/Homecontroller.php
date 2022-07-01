<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Homecontroller;
use Illuminate\Http\Request;

class  Homecontroller extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }
}
