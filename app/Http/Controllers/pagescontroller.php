<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\search;
use DB;

class pagescontroller extends Controller
{
   /*public function edit(Request $request)
   {  $name = $request->input('Name');
         
         DB::update('update users set name =? where id = ?',[$name] );
      
      return view('myinfo.users_list')->with('name',$name);
   }*/
   public function post()
   {
       return view('post');
   }
}
