<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

// プロフィールと商品
//    1     対  多
