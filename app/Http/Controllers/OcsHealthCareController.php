<?php

namespace App\Http\Controllers;

use App\MthBasicBiopsy;
use DB;
use Sentinel;
use Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;

class OcsHealthCareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = array();
        $basicbiopsy = array();

        $chart = DB::table('mth_charts')
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->where('basicbiopsy_flag','=',1)
            ->get();

        if(Sentinel::check())
            return view('ocs.healthcare', compact('chart','get','basicbiopsy','patient'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $get = array();
/*        $get = DB::table('mth_charts')
            ->where('mth_charts.id',$id)
            ->join('mth_diseases', 'mth_charts.chart_id', '=', 'mth_diseases.id')
            ->get();*/

        $basicbiopsy = MthBasicBiopsy::where('chart_id','=',$id)->get();

        /*$patient = DB::table('mth_charts')
            ->where('mth_charts.id',$id)
            ->join('mth_prescribes', 'mth_charts.chart_id', '=', 'mth_prescribes.id')
            ->get();*/

        $chart = DB::table('mth_charts')
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->where('basicbiopsy_flag','=',1)
            ->get();

        $patient = array();

        if(Sentinel::check())
            return view('ocs.healthcare', compact('chart','get','patient','basicbiopsy'));
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
        //
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
        //
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
