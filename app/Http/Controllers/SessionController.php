<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
 
    public function accessSessionData(Request $request) {
        if($request->session()->has('page'))
           echo $request->session()->get('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');

         //   print_r($request->session()->all());
        else
           echo 'No data in the session';
         
     }

     public function storeSessionData(Request $request) {

        $request->session()->put('page','artistpage');
        echo "Data has been added to session";
        return redirect('/toartist');
     }
     
     public function deleteSessionData(Request $request) {
        $request->session()->forget('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        echo "Data has been removed from session.";
        return redirect('/toartist');
     }
     public function sessionall(Request $request){
      print_r($request->session()->all());
     }
     public function sessionart(Request $request){
      $request->session()->forget('page');
      return redirect('/');

     }
}
