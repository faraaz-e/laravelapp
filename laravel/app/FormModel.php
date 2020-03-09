<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    //
    protected $fillable = [

        "location", "city", "cityLat", "cityLng", "month"
        ];

     protected $table = 'form';
}
