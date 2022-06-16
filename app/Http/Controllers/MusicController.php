<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Music;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    public function showtracks($id){
        $artists = Artist::findorFail($id);
        $music = DB::table('music')->where('artist_id', $id)->get();
       
        return view('/musicop/showtracks',['artist' => $artists, 'music' => $music]);
    }
}
