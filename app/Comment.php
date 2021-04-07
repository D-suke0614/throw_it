<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function product()
    {
        return $this->belongsTo('App\Product');
    }


    // コメント（多）：プロフィール（１）
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
