<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function accessSessionData(Request $request) {
        if($request->session()->has('my_name'))
           echo $request->session()->get('my_name');
        else
           echo 'No data in the session';
     }

     public function storeSessionData(Request $request) {
        $request->session()->put('my_name','Virat Gandhi');
        echo "Data has been added to session";
     }
     
     public function deleteSessionData(Request $request) {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
     }
     public function likemusic(Request $request, $id){
      $userSession = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
      echo $userSession;

  }
}
