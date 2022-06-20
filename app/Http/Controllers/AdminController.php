<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artist;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Music;
use App\Models\News;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
 
    public function login(){

        return view('admin/login');
    }
    public function alogin(Request $request){
        if (Auth::guard('Admin')->attempt(['uname' => $request->uname, 'password' => 
        $request->password])) {

         
        return redirect()->intended('/admin/dashboard');
     }
 
        return back()->withErrors([
            'uname' => 'The provided credentials do not match our records.',
        ])->onlyInput('uname');

     }
    public function signup(){


        return view('admin/signup');
    }
    public function asignup(Request $request){

        Admin::create([
            'uname' => $request->uname,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin/login');
    }

    public function index(Request $request){
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);


        return view('admin/index',['admin' => $admin]);
    }

    public function dash(Request $request){
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);

        return view('admin/dashboard', ['admin' => $admin]);
    }
    public function user(Request $request){
        $user = User::all();
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);

        return view('admin/user',['user' => $user, 'admin' => $admin]);
    }
    
    public function deleteuser($id){
        $delete = DB::table('users')->where('id', $id)->delete();
        User::where('id', $id)->firstOrFail()->delete();
        return redirect('/admin/user');
        
    }

    public function artist(Request $request){
        $artist = Artist::all();
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);


        return view('admin/artist',['artist' => $artist,'admin' => $admin]);
    }
    public function music(Request $request){
        $music = Music::all();
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);


        return view('admin/music', ['music' =>$music, 'admin' => $admin]);
    }
    public function feedback(Request $request){
        $feedback = Feedback::all();
        $seenfeed = DB::table('feedback')->where('seen', 1)->get();
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);


        return view('admin/feedback', ['feedback' => $feedback, 'seen' => $seenfeed, 'admin' =>$admin]);
    }
    public function uploadnews(Request $request){
        $img =  time().'-'.$request->header.'.'.$request->img->extension();

            News::create([
                'img' => $img,
                'header' => $request->header,
                'par' => $request->paragraph,
            ]);
        $musicpic = $request->img->move(public_path('imgs/uploads/news-img'),$img);

        return redirect('/admin/dashboard');
    }
    public function signout(Request $request){
        $request->session()->forget('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        echo "Data has been removed from session.";

        return redirect('/admin/login');
    }
    public function pnews(Request $request){
        
        $user_session = $request->session()->get('login_Admin_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $admin = Admin::findOrfail($user_session);



        return view('/admin/postnews',['admin' => $admin]);
    }









    public function deleteartist($id){
        $delete = DB::table('artist')->where('id', $id)->delete();

        return redirect('/admin/user');
    }
    public function deletefeed($id){
        $delete = DB::table('feedback')->where('id',$id)->delete();

        return redirect('/admin');
    }
}
