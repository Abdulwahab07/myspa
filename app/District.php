<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'district_name' , 'city_id'
    ];

    public function City(){

        return $this->belongsTo(City::class);
    }
}
