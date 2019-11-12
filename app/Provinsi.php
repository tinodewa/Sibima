<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //

    protected $fillable = [
        'nama'
    ];

    public function kota()
    {
        return $this->hasMany(Kota::class);
    }
}
