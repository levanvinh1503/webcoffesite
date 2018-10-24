<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * Get the post that owns the categories.
     * 
     * @return array
     */
    public function CategoryPost()
    {
        return $this->hasMany('App\Post', 'category_id', 'id');
    }
}
