<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Comment;
use App\Product;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::take(8)->orderby('created_at','desc')->get();
        return view('home')->with('products',$products);
    }

    public function post()
    {
        
        return view('post');
    }

    public function storeFile(Request $request)
    {
       {
        if ($request->hasFile('file')) {
            return $request->file;
            $filename = $request->file->getClientOriginalName();
            $request->file->store('public/upload', $filename);
            $Product = new Product;
           $Product->file = $filename;
            
            $Product->save();
            return 'yes';


        //$request->file('image');
        //return $request->image->path();
        //return $request->image->extension();
        //return $request->image->storeAs('public','$filename');
        //return Storage::putFile('public', $request->file('image'));
        }
        else
            {
              return 'No File selected';
            }
        } 
    }

        public function profile()
    {
        return view('myprofile');
    }

        public function Myinfo()
    {
        return view('my_info');
    }

    public function getProducts()
    {
        $products = Product::all();
        return view('product')->with('products',$products);
    }
    public function show($id)
    {
        $products = Product::findOrFail($id);
        
        return view('product_detail')->with('products',$products);
    }

    public function Product_detail()
    {
        $products = Product::with('user')->get();
        return $products;
        //return view('product_detail' , compact(products));
        //->with('products',$products)->with('users',$users);
    }
    public function bctu()
    {   
        $results = DB::table('users')
           ->join('products', 'users.id', '=', 'products.id')

            ->select('users.*','products.*' )->where('users.id', '=', Auth::user()->id)->first();
            
        return view('bc')->with('results',$results);
    }
}
