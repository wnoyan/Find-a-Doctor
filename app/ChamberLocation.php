<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChamberLocation extends Model
{
    protected $table = 'chamber_locations';
    protected $fillable = ['drid','chambername','state','city','zip', 'telephone','accepting'];
}
