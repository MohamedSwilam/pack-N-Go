<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = ['name','birth_date','expire_date','passport_number','gender','nationality', 'address', 'phone', 'passport_name'];

    public function image()
    {
        return $this->morphOne(Media::class, 'mediable');
    }
}
