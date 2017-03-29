<?php

namespace App\Http\Controllers;

use App\MthChart;
use App\MthPatient;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Sentinel;

use App\Http\Requests;

class OcsBasicBiopsyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = array();
        $chart = DB::table('mth_charts')
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->where('basicbiopsy_flag','=',0)
            ->get();
/*
        $chart = MthChart::where('basicbiopsy_flag','=',0)->get();*/

        if(Sentinel::check())
            return view('ocs.basicbiopsy', compact('get','chart'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

/*        $get = MthPatient::find($id)->mth_charts;*/


        $get =  DB::table('mth_charts')
            ->where('mth_charts.id',$id)
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->where('basicbiopsy_flag','=',0)
            ->get();

        $chart = DB::table('mth_charts')
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->where('basicbiopsy_flag','=',0)
            ->get();

        if(Sentinel::check())
            return view('ocs.basicbiopsy', compact('get','chart'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
