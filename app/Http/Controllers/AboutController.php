<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AboutController;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutMe(){
        return view ('about.about');
    }
}
