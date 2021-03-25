<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorBasicInfo extends Model
{
    protected $table = 'doctor_basic_infos';
    protected $fillable = ['drname','drid','mainspeciality','state','city','experience','accepting','aboutdr', 'image'];
}
