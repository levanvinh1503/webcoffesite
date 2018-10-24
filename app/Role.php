<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role';

    /**
     * Get the post that owns the categories.
     * 
     * @return array
     */
    public function RoleUser()
    {
        return $this->hasMany('App\User', 'role', 'id');
    }
}
