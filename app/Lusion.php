<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lusion extends Model
{
    protected $fillable = ['name', 'type', 'package_id'];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
