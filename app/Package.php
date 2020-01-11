<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['title','description','price','currency','season','days','nights','rate','date', 'home_page'];

    protected $with = ['inclusions', 'exclusions'];

    public function inclusions()
    {
        return $this->hasMany(Lusion::class)->where('type', 1);
    }

    public function exclusions()
    {
        return $this->hasMany(Lusion::class)->where('type', 0);
    }

    public function scopeComing($query)
    {
        $query->where('date', '>=', today());
    }

    public function scopeHomepage($query)
    {
        $query->where('home_page', 1);
    }
}
