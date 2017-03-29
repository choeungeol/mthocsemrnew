<?php

namespace App\Http\Controllers;

use App\MthChart;
use App\MthCode;
use App\MthCodeGroup;
use App\MthPatient;
use Dompdf\Exception;
use Illuminate\Support\Facades\Redirect;
use Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;

class OcsReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mth_patient = MthPatient::all();
        $mth_code = MthCode::all();
        $mth_code_group = MthCodeGroup::all();
        $dis_code = MthCode::where('mth_code_group_id','=',1)->get();
        $vet_code = MthCode::where('mth_code_group_id','=',8)->get();
        $qul_code = MthCode::where('mth_code_group_id','=',5)->get();


        if(Sentinel::check())
            return view('ocs.receipt', compact('mth_patient','mth_code','mth_code_group','dis_code','vet_code','qul_code'));
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


        $insert = new MthPatient([
            'name' => $request->get('name'),
            'id_num' => $request->get('id_num'),
            'birthday' => $request->get('birthday'),
            'visit_memo' => $request->get('visit_memo'),
            'chk_solar' => $request->get('chk_solar'),
            'buss_num' => $request->get('buss_num'),
            'buss_nam' => $request->get('buss_nam'),
            'phone' => $request->get('phone'),
            'cellphone' => $request->get('cellphone'),
            'email' => $request->get('email'),
            'dis_id' => $request->get('dis_id'),
            'info_agg' => $request->get('info_agg'),
            'foreigner' => $request->get('foreigner'),
            'married' => $request->get('married'),
            'chk_list' => 0,
            'chk_pager' => 0,
            'chk_email' => 0,
            'postal_code' => $request->get('postal_code'),
            'addr' => $request->get('addr'),
            'addr_detail' => $request->get('addr_detail'),
            'vet_id' => $request->get('vet_id'),
            'vet_num' => $request->get('vet_num'),
            'gender' => $request->get('gender'),
            'blood' => $request->get('blood'),
            'age' => $request->get('age'),
            'memo' => $request->get('memo'),
        ]);
        $insert->save();

        $patient_id  = $insert->id;

        $chart = new MthChart([

            'medical_chart' => 'C'.$patient_id,
            'mth_patient_id' => $patient_id,
            'health_select' => $request->get('hcselect'),
            'chk_pregnant' => $request->get('pregnant'),
            'reg_urgent' => $request->get('ereception'),
            'reg_family' => $request->get('fregi'),
        ]);
        $chart->save();


        if(Sentinel::check())
            return Redirect::to('ocs/rc');
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
        //
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
