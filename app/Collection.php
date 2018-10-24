<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'collection';

    /**
     * Get the post that owns the categories.
     * 
     * @return array
     */
    public function CollectionProduct()
    {
        return $this->hasMany('App\Product', 'collection_id', 'id');
    }
}
