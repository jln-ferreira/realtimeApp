<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // What must fill when POST
    // protected $fillable = ['body', 'question_id', 'user_id'];

    // or 
    protected $guarded = [];
    
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
