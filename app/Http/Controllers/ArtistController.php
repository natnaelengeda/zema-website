<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\music;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


use Illuminate\Http\Request;

class ArtistController extends Controller
{ 
    public function index(Request $request){
    //    ["title" => "","content" => "", "image" => ""];

        $artist1 = ["title" => "A Best Platform To Upload Music", "content" => "The number one platform to upload your music and directly get noticed by you fans, to gain popularity and push you carear further", "image"=>"imgs/randimgs/musicimg.jpg"];
        $artist2 =["title" => "Change How Music is Listened in Ethiopia","content" => "Suitable for Professional Artist, Medeocere and even for Beginner artsts to share their work and get connected with their fans", "image" => "imgs/albumart/rand2.jpg"];
        $artist3 =["title" => "Learn How Fans Discover Your Music","content" => "Check how many users listened to your music, liked your music and even rated them", "image" => "imgs/albumart/rand3.jpg"];
        
        return response(view('/artistpage/toartist',["aposts" => $artist1, "bposts" => $artist2, "cposts" => $artist3]));
     }
     public function sign(){
        return view('/artistpage/signup');
     }
     public function log(){
        return view('/artistpage/login');
     }
     public function asignup(Request $request){
    
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],       
            'uname' => ['required', 'string', 'max:255'],  
            'email' => ['string', 'email', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

          artist::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'uname' => $request->uname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect('/toartist');
   }
     public function alogin(Request $request){
     
        if (Auth::guard('Artist')->attempt(['email' => $request->email, 'password' => 
        $request->password], $request->remember)) {
        return redirect()->intended('/artprofile');
     }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

     }
     public function profile(Request $request)
     {  
      $id = $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      $dbs = artist::findOrFail($id); 
      $info = ['fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload];

        return response(view('/artistpage/profile',['info'=> $info]));
     }
     public function uploadmusicpage(Request $request){
      $id = $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      $dbs = artist::findOrFail($id); 
      $info = ['fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload];

     return response(view('/artistpage/uploadmusic',['info'=> $info]));
   }
      public function uploadmusicfun(Request $request){
         $music = new music();

         $music_name = request('musicname');
         $music_pic =  time().'-'.$request->musicpic.'.'.$request->musicpic->extension();
         $music_file = time().'-'.$request->musicfile.'.'.$request->musicfile->extension();
         $hashtag = request('hashtag');
         $genre = request('genre');
         $album = request('album');
         $contartist = request('contartist');
         $tracknum = request('tracknumber');

         $request->musicpic->move(public_path('imgs/uploads/art-music-pic'),$music_pic);

         music::create([
            'music_name' => $music_name,
            'music_file' => $music_file,
            'music_format' =>$request->musicpic->extension(),
            'music_genre' => $genre,
            'music_duration' => 'unkown',
            'music_image' => $music_pic,
            'music_size' => 'unkown',
            'music_track_num' => $tracknum,
            'artist_id' => $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d'),
            'hashtag' => $hashtag,
            'music_like' => 0,
            'listen_count' =>0,

         ]);

         return redirect('/artprofile')->with('upstate', 'Picture Uploaded Successfully');










      }
}
