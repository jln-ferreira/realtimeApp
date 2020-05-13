<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    
    //questions > replies
    public function question(){
    	return $this->belongsTo(Question::class);
    }

    //user > replies
    public function user(){
    	return $this->belongsTo(User::class);
    }

    //replies > likes
    public function like(){
    	return $this->hasMany(Like::class);
    }
}
