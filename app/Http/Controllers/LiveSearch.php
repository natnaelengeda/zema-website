<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{
    public function index(){

        return view('/');
    }
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('music')
         ->where('music_name', 'like', '%'.$query.'%')
        //  ->orWhere('Address', 'like', '%'.$query.'%')
        //  ->orWhere('City', 'like', '%'.$query.'%')
        //  ->orWhere('PostalCode', 'like', '%'.$query.'%')
        //  ->orWhere('Country', 'like', '%'.$query.'%')
         ->orderBy('id', 'DESC')
         ->get();
         
      }
      else
      {
    //    $data = DB::table('music')
    //      ->orderBy('id', 'desc')
    //      ->get();
    $output = '
    <li class="p-4 hidden">
        <p>No Music</p>
    </li>
   ';
        
      }
      $total_row = $data->count();

      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <li class="p-4 cursor-pointer hover:bg-gray-200 rounded-b-xl">
            <p>'.$row->music_name.'</p>
        </li>
        ';
       }
      }
      else
      {
       $output = '
        <li class="p-4">
            <p>No Music</p>
        </li>
       ';
      }


      $data = array(
       'music_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
}
}
