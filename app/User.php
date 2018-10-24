<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the post that owns the categories.
     * 
     * @return array
     */
    public function UserRole()
    {
        return $this->belongsTo('App\Role', 'role', 'id');
    }

    public function UserProduct()
    {
        return $this->hasMany('App\Product', 'user_id', 'id');
    }

    public function UserPost()
    {
        return $this->hasMany('App\Post', 'user_id', 'id');
    }

    public function UserPage()
    {
        return $this->hasMany('App\Page', 'user_id', 'id');
    }
}
