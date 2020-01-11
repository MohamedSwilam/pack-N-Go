<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['title','description','price','currency','season','days','nights','rate','date'];

    public function scopeComing($query)
    {
        $query->where('date', '>=', today());
    }
}
