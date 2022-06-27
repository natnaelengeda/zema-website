<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http\CookieController;
use App\Models\Artist;
use App\Models\Music;
use App\Models\Feedback;
use App\Models\followArtist;
use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request){    

        $allmusic = DB::table('music')->get();
        $music = DB::table('music')->get();
        $newrel = Music::orderBy('id', 'DESC')->get();
        $artist = Artist::orderBy('id', 'DESC')->get();
        $allartist = Artist::all();

        // $getartist = Artist::findOrFail();



        $genres = ["Rock","Singing","Hip-Hop"];
        $Headers = ["New Releases","Artists","Genres"];
        

        return response(view('index', ['Header' => $Headers, 'musics' => $allmusic, 'newreal' => $newrel, 'artists' =>$artist, 'genre' => $genres , 'music' =>$music, 'allartist' =>$allartist]));
    }
    public function home(Request $request){
        $countRecents = 8;
        $rophnanAlbum = ["Get to Work","Lingersih","Gamo Gofa","Cherekan","Piyasa Lay"];
        $count = 1;
        $userSession = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $user = User::findOrFail($userSession);
        $artists = Artist::all();
        $music = Music::all();
        $followingarts = DB::table('follow_artists')->where('user_id', $user->id)->get();
        $likedmus = DB::table('newlike_music')->where('user_id', $user->id)->get();
        $orderedmusic = Music::orderBy('listen_count', 'DESC')->get();
        
        $artist1 = Artist::findOrFail(6);
        $artist2 = Artist::findOrFail(7);
        $artist3 = Artist::findOrFail(8);

        // $top = Music::orderBy('id', 'DESC')->get();
        $tmusic1 = DB::table('music')->where('artist_id', 6)->get();
        $tmusic2 = DB::table('music')->where('artist_id', 7)->get();
        $tmusic3 = DB::table('music')->where('artist_id', 8)->get();

        $listen1 = 0;
        $listen2 = 0;
        $listen3 = 0;
    
        foreach($tmusic1 as $mus){
         $listen1 = $listen1 + $mus->listen_count;
        }
        foreach($tmusic2 as $mus){
            $listen2 = $listen2 + $mus->listen_count;
        }
        foreach($tmusic3 as $mus){
         $listen3 = $listen3 + $mus->listen_count;
        }   
        
        if($listen1 > $listen2){
            if($listen1 > $listen3){
                $topart = $artist1;
                $toplist = $listen1;
                $topmus = $tmusic1;
            }
            else{
                $topart = $artist3;
                $toplist = $listen3;
                $topmus = $tmusic3;           
            }
        }
        else{
            if($listen2 > $listen3){
                $topart = $artist2;
                $toplist = $listen2;
                $topmus = $tmusic2;
            }
        }




        return view('home', ['recs' => $countRecents, 'ralbum' => $rophnanAlbum, 'count' => $count, 'user' => $user, 'follow' => $followingarts,'like' => $likedmus ,'artists' => $artists, 'music' => $music, 'order' =>$orderedmusic, 'top' => $topart, 'listen' => $toplist, 'topmusic' => $topmus]);
    }
    public function news(){
        $post = ['img' => 'music-album.png', 'header' => 'Try Sending', 'para' => 'The Long Paragraph'];
        $news = News::all();
        
        
        return view('news', ['posts' =>$post, 'news' =>$news]);
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
    public function lib(Request $request){
        $userSession = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $user = User::findOrFail($userSession);
        $artists = Artist::all();
        $music = Music::all();
        $followingarts = DB::table('follow_artists')->where('user_id', $user->id)->get();
        $likedmus = DB::table('newlike_music')->where('user_id', $user->id)->get();

        
        // echo $likedmus;

        return view('library', ['user' => $user, 'follow' => $followingarts,'like' => $likedmus ,'artists' => $artists, 'music' => $music]);
    // 
        // return view('library');
    }
    public function top(){



        return view('/topweek');
    }
    public function login(){

        return view('login');
    }
    public function signup(){

        return view('signup');
    }
    public function feedback(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500'
        ]);
        Feedback::create([
            'name' => $request->name,
            'email' =>$request->name,
            'feedback' => $request->message,
            'seen' => 0,

        ]);

        
        return redirect('/');
    }
    public function likemusic(Request $request){
        $userSession = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        echo $userSession;

    }
    public function uprofile(Request $request){
        $userSession = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $user = User::findOrFail($userSession);
        $artists = Artist::all();
        $music = Music::all();
        $followingarts = DB::table('follow_artists')->where('user_id', $user->id)->get();
        $likedmus = DB::table('newlike_music')->where('user_id', $user->id)->get();

        
        // echo $likedmus;

        return view('/userprofile', ['user' => $user, 'follow' => $followingarts,'like' => $likedmus ,'artists' => $artists, 'music' => $music]);
    }
    public function updateprofile(Request $request, $id){
        $update = DB::table('users')
              ->where('id', $id)
              ->update(['fname' => request('fname'),
                        'lname' => request('lname'),
                        'phonenumber' => request('phonenumber'),
                        'password' => Hash::make(request('password')),
                    ]);

        return redirect(('/userprofile'));
    }
}
