<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecine extends Model
{
    public function pharms()
    {
        return $this->belongsToMany(Pharm::class)->withPivot('price','Quantity');
    }
}
