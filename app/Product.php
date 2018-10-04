<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','category', 'subcategory','title','description','quantity','price','city','state','address','file',
    ];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}