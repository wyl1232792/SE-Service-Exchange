<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaccount extends Model
{
    //
    protected $table = 'jaccounts';

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
