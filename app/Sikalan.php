<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sikalan extends Model
{
    protected $guarded = [];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function thumbnail()
    {
        return $this->hasOne(SikalanImage::class);
    }

    public function images()
    {
        return $this->hasMany(SikalanImage::class);
    }
}
