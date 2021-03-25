<?php

namespace App\Http\Controllers;

Use DB;
use Illuminate\Http\Request;
use App\DoctorBasicInfo;

class DoctorController extends Controller
{
    public function display()
    {
    	$doctors = DB::table('doctor_basic_infos')->Paginate(10);
    	return view('specialist_doctors_bd.doctor.doctor')->with('doctors', $doctors);
    }

    // doctors searching in a group
    public function groupsearching(Request $request)
    {
        /*->where('drname', 'like', '%'.$request->get('name').'%')*/

        $datas['speciality'] = $request->get('speciality');
        $datac['city'] = $request->get('city');

        $doctors = DB::table('doctor_basic_infos')
        ->Where('mainspeciality', '=', $request->get('speciality'))
        ->Where('city', '=', $request->get('city'))
        ->get();

        return view('specialist_doctors_bd.searching.groupsearching', $datas, $datac)->with('doctors', $doctors);
    }

    // doctors searching by name
    public function namesearching(Request $request)
    {
    	$doctors = DB::table('doctor_basic_infos')->where([
    		'drname' => $request->get('name')
        ])->Paginate(6);

        $data['name'] = $request->get('name');

        return view('specialist_doctors_bd.searching.namesearching', $data)->with('doctors', $doctors);
    }
    
    // doctors searching by speciality
    public function spesearching(Request $request)
    {
    	$doctors = DB::table('doctor_basic_infos')->where([
    		'mainspeciality' => $request->get('speciality')
        ])->Paginate(6);

        $data['speciality'] = $request->get('speciality');

        return view('specialist_doctors_bd.searching.specialitysearching', $data)->with('doctors', $doctors);
    }

    // doctors searching by speciality with name
    public function spenamesearching(Request $request)
    {
        $datas['speciality'] = $request->get('speciality');
        $datan['name'] = $request->get('name');

        $doctors = DB::table('doctor_basic_infos')->where([
            'mainspeciality' => $request->get('speciality'),
            'drname' => $request->get('name')
        ])->Paginate(6);

        return view('specialist_doctors_bd.searching.spenamesearching', $datas, $datan)->with('doctors', $doctors);
    }

    // doctors searching by speciality with city
    public function specitysearching(Request $request)
    {
        $datas['speciality'] = $request->get('speciality');
        $datac['city'] = $request->get('city');

        $doctors = DB::table('doctor_basic_infos')->where([
            'mainspeciality' => $request->get('speciality'),
            'city' => $request->get('city')
        ])->Paginate(6);

        return view('specialist_doctors_bd.searching.specitysearching', $datas, $datac)->with('doctors', $doctors);
    }

    // doctors searching by city
    public function citysearching(Request $request)
    {
    	$doctors = DB::table('doctor_basic_infos')->where([
    		'city' => $request->get('city')
        ])->Paginate(6);

        $data['city'] = $request->get('city');

        return view('specialist_doctors_bd.searching.citysearching', $data)->with('doctors', $doctors);
    }

    // doctors searching by city with name
    public function citynamesearching(Request $request)
    {
        $datac['city'] = $request->get('city');
        $datan['name'] = $request->get('name');

        $doctors = DB::table('doctor_basic_infos')->where([
            'drname' => $request->get('name'),
            'city' => $request->get('city')
        ])->Paginate(6);

        return view('specialist_doctors_bd.searching.citynamesearching', $datac, $datan)->with('doctors', $doctors);
    }

    // doctors searching by city with speciality
    public function cityspecialitysearching(Request $request)
    {
        $datac['city'] = $request->get('city');
        $datas['speciality'] = $request->get('speciality');

        $doctors = DB::table('doctor_basic_infos')->where([
            'mainspeciality' => $request->get('speciality'),
            'city' => $request->get('city')
        ])->Paginate(6);

        return view('specialist_doctors_bd.searching.cityspecialitysearching', $datac, $datas)->with('doctors', $doctors);
    }

    // doctors searching by zip
    public function zipsearching(Request $request)
    {
        $data['zip'] = $request->get('zip');

        $doctors = DB::table('chamber_locations')->where([
            'zip' => $request->get('zip')
        ])->Paginate(6);

        return view('specialist_doctors_bd.searching.zipsearching', $data)->with('doctors', $doctors);
    }
}
