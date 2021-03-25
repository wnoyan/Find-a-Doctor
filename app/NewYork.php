<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewYork extends Model
{
    protected $table = 'new_yorks';
    protected $fillable = ['name'];
}