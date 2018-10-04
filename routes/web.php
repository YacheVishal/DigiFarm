<?php
use Illuminate\Support\Facades\Input;
use App\search;
use App\Category;
use App\Product;
use App\Comment;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $categories = Category::all();
    return view('welcome')->with('categories','$categories');
});


Route::resource('MyInfo', 'InfoController ');

Route::get('/myinfo/edit/{id}', array('as'=>'myinfo.edit','uses'=>'InfoController@edit'));
Route::post('/myinfo/update/{id}', array('as'=>'myinfo.update','uses'=>'InfoController@update'));

Route::get('test1', 'CommentsController@index');
Route::get('auth/register', 'Auth\AuthController@getRegister');

//Route::get('auth/register', 'Auth\RegisterController@create');
//Route::get('register', 'Auth\RegisterController@getRegister');
Route::get('/login', 'Auth\LoginController@getLogin');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('post', 'ProductController@post')->name('product.insert');
Route::post('post', 'ProductController@storeFile');
Route::get('/myprofile', 'HomeController@profile');

Route::get('/my_info', 'HomeController@Myinfo');

Route::get('product', 'HomeController@getProducts');
Route::get('product/{id}', 'HomeController@show');
Route::get('product_detail', 'HomeController@Product_detail');

//Route::get('post', 'pagescontroller@post');
Route::get('test',function(){
    return App\Product::with('user')->get();
});
 
Route::post('comments/{id}',['uses'=>'CommentsController@store','as' => 'comments.store']);

//-----------------------Category Controller----------------------------------
Route::get('product_vegetable','CategoriesController@productVegetable');
Route::get('product_fruit','CategoriesController@productFruit');
Route::get('product_spicesandseeds','CategoriesController@productSpices');
Route::get('product_crops','CategoriesController@productCrops');
Route::get('product_nursery','CategoriesController@productNursery');
Route::get('product_fertilizer','CategoriesController@productFertilizer');
Route::get('product_equipment','CategoriesController@productAgri');
Route::get('product_cattels','CategoriesController@productCattle');
//----------------------------------------------------------

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@showResetForm')->name('password.reset');

Route::any('/welcome',function(){
    $q = Input::get ( 'q' );
    $search = Search::where('farmer_name', 'location','city', 'category', 'LIKE','%'.$q.'%')->get();
    if(count($search) > 0)
        return view('welcome')->withDetails($search)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});

Route::get('welcome', 'SearchController@index');



/*Route::get('/myinfo/{id}/edit','InfoController@edit');
  Route::get('/myinfo/{id}/update','InfoController@update');

   Route::get('/myinfo', array('as' => 'myinfo' , 'uses' => 'InfoController@index'));


    Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
    Route::resource('users', 'UserController');
    Route::resource('product', 'ProductController');*/

Route::get('/myprofile', array('as'=>'myprofile','uses'=>'ProductController@index'));
Route::get('/products/add', array('as'=>'product.add','uses'=>'ProductController@add'));
Route::post('/products/insert', array('as'=>'product.insert','uses'=>'ProductController@insert'));
Route::get('/products/show/{id}', array('as'=>'product.show','uses'=>'ProductController@show'));
Route::get('/products/edit/{id}', array('as'=>'product.edit','uses'=>'ProductController@edit'));
Route::post('/products/update/{id}', array('as'=>'product.update','uses'=>'ProductController@update'));
Route::get('/products/delete/{id}', array('as'=>'product.delete','uses'=>'ProductController@delete'));



Route::resource('myinfo', 'MyinfoController');

//Route::get('/myprofile', 'UploadfileController@index');
//Route::post('/myprofile', 'UploadfileController@upload');

Route::post('/search',function() {
    $q = Input::get('q');
    if($q == "")
    {
        return redirect()->back();
    }
    else if($q != ""){
        $Search = DB::table('users')
        ->join('products', 'users.id', '=', 'products.user_id')
        ->where('products.city','LIKE','%'.$q.'%')
        ->orWhere('products.category','LIKE','%'.$q.'%')
        ->orWhere('products.subcategory','LIKE','%'.$q.'%')
        ->orWhere('products.state','LIKE','%'.$q.'%')
        ->orWhere('products.title','LIKE','%'.$q.'%')
        ->orWhere('users.name','LIKE','%'.$q.'%')
        
        ->get();

           if(count($Search) > 0)
                return view('product')->withDetails($Search)->withQuery($q);
    }
    return view('product')->withMessage("Your search did not match any products.");

        
});
	



