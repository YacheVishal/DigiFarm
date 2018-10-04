<?php

namespace App\Http\Controllers;
use DB;
use App\User;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{


    public function productVegetable()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%vegetable%')->get();

        $details = $det->sortBy('price');

        return view('product_vegetable')->with('details',$details);
        
    }

    public function productFruit()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%fruit%')->get();

        $details = $det->sortBy('price');

        return view('product_fruit')->with('details',$details);
    }

    public function productSpices()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%spices%')->get();

        $details = $det->sortBy('price');

        return view('product_spicesandseeds')->with('details',$details);
        
    }

    public function productCrops()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%crop%')->get();

        $details = $det->sortBy('price');

        return view('product_crops')->with('details',$details);
    }

    public function productNursery()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%nursery%')->get();

        $details = $det->sortBy('price');

        return view('product_nursery')->with('details',$details);
    }

    public function productFertilizer()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%fertilizer%')->get();

        $details = $det->sortBy('price');

        return view('product_fertilizer')->with('details',$details);
    }

    public function productAgri()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%agriculture%')->get();

        $details = $det->sortBy('price');

        return view('product_equipment')->with('details',$details);
    }

    public function productCattle()
    {
        $det = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('category','LIKE','%cattels%')->get();

        $details = $det->sortBy('price');

        return view('product_cattels')->with('details',$details);
    }
}
