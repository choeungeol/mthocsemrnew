@extends('ocs/layouts/default')

@section('title')
    기초검사
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/all.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>기초 검사</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Program
                </a>
            </li>
        </ol>
    </section>

<section class="content" ng-app="basicBiopsy" ng-controller="basicBiopsyCtrl">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="margin-bottom-10">
                        <table class="table table-condensed table-hover nowrap" id="example1" width="100%">
                            <thead>
                            <tr>
                                <th>차트번호</th>
                                <th>수진자명</th>
                                <th>생년월일</th>
                                <th>나이(만)</th>
                                <th>성별</th>
                                <th>혈액형</th>
                                <th>메모</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($chart as $c)
                                <tr>
                                    <td id="id"><a href="{{ route('show/bb',$c->id) }}">{{ $c->medical_chart }}</a></td>
                                    <td id="name">{{ $c->name }}</td>
                                    <td id="birthday">{{ $c->birthday }}</td>
                                    <td id="age">{{ $c->age }}</td>
                                    <td id="gender">{{ $c->gender }}</td>
                                    <td id="blood">{{ $c->blood }}</td>
                                    <td id="memo">{{ $c->memo }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No List</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="color-primary">수진자 정보</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            @forelse($get as $g)
                            <tr>
                                <th>차트번호</th>
                                <td><input type="text" class="form-control input-sm" readonly value="{{ $g->medical_chart }}"></td>
                                <th>수진자명</th>
                                <td><input type="text" class="form-control input-sm" readonly value="{{ $g->name }}"></td>
                                <th>생년월일</th>
                                <td><input type="text" class="form-control input-sm" readonly value="{{ $g->birthday }}"></td>
                                <th>성별</th>
                                <td><input type="text" class="form-control input-sm" readonly value="{{ $g->gender }}"></td>
                                <th>혈액형</th>
                                <td><input type="text" class="form-control input-sm" readonly value="{{ $g->blood }}"></td>
                            </tr>
                            <tr>
                                <th>메모</th>
                                <td colspan="9"><textarea class="form-control input-sm" rows="1" readonly ng-model="memo">{{ $g->memo }}</textarea></td>
                            </tr>
                            @empty
                                <tr>
                                    <th>차트번호</th>
                                    <td><input type="text" class="form-control input-sm" readonly></td>
                                    <th>수진자명</th>
                                    <td><input type="text" class="form-control input-sm" readonly></td>
                                    <th>생년월일</th>
                                    <td><input type="text" class="form-control input-sm" readonly></td>
                                    <th>성별</th>
                                    <td><input type="text" class="form-control input-sm" readonly></td>
                                    <th>혈액형</th>
                                    <td><input type="text" class="form-control input-sm" readonly></td>
                                </tr>
                                <tr>
                                    <th>메모</th>
                                    <td colspan="9"><textarea class="form-control input-sm" rows="1" readonly ng-model="memo"></textarea></td>
                                </tr>
                            @endforelse
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
        <form role="form" method="POST" action="{{ route('insert/bb') }}" class="row">
            {{ csrf_field() }}
            @forelse($get as $g)
            <input type="hidden" name="chart_id" value="{{ $g->id }}">
            @empty
            @endforelse
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 class="color-primary">기초 검사</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-condensed">
                                <tr>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">최저혈압</span>
                                            <input type="text" class="form-control input-sm" placeholder="mmHg" required name="minbp">
                                        </div>
                                    </td>
                                    <td> <div class="form-group input-group">
                                            <span class="input-group-addon">최고혈압</span>
                                            <input type="text" class="form-control input-sm" placeholder="mmHg" required name="maxbp">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">맥박</span>
                                            <input type="text" class="form-control input-sm" placeholder="bpm" required name="pb">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">체중</span>
                                            <input type="text" class="form-control input-sm" placeholder="kg" required name="weight">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon btn-default">체온</span>
                                            <input type="text" class="form-control input-sm" placeholder="℃" required name="temp">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">호흡수</span>
                                            <input type="text" class="form-control input-sm" placeholder="분당" required  name="brate">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">키</span>
                                            <input type="text" class="form-control input-sm" placeholder="Cm" required  name="height">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">당뇨</span>
                                            <input type="checkbox" name="my-checkbox" data-size="small" checked value="true">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                <button type="submit" class="btn btn-primary font-size-20" style="width:100%;"><strong>작성완료</strong></button>
                </div>
            </div>
        </form>
    </div>

</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    {{-- 라디오 체크박스 --}}
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>
@stop