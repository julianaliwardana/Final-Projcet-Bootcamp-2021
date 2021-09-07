<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
