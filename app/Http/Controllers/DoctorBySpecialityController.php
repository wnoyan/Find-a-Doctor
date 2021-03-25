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

class DoctorBySpecialityController extends Controller
{
    //available doctor categories
    public function doctor_by_speciality()
    {
        return view('specialist_doctors_bd.specialist_doctors.doctor_by_speciality');
    }

    //general specialist category
    public function commoncategory($value)
    {
        $data['speciality'] = $value;

        $doctors = DB::table('doctor_basic_infos')->where([
            'mainspeciality' => $value
        ])->Paginate(6);

        return view('specialist_doctors_bd.specialist_doctors.specialist_category', $data)->with('doctors', $doctors);
    }

    //specialist doctor profile
    public function specialist_doctor_profile($id)
    {
        $doctor = DoctorBasicInfo::find($id);

        $chambers = DB::table('chamber_locations')
        ->where('chamber_locations.drid', '=', $doctor->drid)
        ->select('chamber_locations.*')
        ->get();

        $hospitals = DB::table('hospital_affliations')
        ->where('hospital_affliations.drid', '=', $doctor->drid)
        ->select('hospital_affliations.*')
        ->get();
        
        $insurances = DB::table('insurances')
        ->where('insurances.drid', '=', $doctor->drid)
        ->select('insurances.*')
        ->get();

        $educations = DB::table('educations')
        ->where('educations.drid', '=', $doctor->drid)
        ->select('educations.*')
        ->get();

        $awards = DB::table('awards')
        ->where('awards.drid', '=', $doctor->drid)
        ->select('awards.*')
        ->get();

        return view('specialist_doctors_bd.specialist_doctors.specialist_doctor_profile', compact('doctor', 'chambers', 'hospitals', 'insurances', 'educations', 'awards'));

        /*dd($chambers);*/
        /*echo "<pre>";
        print_r($chambers);*/
    }

}
