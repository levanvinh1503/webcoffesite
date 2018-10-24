<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';

    public function PageUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
