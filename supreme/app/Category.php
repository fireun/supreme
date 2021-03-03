<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','image']; //enable Laravel update the field

    public function product(){

        return $this->hasMany('App\Product'); // location becareful spelling

    }
}
