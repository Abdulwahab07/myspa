<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city_name' , 'region_id'
    ];

    public function Regions(){

        return $this->belongsTo(Regions::class);
    }

    public function District(){

        return $this->hasMany(District::class);
    }

}
