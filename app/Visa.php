<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    protected $fillable = ['country_name', 'price', 'currency', 'extraction_time', 'visit_time', 'expiry'];

    protected $with = ['image', ];

    public function image()
    {
        return $this->morphOne(Media::class, 'mediable');
    }

    public function documents()
    {
        return $this->hasMany(RequiredDocument::class);
    }

    public function demands()
    {
        return $this->hasMany(VisaDemand::class);
    }
}
