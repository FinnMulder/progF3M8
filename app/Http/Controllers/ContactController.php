<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactform(){
        return view('contact.form');

    }
}
