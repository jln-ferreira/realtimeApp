<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // everytime calls Category Route, the key to search:
    // Column 'Slug' insted of 'id' (have to be this fun name 'getRouteKeyName')
    public function getRouteKeyName(){
        return 'slug';
    }

    // What must fill when POST
    // protected $fillable = ['name', 'slug'];

    // or 
    protected $guarded = [];
}
