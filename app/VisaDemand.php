<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisaDemand extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'description'];

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function scopeVisa($query, $value)
    {
        return $query->where('visa_id', $value);
    }
}
