<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

// カテゴリーと商品一覧
//      1   ：   多
