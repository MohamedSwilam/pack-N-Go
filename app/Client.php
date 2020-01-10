<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'telephone', 'adults', 'children'
    ];

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
