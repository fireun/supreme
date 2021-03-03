<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['orderID','userID','quantity','productID'];

    public function category(){

        return $this->belongsTo('App\Category');

    }
    public function product(){

        return $this->belongsTo('App\Product');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
