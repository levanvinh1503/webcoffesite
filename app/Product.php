<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * Get the post that owns the categories.
     * 
     * @return array
     */
    public function ProductCollection()
    {
        return $this->belongsTo('App\Collection', 'collection_id', 'id');
    }

    public function ProductUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
