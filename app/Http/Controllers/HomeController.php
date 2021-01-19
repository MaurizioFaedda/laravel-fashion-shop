<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function products() {
        $all_dresses = Dress::all();
        $data = [
            'dresses' => $all_dresses
        ];
        return view('products', $data);
    }
}
