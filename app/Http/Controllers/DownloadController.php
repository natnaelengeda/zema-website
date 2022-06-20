<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    function index(){
        $files = Storage::files("public");
        $imgFiles = array();
        foreach ($files as $key => $val) {
            $val = str_replace("public/imgs/icon/icon.png","",$val);
            array_push($imgFiles, $val);
        }
    return redirect('/about', ['images' => $imgFiles]);
    }
}
