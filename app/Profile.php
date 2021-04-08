<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    // プロフィールと商品
//    1     対  多
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    // コメント（多）：プロフィール（１）
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
