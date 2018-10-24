<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post';

    /**
     * Get the post that owns the categories.
     * 
     * @return array
     */
    public function PostCategory()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function PostUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
