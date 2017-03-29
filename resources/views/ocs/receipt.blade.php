@extends('ocs/layouts/default')

@section('title')
    환자 접수
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

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

    <style>
        .butt{
            margin-right:20px;,
            text-align:center;
        }
    </style>
@stop


{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>접수실</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Program
                </a>
            </li>
        </ol>
    </section>
    <section class="content" ng-app="receipt" ng-controller="receiptCtrl">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="margin-bottom-10">
                            <table class="table table-border" style="font-size:12px;" id="table2">
                                <thead>
                                <tr>
                                    <th>이름</th>
                                    <th>생년월일</th>
                                    <th>성별</th>
                                    <th>혈액형</th>
                                    <th>예약일시</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($mth_patient as $p)
                                    <tr>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->birthday }}</td>
                                        <td>{{ $p->gender }}</td>
                                        <td>{{ $p->blood }}</td>
                                        <td>{{ $p->id_num }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No List</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <form role="form" method="POST" action="{{ route('insert/rc') }}" >
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="panel-title">신규접수</h4>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <tbody>
                                                <tr context="context1">
                                                    <td><input type="text" class="form-control input-sm" placeholder="수진자명" name="name" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="전화번호" name="phone" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="혈액형" name="blood" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="주민등록번호" name="id_num" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="내원사유" name="visit_memo" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="이메일" name="email" required></td>
                                                </tr>
                                                <tr context="context2">
                                                    <td><input type="text" class="form-control input-sm" placeholder="휴대전화" name="cellphone" required></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm" placeholder="생년월일" name="birthday" required>
                                                            <div class="input-group-addon">
                                                                양력
                                                                <input type="hidden" name="chk_solar" value="0">
                                                                <input type="checkbox" class="square-blue" name="chk_solar" value="1">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="성별" name="gender"></td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" placeholder="나이" name="age">
                                                    </td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="사업자등록번호" name="buss_num" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="사업장명칭" name="buss_nam" required></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control input-sm" placeholder="우편번호" name="postal_code" required id="sample6_postcode" onclick="sample6_execDaumPostcode()" onfocus="sample6_execDaumPostcode()"></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="주소" name="addr" required id="sample6_address"></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="상세주소" name="addr_detail" required id="sample6_address2"></td>
                                                    <td>
                                                        <select name="dis_id" class="form-control input-sm" required>
                                                            @foreach($dis_code as $d)
                                                                <option value="{{ $d->id }}">{{ $d->id }}.{{ $d->code_name }}</option>
                                                            @endforeach
                                                            <option></option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="미수금" readonly></td>
                                                    <td><input type="text" class="form-control input-sm" style="display:none;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6">
                                                        <textarea class="form-control" rows="2" name="memo" required></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6">
                                                        <label class="butt">
                                                            <input type="hidden" name="info_agg" value="0">
                                                            <input type="checkbox" name="info_agg" class="switch" data-on-color="info"
                                                                   data-off-color="primary" data-animate data-size="mini" value="1"><br>
                                                            정보동의여부

                                                        </label>
                                                        <label class="butt">
                                                            <input type="hidden" name="fregi" value="0">
                                                            <input type="checkbox" name="fregi" class="switch" data-on-color="info"
                                                                   data-off-color="primary" data-animate data-size="mini" value="1"><br>
                                                            가족등록여부
                                                        </label>
                                                        <label class="butt">
                                                            <input type="hidden" name="ereception" value="0">
                                                            <input type="checkbox" name="ereception" class="switch" data-on-color="info"
                                                                   data-off-color="primary" data-animate data-size="mini" value="1"><br>
                                                            응급여부
                                                        </label>
                                                        <label class="butt">
                                                            <input type="hidden" name="married" value="0">
                                                            <input type="checkbox" name="married" class="switch" data-on-color="info"
                                                                   data-off-color="primary" data-animate data-size="mini" value="1"><br>
                                                            기혼
                                                        </label>
                                                        <label class="butt">
                                                            <input type="hidden" name="pregnant" value="0">
                                                            <input type="checkbox" name="pregnant" class="switch" data-on-color="info"
                                                                   data-off-color="primary" data-animate data-size="mini" value="1"><br>
                                                            임신여부
                                                        </label>
                                                        <label class="butt">
                                                            <input type="hidden" name="foreigner" value="0">
                                                            <input type="checkbox" name="foreigner" class="switch" data-on-color="info"
                                                                   data-off-color="primary" data-animate data-size="mini" value="1"><br>
                                                            외국인
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4 class="panel-title">
                                            보험여부
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td><input type="text" class="form-control input-sm" placeholder="보험종류"></td>
                                                <td><select class="form-control input-sm" placeholder="사업자 명칭">
                                                        <option></option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control input-sm" placeholder="예외구분"></td>
                                                <td><input type="text" class="form-control input-sm" placeholder="사업장기호" required></td>
                                                <td><input type="text" class="form-control input-sm" placeholder="취득일자"></td>
                                                <td>
                                                    <select class="form-control input-sm" data-placeholder="자격구분">
                                                        @foreach($qul_code as $q)
                                                        <option value="{{ $q->id }}">{{ $q->id }}.{{ $q->code_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control input-sm" placeholder="증번호"></td>
                                                <td><input type="text" class="form-control input-sm" placeholder="유효기간"></td>
                                                <td><input type="text" class="form-control input-sm" placeholder="비고"></td>
                                                <td><input type="text" class="form-control input-sm" placeholder="피보험자 성명"></td>
                                                <td>
                                                    <select name="vet_id" class="form-control input-sm" required>
                                                         @foreach($vet_code as $v)
                                                             <option value="{{ $v->id }}">{{ $v->id }}.{{ $v->code_name }}</option>
                                                         @endforeach
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control input-sm" placeholder="보훈번호" name="vet_num"required></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h4 class="panel-title"> 진료/지원실 배정</h4>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="form-group col-lg-6">
                                            <input type="radio" class="line" name="hcselect" value="A" checked/>
                                            <label>진료실A
                                            </label>
                                            <input type="radio" class="line" name="hcselect" value="B"/>
                                            <label>진료실B
                                            </label>
                                            <input type="radio" class="line" name="hcselect" value="C"/>
                                            <label>진료실C
                                            </label>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="radio" class="line" name="hcselect" value="OA"/>
                                            <label>한방 진료실A
                                            </label>
                                            <input type="radio" class="line" name="hcselect" value="OB"/>
                                            <label>한방 진료실B
                                            </label>
                                            <input type="radio" class="line" name="hcselect" value="OC"/>
                                            <label>한방 진료실C
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary col-lg-12 font-size-40"><strong>작성완료</strong></button>
                    </div>
                </div>
            </form>
        </div>
        <ul id="context1" class="dropdown-menu">
            <li><a ng-click="edit()">Edit</a></li>
            <li><a ng-click="link()">Link</a></li>
            <li><a ng-click="delete()">Delete</a></li>
            <li><hr></li>
            <li><a ng-click="properties()">Properties</a></li>
        </ul>
        <ul id="context2" class="dropdown-menu">
            <li><a ng-click="edit()">Edit</a></li>
            <li class="divider"></li>
            <li><a ng-click="properties()">Properties</a></li>
        </ul>
    </section>

@stop


@section('footer_scripts')

{{--    <script src="js/rclick.js"></script>--}}

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('assets/js/mth/daum_address.js') }}" ></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>

@stop