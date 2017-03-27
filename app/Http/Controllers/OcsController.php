<?php
namespace App\Http\Controllers;
use Sentinel;
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
    public function showBasicBiopsy()
    {

    }
    public function showReceipt()
    {

    }
    public function showHealthCare()
    {
        if(Sentinel::check())
            return view('ocs.healthcare');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
    public function showNurseRoom()
    {
        if(Sentinel::check())
            return view('ocs.nurseroom');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
    public function showPharmacy()
    {
        if(Sentinel::check())
            return view('ocs.pharmacy');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
    public function showDisease()
    {
        if(Sentinel::check())
            return view('ocs.disease');
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
    }
}