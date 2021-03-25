<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalAffliation extends Model
{
    protected $table = 'hospital_affliations';
    protected $fillable = ['drid', 'hospitalname','url'];
}
