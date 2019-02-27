<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Nicolaslopezj\Searchable\SearchableTrait;

class Post extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'posts.category' => 10
        ]
    ];



    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    //admin
    /* public function users(){
        return $this->hasMany('App\User');
    } */
    

    
}
