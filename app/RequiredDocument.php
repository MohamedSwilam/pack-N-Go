<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequiredDocument extends Model
{
    protected $fillable = ['description'];

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }
}
