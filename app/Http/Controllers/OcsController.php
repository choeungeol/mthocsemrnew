<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OcsController extends Controller
{
    public function showOcs()
    {
        if(Sentinel::check())
            return view('ocs.index');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }


    public function showTest()
    {
        if(Sentinel::check())
            return view('ocs.test');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

}
