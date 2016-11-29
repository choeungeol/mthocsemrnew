<?php

namespace App\Http\Controllers;

use App\Calctable;
use App\Worktype;
use Illuminate\Http\Request;
use Sentinel;
use Redirect;

use App\Http\Requests;

class HnlWorktypeController extends Controller
{
    public function index()
    {

        $worktypes = Worktype::all();
        $calctotal = Calctable::all();

        $test = array_sum(array(1));

        $days = array('월요일','화요일','수요일','목요일','금요일','토요일','일요일');
        $worknum = array('없음','매주','격주','월1회','월2회','월3회','월4회','월5회');
        $worktype = array('근무일','유급휴일','무급휴일','무급휴무일');

        $alpha = array('A','B','C','D','E','F','G','H','I','J');

        for($i=0; $i < count($alpha); $i++){
            $calc[] =  Calctable::where('type', '=', $alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]] = Worktype::where('type', '=', $alpha[$i])->get();
        }

        for($i=0; $i < count($alpha); $i++){
            $typename[$alpha[$i]][] = $calc[$i];
        }

        if(Sentinel::check())

            return view('hnl.basicinfo.worktype', compact('days','worknum','worktype','typename','calctotal'));

        else

            return Redirect::to('admin/signin')->with('error','You must be logged in!');

    }

    public function typeInsert(Request $request)
    {

        $type = $request->type;
        $workstart = array(

            0 => $request->work_start_time0,
            1 => $request->work_start_time1,
            2 => $request->work_start_time2,
            3 => $request->work_start_time3,
            4 => $request->work_start_time4,
            5 => $request->work_start_time5,
            6 => $request->work_start_time6

        );
        $workend = array(

            0 => $request->work_end_time0,
            1 => $request->work_end_time1,
            2 => $request->work_end_time2,
            3 => $request->work_end_time3,
            4 => $request->work_end_time4,
            5 => $request->work_end_time5,
            6 => $request->work_end_time6

        );
        $breaktime = array(

            0 => $request->break_time0,
            1 => $request->break_time1,
            2 => $request->break_time2,
            3 => $request->break_time3,
            4 => $request->break_time4,
            5 => $request->break_time5,
            6 => $request->break_time6

        );

        $worktype = array($request->worktype_0, $request->worktype_1, $request->worktype_2, $request->worktype_3, $request->worktype_4, $request->worktype_5, $request->worktype_6);

        $worknum = array($request->now_0, $request->now_1, $request->now_2, $request->now_3, $request->now_4, $request->now_5, $request->now_6);


        $workstart = str_replace(':','',$workstart);
        $workend = str_replace(':','',$workend);
        $breaktime = str_replace(':','',$breaktime);

        $scount = count($workstart);
        $ecount = count($workend);
        $bcount = count($breaktime);

        for($i=0; $i < $scount; $i++){
            if(in_array(null,$workstart)){
                $count1 = array_search(null,$workstart);
                array_splice($workstart,$count1,1,"0");
            }
        } // 시작 시간 입력값이 비어있으면 0

        for($i=0; $i < $ecount; $i++){
            if(in_array(null,$workend)){
                $count1 = array_search(null,$workend);
                array_splice($workend,$count1,1,"0");
            }
        } // 끝 시간 입력값이 비어있으면 0

        for($i=0; $i < $bcount; $i++){
            if(in_array(null,$breaktime)){
                $count1 = array_search(null,$breaktime);
                array_splice($breaktime,$count1,1,"0");
            }
        } // 휴게시간 입력값이 비어있으면 0
        // 1주 소정 근로시간
        $ONEWEEKWORKTIME = 4000;
        //계산
        for($i=0; $i < 7; ++$i){

                $weekwork[] = (integer)$workend[$i] - (integer)$workstart[$i];

                if($worknum[$i] === '매주'){

                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $basicwork[] = $weekwork[$i];



                        //8시간 초과시 연장근로 시간
                        if($totalwork[$i] > 800){
                            if($worktype[$i] === '무급휴무일'){
                                //연장근로시간
                                $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                                $extendwork[] = $extendwork[$i] * 1.5;
                            }else{
                                $extendwork[] = $totalwork[$i] - 800;
                                $extendwork[] = $extendwork[$i] * 1.5;
                            }
                        }else{
                              $extendwork[] = 0;
                        } //초과 근로시간 끝


                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nightwork[] = $nwork[$i] * 0.5;

                    }else{

                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;
/*                    if(count($extendwork) === 7){
                        $weekendovertime = array_slice($extendwork,5);
                    }*/

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }



                } elseif($worknum[$i] === '격주'){

                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $basicwork[] = $weekwork[$i] / 2;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){
                        if($worktype[$i] === '무급휴무일'){
                            //연장근로시간
                            $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                            $extendwork[] = $extendwork[$i] * 1.5;
                        }else{
                            $extendwork[] = $totalwork[$i] - 800;
                            $extendwork[] = $extendwork[$i] * 1.5;
                            $extendwork[] = $extendwork[$i] / 2;
                        }
                    }else{
                      $extendwork[] = 0;
                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nwork[] = $nwork[$i] * 0.5;
                        $nightwork[] = $nwork[$i] / 2;

                    }else{
                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;
                    /*                    if(count($extendwork) === 7){
                                            $weekendovertime = array_slice($extendwork,5);
                                        }*/

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '월1회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 1;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){
                        if($worktype[$i] === '무급휴무일'){
                            //연장근로시간
                            $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                            $extendwork[] = $extendwork[$i] * 1.5;
                        }else{
                            $extendwork[] = $totalwork[$i] - 800;
                            $extendwork[] = $extendwork[$i] * 1.5;
                            $extendwork[] = $extendwork[$i] * 1;
                            $extendwork[] = $extendwork[$i] / 4.345;

                        }
                    }else{
                        $extendwork[] = 0;
                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nwork[] = $nwork[$i] * 0.5;
                        $nwork[] = $nwork[$i] * 1;
                        $nightwork[] = $nwork[$i] / 4.345;

                    }else{
                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;
                    /* if(count($extendwork) === 7){
                       $weekendovertime = array_slice($extendwork,5);}*/

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }


                }elseif($worknum[$i] === '월2회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 2;
                    $basicwork[] = $bwork[$i] / 4.345;

                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){
                        if($worktype[$i] === '무급휴무일'){
                            //연장근로시간
                            $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                            $extendwork[] = $extendwork[$i] * 1.5;
                        }else{
                            $extendwork[] = $totalwork[$i] - 800;
                            $extendwork[] = $extendwork[$i] * 1.5;
                            $extendwork[] = $extendwork[$i] * 2;
                            $extendwork[] = $extendwork[$i] / 4.345;

                        }
                    }else{
                        $extendwork[] = 0;
                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nwork[] = $nwork[$i] * 0.5;
                        $nwork[] = $nwork[$i] * 2;
                        $nightwork[] = $nwork[$i] / 4.345;

                    }else{

                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '월3회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 3;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){
                        if($worktype[$i] === '무급휴무일'){
                            //연장근로시간
                            $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                            $extendwork[] = $extendwork[$i] * 1.5;
                        }else{
                            $extendwork[] = $totalwork[$i] - 800;
                            $extendwork[] = $extendwork[$i] * 1.5;
                            $extendwork[] = $extendwork[$i] * 3;
                            $extendwork[] = $extendwork[$i] / 4.345;

                        }
                    }else{
                        $extendwork[] = 0;
                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nwork[] = $nwork[$i] * 0.5;
                        $nwork[] = $nwork[$i] * 3;
                        $nightwork[] = $nwork[$i] / 4.345;

                    }else{

                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '월4회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 4;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){
                        if($worktype[$i] === '무급휴무일'){
                            //연장근로시간
                            $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                            $extendwork[] = $extendwork[$i] * 1.5;
                        }else{
                            $extendwork[] = $totalwork[$i] - 800;
                            $extendwork[] = $extendwork[$i] * 1.5;
                            $extendwork[] = $extendwork[$i] * 4;
                            $extendwork[] = $extendwork[$i] / 4.345;

                        }
                    }else{
                        $extendwork[] = 0;
                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nwork[] = $nwork[$i] * 0.5;
                        $nwork[] = $nwork[$i] * 4;
                        $nightwork[] = $nwork[$i] / 4.345;

                    }else{

                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '월5회'){
                    //실근로시간
                    $totalwork[] = $weekwork[$i] - (integer)$breaktime[$i];
                    //기본근로
                    $bwork[] = $totalwork[$i] * 5;
                    $basicwork[] = $bwork[$i] / 4.345;


                    //8시간 초과시 연장근로 시간
                    if($totalwork[$i] > 800){
                        if($worktype[$i] === '무급휴무일'){
                            //연장근로시간
                            $extendwork[] = $basicwork[$i] + $totalwork[$i]- $ONEWEEKWORKTIME;
                            $extendwork[] = $extendwork[$i] * 1.5;
                        }else{
                            $extendwork[] = $totalwork[$i] - 800;
                            $extendwork[] = $extendwork[$i] * 1.5;
                            $extendwork[] = $extendwork[$i] * 5;
                            $extendwork[] = $extendwork[$i] / 4.345;

                        }
                    }else{
                        $extendwork[] = 0;
                    } //초과 근로시간 끝

                    //야간 근로시간
                    $night = 2200;

                    if($workend[$i] > $night){

                        $nwork[] = (integer)$workend[$i] - $night;
                        $nwork[] = $nwork[$i] * 24;
                        $nwork[] = $nwork[$i] * 0.5;
                        $nwork[] = $nwork[$i] * 5;
                        $nightwork[] = $nwork[$i] / 4.345;

                    }else{
                        $nwork[] = 0;
                        $nightwork[] = 0;

                    } // 야간근로시간 끝

                    //휴일 근로시간
                    $finalweekend = 0;
                    if(count($basicwork) === 7){
                        $weekend = array_slice($basicwork,5);
                        $weekend = array_sum($weekend);
                        if($weekend > 1200){
                            $finalweekend = $weekend - 1200;
                            $weekend = 1200;
                        }else{
                            $finalweekend = 0;  //휴일연장근로시간
                            $weekend = $weekend;
                        }
                    }//휴일 근로시간 추출끝

                    //휴일 연장 근로시간
                    $weekendovertime = $finalweekend;

                    //휴일 야간 근로시간
                    $weekendnighttime[] = 0;
                    if(count($nightwork) === 7){
                        $weekendnighttime = array_slice($nightwork,5);
                    }

                }elseif($worknum[$i] === '없음'){

                    $breaktime[] = 0;
                    $nightwork[] = 0;
                    $extendwork[] = 0;
                    $basicwork[] = 0;

                }//근무횟수 if 끝

            //1주 소정 근로시간
            $weekworktime = array_sum($basicwork);

            if(count($basicwork) === 7){

                if($weekworktime > 4000){

                    $minusworktime = $weekworktime - 4000;
                    $weekworktime = 4000;
                }else{
                    $minusworktime = 0;
                    $weekworktime = $weekworktime;

                }//1주 소정근로시간이 40시간 기준 if
                //1일 소정 근로시간
                $onedayworktime = array_sum($basicwork) / count($basicwork);
                //1주 주휴시간
                $weekbreaktime = array_sum($breaktime);
                //1주 연장 근로시간
                $weekExtend = array_sum($extendwork);
                /* $minuswtime = $minusworktime;*/
                //1주 야간 근로시간
                $weeknightwork = array_slice($nightwork,0,5);
                $weeknightwork = array_sum($weeknightwork);
                //1주 휴일 근로시간
                $weekweekend = $weekend;
                //1주 휴일 연장시간
                $weekweekendover = $weekendovertime;
                //1주 휴일 야간시간
                $weekweekendnight = array_sum($weekendnighttime);

                //1달 소정 근로시간
                $totalWorkTime = $weekworktime * 4.345;
                $totalWorkTime = floor($totalWorkTime * 100) / 100;
                //1달 주휴시간
                $totalBreakTime = $weekbreaktime * 4.345;
                $totalBreakTime = floor($totalBreakTime * 100) / 100;
                //1달 연장시간
                $totalWeekExtend = $weekExtend * 4.345;
                $totalWeekExtend = floor($totalWeekExtend * 100) / 100;
                //1달 야간 근로시간
                $totalNightTime = $weeknightwork * 4.345;
                $totalNightTime = floor($totalNightTime * 100) / 100;
                //1달 휴일 근로시간
                $totalWeekendWorkTime = $weekweekend * 4.345;
                $totalWeekendWorkTime = floor($totalWeekendWorkTime * 100) / 100;
                //1달 휴일 초과 근로시간
                $totalWeekendOverTime = $weekweekendover * 4.345;
                $totalWeekendOverTime = floor($totalWeekendOverTime * 100) / 100;
                //1달 휴일 야간 근로시간
                $totalWeekendnightTime = $weekweekendnight * 4.345;
                $totalWeekendnightTime = floor($totalWeekendnightTime * 100) / 100;
                //월 연차시간

                $monthannualleave = $onedayworktime * 15;
                $monthannualleave = $monthannualleave / 12;
                $monthannualleave = floor($monthannualleave * 100) / 100;

                $total = $totalWorkTime + $totalBreakTime + $totalWeekExtend + $totalNightTime + $totalWeekendWorkTime + $totalWeekendOverTime + $totalWeekendnightTime + $monthannualleave;

            }//실근로시간 값이 전부 들어왔을때


        } //계산 for문 끝

        for($i=0; $i<7; $i++){
                $types = Worktype::where('type', '=', $type)->where('sortnum', '=', $i)->first();
                $types->type = $type;
                $types->worknum = $worknum[$i];
                $types->worktype = $worktype[$i];
                $types->sworktime = $workstart[$i];
                $types->eworktime = $workend[$i];
                $types->breaktime = $breaktime[$i];
                $types->save();
            }

            for($i=0; $i<7; $i++){
                $calcs = Calctable::where('type', '=', $type)->first();
                $calcs->mtotal = $totalWorkTime ;
                $calcs->mbreak = $totalBreakTime;
                $calcs->mover = $totalWeekExtend ;
                $calcs->mnight = $totalNightTime;
                $calcs->mwwork = $totalWeekendWorkTime;
                $calcs->mwover = $totalWeekendOverTime;
                $calcs->mwnight = $totalWeekendnightTime;
                $calcs->mwbt = $monthannualleave;
                $calcs->total = $total;
                $calcs->save();
            }

        return Redirect::to('hnl/basicinfo/worktype')->with('success');

    }

}
