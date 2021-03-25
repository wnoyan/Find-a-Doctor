<?php

namespace App\Http\Controllers;

Use DB;
use App\Doctor;
use App\Specialist_Doctor;
use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\DB;*/

class SpecialistDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Specialist_Doctor::all();
        return view('specialist_doctors_bd.specialist_doctors.cardiology')->with('data', $data);

        /*$doctors = Doctor::all();
        return view('specialist_doctors_bd.specialist_doctors.cardiology')->with('doctors', $doctors);*/
    }

    public function cardiology()
    {
        /*$data = Specialist_Doctor::all();
        return view('specialist_doctors_bd.specialist_doctors.cardiology')->with('data', $data);*/

        /*$users = DB::table('users')->paginate(15);

        return view('user.index', ['users' => $users]);*/


        $doctors = DB::table('doctors')->Paginate(5);
        /*$doctors = DB::table('doctors')->where('speciality', 'Cardiology')->get()->Paginate(1);*/
        return view('specialist_doctors_bd.specialist_doctors.cardiology', ['doctors' => $doctors]);

        /*$doctors = Doctor::all();
        return view('specialist_doctors_bd.specialist_doctors.cardiology')->with('doctors', $doctors);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialist_Doctor  $specialist_Doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Specialist_Doctor $specialist_Doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specialist_Doctor  $specialist_Doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialist_Doctor $specialist_Doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specialist_Doctor  $specialist_Doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialist_Doctor $specialist_Doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specialist_Doctor  $specialist_Doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialist_Doctor $specialist_Doctor)
    {
        //
    }
}
