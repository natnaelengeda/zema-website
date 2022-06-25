<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Music;
use App\Models\newlikeMusic;
use App\Models\followArtist;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;


class MusicController extends Controller
{
    public function showtracks($id){
        $artists = Artist::findorFail($id);
        $music = DB::table('music')->where('artist_id', $id)->get();
       
        return view('/showtracks',['artist' => $artists, 'music' => $music]);
    }
    public function musics(){
        $music = DB::table('music')->get();

        return view('/home', ['musics' => $music]);
    }
    public function fetchmusic(){
        $music = Music::findOrFail(11);

        return response()->json([
            'music' =>$music,
        ]);
    }
    public function fetchsingle(){
        $single = Music::findOrFail(5);
        // echo "songs";
        $artist = Artist::findOrFail(5);
        $answer = ['image' => "imgs/upload/art-music-pic/".$single->music_image, 'name' => $single->music_name, 
        'artist' => $artist->fname, 'music' => "imgs/upload/art-music-file/".$single->music_file];


        return response()->json([
            'single' => $single,
        ]);
    } 

    public function viewlike(Request $request, $id, $id2){
        
        $userSessionId = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $musicId = $id;
        newlikeMusic::create([
            'user_id' => $userSessionId,
            'music_id' => $musicId,
        ]); 
        $rt = '/showtracks/'.$id2;
        // echo $rt;
        return redirect($rt);
    }
    public function followartist(Request $request, $id){
       $userSessionId = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
       $artistId = $id;
        followArtist::create([
            'user_id' => $userSessionId,
            'artist_id' => $artistId,
        ]);

        $rt = '/showtracks/'.$id;

        return redirect($rt);
    }
    public function playmusic(Request $request){
        $music = DB::table('music')
                    ->select('music_file')
                    ->get();
       

        // print_r($music);

        echo $music;
        
    }
    public function sendlike(Request $request){

        return response();
    }
    public function listen($id){
        $nid = $_GET['id'];
        $music = Music::findOrFail($nid);
        $add = $music->listen_count;
        $smusic = $music->music_name;
        $update = DB::table('music')
                ->where('id',$nid)
                ->update([ 'listen_count' => ++$add
                ]);

       return response($music);
    
    }
}
