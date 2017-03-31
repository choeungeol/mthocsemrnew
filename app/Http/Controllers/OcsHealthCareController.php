<?php

namespace App\Http\Controllers;

use App\MthBasicBiopsy;
use App\MthDisease;
use App\MthPrescribe;
use DB;
use Illuminate\Support\Facades\Lang;
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
        $dis = array();
        $pre = array();

        $basicbiopsy = array();

        $chart = DB::table('mth_charts')
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->where('basicbiopsy_flag','=',1)
            ->get();

        if(Sentinel::check())
            return view('ocs.healthcare', compact('chart','get','basicbiopsy','patient','dis','pre'));
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

    /*
     *
     * */

    public function insert_d(Request $request)
    {

        $chart_id = $request->get('chart_id');

        $diseases = new MthDisease([
            'chart_id' => $chart_id,
            'user_code' => $request->get('user_code'),
            'sname' => $request->get('sname'),
            'ssymbol' => $request->get('ssymbol'),
            'msick' => $request->get('msick'),
            'ostatus' => $request->get('ostatus'),
            'goby' => $request->get('goby'),
        ]);
        $diseases->save();


        if(Sentinel::check())
            return Redirect::route('hc')->with('success', Lang::get('groups/message.success.update'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function insert_p(Request $request)
    {

        $chart_id = $request->get('chart_id');

        $prescribes = new MthPrescribe([

            'chart_id' => $chart_id,
            'teuk' => $request->get('teuk'),
            'code' => $request->get('code'),
            'code_name' => $request->get('code_name'),
            'price' => $request->get('price'),
            'dosage' => $request->get('dosage'),
            'part' => $request->get('part'),
            'pday' => $request->get('pday'),
            'cdvision' => $request->get('cdvision'),
            'iohospital' => $request->get('iohospital'),
            'cspecimen' => $request->get('cspecimen'),
            'useage' => $request->get('useage'),

        ]);
        $prescribes->save();


        if(Sentinel::check())
            return Redirect::route('hc')->with('success', Lang::get('groups/message.success.update'));
        else
            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $dis = MthDisease::where('chart_id','=',$id)->get();
        $pre = MthPrescribe::where('chart_id','=',$id)->get();



        $get = DB::table('mth_charts')
            ->where('mth_charts.id', $id)
            ->where('basicbiopsy_flag','=',1)
            ->join('mth_patients', 'mth_charts.mth_patient_id', '=', 'mth_patients.id')
            ->get();

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
            return view('ocs.healthcare', compact('chart','get','patient','basicbiopsy','dis','pre'));
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
