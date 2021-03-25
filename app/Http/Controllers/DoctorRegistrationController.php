<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorBasicInfo;
use App\ChamberLocation;
use App\HospitalAffliation;
use App\Education;
use App\Award;
use App\Insurance;

class DoctorRegistrationController extends Controller
{
    
	//doctors basic information storing
    public function dbstore(Request $request)
    {
    	$doctorbasicinfo = new DoctorBasicInfo();

    	$doctorbasicinfo->drname = $request->input('drname');
    	$doctorbasicinfo->drid = $request->input('drid');
    	$doctorbasicinfo->mainspeciality = $request->input('mainspeciality');
    	$doctorbasicinfo->state = $request->input('state');
    	$doctorbasicinfo->city = $request->input('city');
    	$doctorbasicinfo->experience = $request->input('experience');
    	$doctorbasicinfo->accepting = $request->input('accepting');
    	$doctorbasicinfo->aboutdr = $request->input('aboutdr');
        /*$doctorbasicinfo->insurance = $request->input('insurance');*/
    	$doctorbasicinfo->image = $request->input('image');

    	if($request->hasfile('image')){
    		$file = $request->file('image');
    		$extension = $file->getClientOriginalExtension();
    		$filename = time() . '.' . $extension;
    		$file->move('image/doctor/', $filename);
    		$doctorbasicinfo->image = $filename;
    	}
    	else{
    		return $request;
    		$doctorbasicinfo->image = '';
    	}

    	$doctorbasicinfo->save();

        session()->flash('done', 'Successfully Inserrted Doctor Basic Information! Provide Rest Of The Information And Carefully Maintain The Doctor ID.');

        return view('specialist_doctors_bd.layout.doctor-registration');
    }

    //chamber location information storing
    public function clstore(Request $request)
    {
    	$chamberlocation = new ChamberLocation();

    	$chamberlocation->drid = $request->input('drid');
    	$chamberlocation->chambername = $request->input('chambername');
    	$chamberlocation->state = $request->input('state');
    	$chamberlocation->city = $request->input('city');
    	$chamberlocation->zip = $request->input('zip');
    	$chamberlocation->telephone = $request->input('telephone');
    	$chamberlocation->accepting = $request->input('accepting');

    	$chamberlocation->save();

    	session()->flash('done', 'Successfully Inserrted Chamber Location Information! Provide More Chamber Location Information If Exists.');

        return view('specialist_doctors_bd.layout.doctor-registration');
    }

    //hospital affliation information storing
    public function hastore(Request $request)
    {
        $hospitalaffliation = new HospitalAffliation();

        $hospitalaffliation->drid = $request->input('drid');
        $hospitalaffliation->hospitalname = $request->input('hospitalname');
        $hospitalaffliation->url = $request->input('url');

        $hospitalaffliation->save();

        session()->flash('done', 'Successfully Inserrted Affliation Information! Provide More Affliation Information If Exists.');

        return view('specialist_doctors_bd.layout.doctor-registration');
    }

    //education information storing
    public function estore(Request $request)
    {
        $education = new Education();

        $education->drid = $request->input('drid');
        $education->institution = $request->input('institution');
        $education->gyear = $request->input('gyear');

        $education->save();

        session()->flash('done', 'Successfully Inserrted Education Information! Provide More Education Information If Exists.');

        return view('specialist_doctors_bd.layout.doctor-registration');
    }

    //award information storing
    public function astore(Request $request)
    {
        $award = new Award();

        $award->drid = $request->input('drid');
        $award->name = $request->input('name');
        $award->description = $request->input('description');

        $award->save();

        session()->flash('done', 'Successfully Inserrted Award Information! Provide More Award Information If Exists.');

        return view('specialist_doctors_bd.layout.doctor-registration');
    }

    //insurance information storing
    public function istore(Request $request)
    {
        $insurance = new Insurance();

        $insurance->drid = $request->input('drid');
        $insurance->name = $request->input('name');

        $insurance->save();

        session()->flash('done', 'Successfully Inserrted Insurance Information! Provide More Insurance Information If Exists.');

        return view('specialist_doctors_bd.layout.doctor-registration');
    }

}
