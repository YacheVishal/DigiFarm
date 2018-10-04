<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Product;
use Auth;
use DB;
 
class ProductController extends Controller
{
    public function index(){
        //fetch all products data
        $prod = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('products.user_id', '=', Auth::user()->id)
        ->get();

        $products= $prod->sortByDesc('created_at');
        
        //pass products data to view and load list view
        return view('myprofile', ['products' => $products]);
    }
    
    public function show($id){
        //fetch product data
        $product = Product::find($id);
        
        //pass products data to view and load list view
        return view('product.show', ['product' => $product]);
    }
    
    public function add(){


        //load form view
        return view('product.add');
    }
    public function post()
    {
        
        return view('post');
    }
    public function storeFile(Request $request){
        
        
        
                 
    }
    public function insert(Request $request){
        
        //validate product data
        $this->validate($request, [
            'category' => 'required',
            'subcategory' => 'required',
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
            'file' => 'required'
        ]);

         //Handle File Upload
        if ($request->hasFile('file')) {
            //return $request->file;
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/upload', $filename);
            
            //return 'yes';
            }
            else
                {
                  return 'No File selected';
                }
            //create post
            $product = new Product;
            $product->user_id = $request->User()->id;
            $product->category = $request->input('category');
            $product->subcategory = $request->input('subcategory');
            $product->title = $request->input('title');
            $product->description = $request->input('description');
            $product->quantity = $request->input('quantity');
            $product->price = $request->input('price');
            $product->city = $request->input('city');
            $product->state = $request->input('state');
            $product->address = $request->input('address');
            $product->file = $filename;
            
            $product->save();


         //return 'yes';
        return redirect()->route('myprofile')->with('message','Product details added successfully!');         
    }
    
    public function edit($id){
        //get product data by id
        $product = Product::find($id);
        
        //load form view
        return view('product.edit', ['product' => $product]);
    }
    
    public function update($id, Request $request){
        //validate product data
        $this->validate($request, [
           'category' => 'required',
            'subcategory' => 'required',
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
        ]);
        
        //get product data
        $productData = $request->all();
        
        
        //update product data
        Product::find($id)->update($productData);
        
 
        return redirect()->route('myprofile')->with('message','Product details updated successfully!');
    }
    
    public function delete($id){
        //update product data
        Product::find($id)->delete();
        
        return redirect()->route('myprofile')->with('message','Product details deleted successfully!');
    }
}