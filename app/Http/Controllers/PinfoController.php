<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class PinfoController extends Controller
{
    public function showPinfo()
    {
        if(Sentinel::check())
            return view('ocs.admin.pinfo');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showDlist()
    {
        if(Sentinel::check())
            return view('ocs.admin.plist');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showNlist()
    {
        if(Sentinel::check())
            return view('ocs.admin.plist1');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}
