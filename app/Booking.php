<?php

namespace App;

use App\Traits\PackageItem;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use PackageItem;

    protected $fillable = ['name', 'email', 'phone', 'adults', 'children', 'infants', 'package_id'];

    public function scopeName($query, $name)
    {
        $query->orwhere('name', 'like', "%$name%");
    }

    public function scopeId($query, $id)
    {
        $query->orwhere('id', 'like', "%$id%");
    }

    public function scopeEmail($query, $email)
    {
        $query->orwhere('email', 'like', "%$email%");
    }

    public function scopeTelephone($query, $telephone)
    {
        $query->orwhere('telephone', 'like', "%$telephone%");
    }
}
