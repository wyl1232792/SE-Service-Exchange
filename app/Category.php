<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function goods()
    {
    	return $this->belongsToMany('App\Goods', 'category_goods');
    }
}
