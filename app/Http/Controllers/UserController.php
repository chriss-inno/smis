<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @return Response
     */
    public function store()
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
    }

    //Show login
    public function login()
    {
        if (Auth::check())
        {
            // The user is logged in...
            return redirect('home');
        }
        else
        {
            return view('user.login');
        }

    }
    //Process login
    public function processLogin(UserRequest $request)
    {
        $username=$request->username;
        $password=$request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            if(Auth::user()->block ==1)
            {
                Auth::logout();
                return redirect()->back()->with('message', 'Login Failed you don\'t have Access to login please  Contact Administrator');
            }
            else
            {
                $user= \App\User::find(Auth::user()->id);
                $user->last_login=date("Y-m-d h:i:s");
                $user->save();

                return redirect()->intended('home');
            }

        }
        else
        {
            return redirect()->back()->with('message', 'Login Failed,Invalid username or password');
        }
    }
    //Show home page

    public function home()
    {
        if(Auth::user()->role =="Superuser")
        {
            return view('user.admin_dashboard');

        }

    }

}
