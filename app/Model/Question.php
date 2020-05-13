<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // everytime calls question Route, the key to search:
    // Column 'Slug' insted of 'id' (have to be this fun name 'getRouteKeyName')
    public function getRouteKeyName(){
        return 'slug';
    }

    // What must fill when POST
    // protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];

    // or 
    protected $guarded = [];


	// user > questions
    public function user(){
    	return $this->belongsTo(User::Class);
    }

    // questions > replies
    public function replies(){
    	return $this->hasMany(Reply::Class);
    }

    // questions > category
    public function category(){
    	return $this->belongsTo(Category::Class);
    }

    // Create a new atribute 'path' to complement the Resource
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

}
