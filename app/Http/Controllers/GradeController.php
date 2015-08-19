<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EducationLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\School;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        if(Auth::user()->role =="Superuser")
        {
            $elevels=EducationLevel::all();
            return view('grade.index',compact('elevels'));
        }
        else
        {
            $school_id=Auth::user()->school_id;
            $elevels=EducationLevel::where('school_id','=',$school_id)->get();

            return view('grade.index',compact('elevels'));
        }
    }

    /**
     * Get list of grades.
     *
     * @return Response
     */
    public function getGrades($id)
    {
        $elevels= EducationLevel::find($id);
        $c=1;
        if(count($elevels) > 0)
        {
            foreach($elevels->grades as $g){

                echo '<tr>
                        <td>'.$c.'</td>
                        <td>'.$g->grade_name.'</td>
                        <td>'.$g->grade_from.'</td>
                        <td>'.$g->grade_to.'</td>
                        <td>'.$g->descriptions.'</td>
                        <td>'.$g->remarks.'</td>
                        <td>'.$g->status.'</td>
                     </tr>';
                $c++;
            }
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
