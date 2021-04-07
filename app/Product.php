<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    // 商品（１）：コメント（多）
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
