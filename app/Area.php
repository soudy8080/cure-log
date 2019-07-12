<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    public function subareas()
    {
        return $this->hasMany(SubArea::class);
    }
}
