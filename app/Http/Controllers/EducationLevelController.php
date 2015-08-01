<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EducationLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\School;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $elevels=EducationLevel::all();
        return view('ELevels.index',compact('elevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $school_id=Auth::user()->school_id;
        return view('ELevels.create',compact('school_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'level_name' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {

            $errors=$validator->errors();

            if (count($errors) > 0){
                echo ' <div class="alert alert-danger">' ;
                echo '<ul>' ;
                foreach ($errors->all() as $error)
                {
                    echo ' <li>$error</li>';
                }

                echo '</ul>';
                echo '</div>';
            }
        }
        else
        {
            $getYear =AcademicSetupController::getYear($request->school_id);
            $cl=new EducationLevel;
            $cl->school_id=$request->school_id;
            $cl->level_name=$request->level_name;
            $cl->level_descriptions=$request->level_descriptions;
            $cl->input_by=Auth::user()->id;
            $cl->current_year=$getYear;
            $cl->remarks=$request->remarks;
            $cl->status=$request->status;
            $cl->save();
        }
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
    }
}
