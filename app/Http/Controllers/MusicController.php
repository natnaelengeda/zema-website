<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function showtracks($id){

        return view('/musicop/showtracks');
    }
}
