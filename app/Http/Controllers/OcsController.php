<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OcsController extends Controller
{
    public function showHnl()
    {
        if(Sentinel::check())
            return view('ocs.index');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showBasicInfo()
    {
        if(Sentinel::check())
            return view('ocs.basicinfo.basicinfo');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showJobtitle()
    {
        if(Sentinel::check())
            return view('ocs.basicinfo.jobtitle');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPayitem()
    {
        if(Sentinel::check())
            return view('ocs.basicinfo.payitem');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showPaytype()
    {
        if(Sentinel::check())
            return view('ocs.basicinfo.paytype');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }

    public function showWorktype()
    {
        if(Sentinel::check())
            return view('ocs.basicinfo.worktype');
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
