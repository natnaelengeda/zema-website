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
        $countRecents = 8;
        $rophnanAlbum = ["Get to Work","Lingersih","Gamo Gofa","Cherekan","Piyasa Lay"];
        $count = 1;

        return view('home', ['recs' => $countRecents, 'ralbum' => $rophnanAlbum, 'count' => $count]);
    }
    public function news(){

        return view('news');
    }
    public function artist(){
        $Alphabet = ['A','B','C','D','E','F','G','H'];

        return view('artist', ['alpha' => $Alphabet]);
    }
    public function about(){

        return view('about');
    }

}
