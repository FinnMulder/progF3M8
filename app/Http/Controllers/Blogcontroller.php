<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Blogcontroller;
use App\Models\Article;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function index(){

        //$article = new Article();
        //$article->title = "het wordt een mooie dag";
        //$article->intro = "dit is de intro van mijn blog";
        //$article->content = "ohergheurghu9e5hg9rehg9uh9rehb395bhr9ubh48u";
        //$article->author = "Finn Mulder";
        //$article->image = "blog1.jpg";
        //$article->published = true;
        //$article->save();


        $articles = Article::all();

        return view('blog.index');

    }
}
