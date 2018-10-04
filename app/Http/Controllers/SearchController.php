<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\search;

class SearchController extends Controller
{
    public function index()
   {
   	//return view('welcome');

   	$search = search::all()->toArray();
    return view('welcome', compact($search));

   }
}
