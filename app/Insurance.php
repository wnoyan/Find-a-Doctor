<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurances';
    protected $fillable = ['drid', 'name'];
}
