<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http\CookieController;
use App\Models\Artist;
use App\Models\Music;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request){    
        $music = new Music();
        $artist = new Artist();

        $allmusic = DB::table('music')->get();

        // $artist = DB::table('music')->where('artist_id', $id)->get();

        $Headers = ["New Releases","Artists","Genres"];
        

        return response(view('index', ['Header' => $Headers, 'musics' => $allmusic]));
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
    public function album(){
        $Alphabet = ['A','B','C','D','E','F','G','H'];

        return view('album', ['alpha' => $Alphabet]);
    }
    public function about(){

        return view('about');
    }
    public function login(){

        return view('login');
    }
    public function signup(){

        return view('signup');
    }

}
