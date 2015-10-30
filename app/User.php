<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function jaccount()
    {
        return $this->hasOne('App\Jaccount');
    }

    public function goods()
    {
        return $this->hasMany('App\Goods');
    }

    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }

    public function requests()
    {
        return $this->hasMany('App\Request');
    }

    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }

    public function marks()
    {
        return $this->belongsToMany('App\Goods', 'marks');
    }

    public function follows()
    {
        
    }
}
