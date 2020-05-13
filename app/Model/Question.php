<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

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

}
