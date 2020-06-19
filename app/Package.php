<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['title', 'description', 'price', 'currency',
        'season', 'days', 'nights', 'rate', 'date', 'home_page',
        'tbl', 'dbl', 'sgl', 'child'];

    protected $casts  = [
        'home_page' => 'boolean'
    ];

    protected $with = ['inclusions', 'exclusions', 'schedules', 'accommodations', 'medias'];

    public function inclusions()
    {
        return $this->hasMany(Lusion::class)->where('type', 1);
    }

    public function exclusions()
    {
        return $this->hasMany(Lusion::class)->where('type', 0);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function accommodations()
    {
        return $this->hasMany(Accommodation::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function medias()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function scopeComing($query)
    {
        return $query->where('date', '>=', today());
    }

    public function scopeHomepage($query)
    {
        return $query->where('home_page', 1);
    }

    public function scopeMin($query, $value)
    {
        return $query->where('price', '>=', $value);
    }

    public function scopeMax($query, $value)
    {
        return $query->where('price', '<=', $value);
    }

    public function scopeSeason($query, $value)
    {
        return $query->where('season', $value);
    }

    public function scopeNights($query, $value)
    {
        return $query->where('nights', $value);
    }
}
