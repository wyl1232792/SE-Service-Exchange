<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function markedCount()
    {
    	return DB::table('marks')->where('goods_id', '=', $this->id)->count();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'category_goods');
    }
}
