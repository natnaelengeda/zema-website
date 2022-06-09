<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){    

        $cats = ["New Releases","Artists","Genres"];
        return view('index', ['cats' => $cats]);            
    }
    public function home(){
        $countRecents = 7;

        return view('home', ['recs' => $countRecents]);
    }

}
