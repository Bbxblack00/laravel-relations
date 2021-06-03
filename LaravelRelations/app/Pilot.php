<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $table = 'pilots';
    protected $fillable = [
        'name',
        'lastname',
        'nationality',
        'date_of_birth',
        'car_id',
    ];

    public function pilots() {

        return $this -> belongsToMany(Pilot::class);
    }

    public function brands() {

        return $this -> belongsToMany(Brand::class);
    }
}
