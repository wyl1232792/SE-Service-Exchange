<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quotes';
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
