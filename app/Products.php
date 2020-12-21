<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Products extends Model
{
    protected $table = 'products';

//    public function codes(){
//        return $this->hasMany('App\ProductCodes');
//    }

    public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }
    public function status(){
        return $this->hasOne('App\Status','id','status_id');
    }

}
