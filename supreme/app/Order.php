<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['userID','amount','paymentStatus','status','phoneNo','address','city','postalCode','country'];


    public function product(){

        return $this->hasMany('App\Product');

    }

    public function user(){

        return $this->belongsTo('App\User');

    } 
}
