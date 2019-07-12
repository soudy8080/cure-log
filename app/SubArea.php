<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Provider\ka_GE\Address;

class SubArea extends Model
{
    protected $table = 'sub_areas';
    public function areas()
    {
        return $this->belongsTo(Area::class);
    }
    public function Address()
    {
        return $this->hasMany(Address::class);
    }
    public function pharms()
    {
        return $this->hasMany(Pharm::class);
    }
}
