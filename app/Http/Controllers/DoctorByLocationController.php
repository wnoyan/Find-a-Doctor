<?php

namespace App\Http\Controllers;

Use DB;
use Illuminate\Http\Request;
use App\DoctorBasicInfo;
use App\ChamberLocation;
use App\HospitalAffliation;
use App\Education;
use App\Award;
use App\Insurance;
use App\NewYork;

class DoctorByLocationController extends Controller
{
    //available doctor location
    public function doctor_by_location()
    {
        return view('specialist_doctors_bd.specialist_doctors.doctor_by_location');
    }

    //new york state
    public function New_York()
    {
        return view('specialist_doctors_bd.specialist_doctors.location.New_York');
    }
    
    //general state
    public function generalstate()
    {
        $citys = NewYork::all();

        return view('specialist_doctors_bd.specialist_doctors.location.generalstate')->with('citys', $citys);
    }

    //common location doctor
    public function commonlocation($value)
    {
        $city_name['cityname'] = $value;

        return view('specialist_doctors_bd.specialist_doctors.location.doctor_by_locationspeciality', $city_name);
    }

    //common location with specialist doctor
    public function commonlocationspeciality($cityname, $speciality)
    {
        $datac['cityname'] = $cityname;
        $datas['speciality'] = $speciality;

        $doctors = DB::table('doctor_basic_infos')->where([
            'city' => $cityname,
            'mainspeciality' => $speciality

        ])->Paginate(6);

        return view('specialist_doctors_bd.specialist_doctors.location.commonlocation', $datac, $datas)->with('doctors', $doctors);

        /*return view('specialist_doctors_bd.specialist_doctors.location.commonlocation', compact('doctors', 'data'));*/
    }
}
