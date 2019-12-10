<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sikombatan extends Model
{
    protected $guarded = [];

    public function sikalan()
    {
        return $this->belongsTo(Sikalan::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function thumbnail()
    {
        return $this->hasOne(SikombatanImage::class);
    }

    public function images()
    {
        return $this->hasMany(SikombatanImage::class);
    }
}
