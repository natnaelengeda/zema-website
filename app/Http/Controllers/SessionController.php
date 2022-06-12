<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
 
    public function accessSessionData(Request $request) {
        if($request->session()->has('page'))
           echo $request->session()->get('page');
        else
           echo 'No data in the session';
         
     }

     public function storeSessionData(Request $request) {

        $request->session()->put('page','artistpage');
        echo "Data has been added to session";
        return redirect('/toartist');
     }
     
     public function deleteSessionData(Request $request) {
        $request->session()->forget('page');
        echo "Data has been removed from session.";
        return redirect('/');
     }
}
