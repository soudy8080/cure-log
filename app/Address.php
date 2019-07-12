<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];
    public function pharm()
    {
        return $this->belongsTo(Pharm::class);
    }
    public function subarea()
    {
        return $this->belongsTo(SubArea::class);
    }
}
