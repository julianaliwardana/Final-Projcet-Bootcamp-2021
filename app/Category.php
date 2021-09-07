<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'createf_at', 'updated_at'];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
