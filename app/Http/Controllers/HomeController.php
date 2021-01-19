<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index() {
        $all_movies = Movie::all();
        $data = [
            'movies' => $all_movies
        ];
        return view('home', $data);
    }
}
