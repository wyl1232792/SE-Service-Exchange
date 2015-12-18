<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;
use Auth;

class Goods extends Model
{
    protected $table = 'goods';

    public function user()
    {
    	return User::find($this->user_id);
    }

    public function markedCount()
    {
    	return DB::table('marks')->where('goods_id', '=', $this->id)->count();
    }

    public function isMarked()
    {
        return DB::table('marks')->where('goods_id', '=', $this->id)->where('user_id', '=', Auth::User()->id)->count();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'category_goods');
    }
}
