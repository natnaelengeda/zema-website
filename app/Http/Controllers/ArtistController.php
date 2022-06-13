<?php

namespace App\Http\Controllers;

use App\Models\artist;
// use Illuminate\Support\Facades\Auth;
// use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
// use Illuminate\Http\Request;
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
        $artist = new artist();

        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],       
            'uname' => ['required', 'string', 'max:255'],  
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $artist->fname = request('fname');
        // $artist->lname = request('lname');
        // $artist->uname = request('uname');
        // $artist->email = request('email');
        // $artist->phonenumber = request('phonenumber');
        // $artist->gender = request('gender');
        // $artist->password = request('password');
        
        // $artist->save();
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
     public function alogin(){
      

      $success = auth()->attempt([
         'email' => request('email'),
         'password' => request('password')
     ]);

     if($success) {
         return redirect()->to(RouteServiceProvider::HOME);
     }

     return back()->withErrors([
         'email' => 'The provided credentials do not match our records.',
     ]);
      
       

      
     }
}
