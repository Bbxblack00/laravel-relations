<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'name',
        'nationality',
    ];
}
