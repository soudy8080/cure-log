<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Provider\he_IL\Address;

class Pharm extends Model
{
    protected $guarded = [];
    
    public function Addresses()
    {
        return $this->hasMany(Address::class);    
    }
    public function medecines()
    {
        return $this->belongsToMany(Medecine::class)->withPivot('price','Quantity');
    }
    public function subarea()
    {
        return $this->belongsTo(SubArea::class);    
    }
}
