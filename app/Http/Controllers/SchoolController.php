<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolRequest;
use Illuminate\Support\Facades\Validator;
use App\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $school=School::all();
        return view('school.index',compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('school.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SchoolRequest $request)
    {
        //
        $sc=new School;
        $sc->school_code=$request->school_code;
        $sc->school_name=$request->school_name;
        $sc->registered=$request->registered;
        $sc->registration_no=$request->registration_no;
        $sc->accredited=$request->accredited;
        $sc->SchoolProfile=$request->SchoolProfile;
        $sc->ownership_type=$request->ownership_type;
        $sc->owner=$request->owner;
        $sc->region=$request->region;
        $sc->district=$request->district;
        $sc->postal_address=$request->postal_address;
        $sc->physical_address=$request->physical_address;
        $sc->school_head=$request->school_head;
        $sc->mobile=$request->mobile;
        $sc->telephone=$request->telephone;
        $sc->fax=$request->fax;
        $sc->email=$request->email;
        $sc->website=$request->website;
        $sc->start_date=$request->start_date;
        $sc->status=$request->status;
        $sc->created_date=date('Y-m-d');
        $sc->save();

        return redirect('schools');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $school=School::find($id);
        return view('school.show',compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $school=School::find($id);
        return view('school.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $school=School::find($id)->delete;
        return redirect('schools');
    }
    public function schoolReports()
    {
        //
        return view('school.reports');

    }
    public function manage()
    {
        //
        $school=School::all();
        return view('school.manage',compact('school'));
    }
    public  function schoolSearch()
    {

    }

}
