<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
