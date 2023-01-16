<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {

        // 'select * from movies'
        $all_movies = Movie::all();


        // dd($data);

        return view('pages.welcome', compact('all_movies'));
    }
}
