<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\Music;

class DownloadController extends Controller
{
    function index($id){
        $music = Music::findOrFail($id);
        
        $filepath = public_path('imgs/uploads/art-music-file/'.$music->music_file);
        
        return Response::download($filepath); 

    }
}
