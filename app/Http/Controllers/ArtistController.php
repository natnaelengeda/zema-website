<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{ 
    public function index(Request $request){
    //    ["title" => "","content" => "", "image" => ""];

        $artist1 = ["title" => "A Best Platform To Upload Music", "content" => "The number one platform to upload your music and directly get noticed by you fans, to gain popularity and push you carear further", "image"=>"imgs/randimgs/musicimg.jpg"];
        $artist2 =["title" => "Change How Music is Listened in Ethiopia","content" => "Suitable for Professional Artist, Medeocere and even for Beginner artsts to share their work and get connected with their fans", "image" => "imgs/albumart/rand2.jpg"];
        $artist3 =["title" => "Learn How Fans Discover Your Music","content" => "Check how many users listened to your music, liked your music and even rated them", "image" => "imgs/albumart/rand3.jpg"];
        return response(view('/toartist',["aposts" => $artist1, "bposts" => $artist2, "cposts" => $artist3]));
       
       
    }
}
