<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Music;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;


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
            'profilepic' =>['mimes:jpeg,jpg,png,gif','max:10000'],       
            'uname' => ['required', 'string', 'max:255'],  
            'email' => ['string', 'email', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $profilepic =  time().'-'.$request->fnmae.'_'.$request->lname.'.'.$request->profilepic->extension();
        Artist::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'profilepic' => $profilepic,
            'uname' => $request->uname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'gender' => $request->gender,

            'password' => Hash::make($request->password),

        ]);
        $musicpic = $request->profilepic->move(public_path('imgs/uploads/art-profile-pic'),$profilepic);
        return redirect('/toartist');
   }
     public function alogin(Request $request){
     
        if (Auth::guard('Artist')->attempt(['email' => $request->email, 'password' => 
        $request->password])) {

         
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
      $musics = DB::table('music')->where('artist_id', $id)->get();
      $musicnum = count($musics);
      $follow = DB::table('follow_artists')->where('artist_id', $id)->get();
      $info = ['fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload, 'profilepic' =>$dbs->profilepic, 'musics' => $musicnum, 'follow' => count($follow)];


         return response(view('/artistpage/profile',['info'=> $info]));
     }

     public function uploadmusicpage(Request $request){
      $id = $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      $dbs = artist::findOrFail($id); 
      $musics = DB::table('music')->where('artist_id', $id)->get();
      $musicnum = count($musics);
      $follow = DB::table('follow_artists')->where('artist_id', $id)->get();
      $info = ['fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload, 'profilepic' =>$dbs->profilepic, 'musics' => $musicnum, 'follow' => count($follow)];

     return response(view('/artistpage/uploadmusic',['info'=> $info]));
   }

   
      public function uploadmusicfun(Request $request){

         $music_name = request('musicname');
         $music_pic =  time().'-'.$request->music_name.'.'.$request->musicpic->extension();
         $music_file = time().'-'.$request->music_name.'.'.$request->musicfile->extension();
         $hashtag = request('hashtag');
         $genre = request('genre');
         $album = request('album');
         $contartist = request('contartist');
         $tracknum = request('tracknumber');

         Music::create([
            'music_name' => $music_name,
            'music_file' => $music_file,
            'music_format' =>$request->musicpic->extension(),
            'music_genre' => $genre,
            'music_duration' => 'unkown',
            'music_image' => $music_pic,
            'music_size' => 'unkown',
            'music_track_num' => $tracknum,
            'album' => $album,
            'artist_id' => $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d'),
            'hashtag' => $hashtag,
            'cont_artists'=> $contartist,
            'music_like' => 0,
            'listen_count' => 0,
         ]);
         $musicpic = $request->musicpic->move(public_path('imgs/uploads/art-music-pic'),$music_pic);
         $musicfile = $request->musicfile->move(public_path('imgs/uploads/art-music-file'),$music_file);

         return redirect('/artprofile')->with('upstate', 'Picture Uploaded Successfully');

   }
   public function viewmusicfun(Request $request){

      $music = new Music();
      $id = $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      $artist = DB::table('music')->where('artist_id', $id)->get();
     
      $dbs = artist::findOrFail($id); 
      $musics = DB::table('music')->where('artist_id', $id)->get();
      $musicnum = count($musics);

       $follow = DB::table('follow_artists')->where('artist_id', $id)->get();
      $info = ['fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload, 'profilepic' =>$dbs->profilepic, 'musics' => $musicnum, 'follow' => count($follow)];
      // $likes = DB::table('music')->where('artist_id', $id)->get();
      $listen = 0;
      foreach($musics as $mus){
         $listen = $listen + $mus->listen_count;
      }



      return view('/artistpage/viewmusic',['info'=> $info, 'artist'=> $artist, 'listen' => $listen]);
   }

   public function deletemusicfun(Request $request, $id){
      $delete = DB::table('music')->where('id', $id)->delete();

     return redirect('/viewmusic');
   }
   
   public function viewalbumfun(){
         
   }
   public function updateartist(Request $request){
      $music = new Music();
      $id = $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      $artist = DB::table('music')->where('artist_id', $id)->get();
     
      $dbs = artist::findOrFail($id); 
      // $info = ['id' =>$dbs->id ,'fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload,   'profilepic' =>$dbs->profilepic];
      
      $musics = DB::table('music')->where('artist_id', $id)->get();
      $musicnum = count($musics);
      // $info = ['id' =>$dbs->id ,'fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload, 'profilepic' =>$dbs->profilepic, 'musics' => $musicnum];
      $follow = DB::table('follow_artists')->where('artist_id', $id)->get();
      $info = ['id' =>$dbs->id, 'fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload, 'profilepic' =>$dbs->profilepic, 'musics' => $musicnum, 'follow' => count($follow)];
      

      return view('/artistpage/updateart',['info'=> $info, 'artist'=> $artist]);

   }
   public function updateprofile(Request $request, $id)
   {
      $id = $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      $dbs = artist::findOrFail($id); 
      $info = ['fname' => $dbs->fname ,'lname' => $dbs->lname, 'uname' => $dbs->uname, 'email' => $dbs->email, 'phonenumber' => $dbs->phonenumber, 'uploadmusic' => $dbs->musicUpload, 'uploadalbum' => $dbs->albumUpload, 'profilepic' =>$dbs->profilepic];
      $profile_pic =  time().'-'.$request->fname.$request->lname.'.'.$request->profilepic->extension();  

      $update = DB::table('artists')
              ->where('id', $id)
              ->update(['fname' => request('fname'),
                        'lname' => request('lname'),
                        'phonenumber' => request('phonenumber'),
                        'password' => Hash::make(request('password')),
                        'profilepic' => $profile_pic,
                    ]);
      $pro = $request->profilepic->move(public_path('imgs/uploads/art-profile-pic'),$profile_pic);      
      // $musicpic = $request->musicpic->move(public_path('imgs/uploads/art-music-pic'),$music_pic);            
           
         return redirect('/artprofile');
   
   }
        

}
