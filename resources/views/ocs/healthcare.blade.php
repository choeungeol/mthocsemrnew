@extends('ocs/layouts/default')

@section('title')
    진료실
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

@stop

@section('content')
    <section class="content-header">
        <h1>진료실</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Program
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>대기자 명단</h5>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-hover nowrap" width="100%">
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
                                    <td id="id"><a href="{{ route('show/hc',$c->id) }}">{{ $c->medical_chart }}</a></td>
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
        <div class="row">
            <div class="col-lg-7">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>신상정보</h5>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed thead-default">
                            <thead>
                            <tr>
                                <th>차트번호</th>
                                <th>수진자명</th>
                                <th>생년월일</th>
                                <th>나이(만)</th>
                                <th>성별</th>
                                <th>혈액형</th>
                                <th>만성</th>
                                <th>산재</th>
                                <th>구분</th>
                                <th>임부</th>
                                <th>입원기간</th>
                                <th>초재진</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($get as $g)
                            <tr>
                                <td>{{ $g->medical_chart }}</td>
                                <td>{{ $g->name }}</td>
                                <td>{{ $g->birthday }}</td>
                                <td>{{ $g->age }}</td>
                                <td>{{ $g->gender }}</td>
                                <td>{{ $g->blood }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">No List</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>기초검사</h5>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed thead-default">
                            <thead>
                            <tr>
                                <th>검사일</th>
                                <th>체온</th>
                                <th>최저혈압</th>
                                <th>최고혈압</th>
                                <th>맥박</th>
                                <th>키(cm)</th>
                                <th>체중(kg)</th>
                                <th>호흡수</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($basicbiopsy as $bb)
                                <tr>
                                    <td>{{ date('Y-m-d',strtotime($bb->updated_at)) }}</td>
                                    <td>{{ $bb->temperature }}</td>
                                    <td>{{ $bb->minimal_pressure }}</td>
                                    <td>{{ $bb->maximum_pressure }}</td>
                                    <td>{{ $bb->pulse }}</td>
                                    <td>{{ $bb->height }}</td>
                                    <td>{{ $bb->weight }}</td>
                                    <td>{{ $bb->breath }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No List</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="panel-title">
                                <a>
                                    <h5>과거 이력</h5>
                                </a>
                            </div>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table table-condensed thead-default">
                                    <thead>
                                    <tr>
                                        <th>사용자코드</th>
                                        <th>상병명칭</th>
                                        <th>특정기호</th>
                                        <th>주상병</th>
                                        <th>수술여부</th>
                                        <th>경과</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>124asd</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <table class="table table-condensed thead-default">
                                    <thead>
                                    <tr>
                                        <th>특</th>
                                        <th>코드</th>
                                        <th>코드명</th>
                                        <th>가격</th>
                                        <th>투여량</th>
                                        <th>횟수</th>
                                        <th>일수</th>
                                        <th>청구구분</th>
                                        <th>원내/외</th>
                                        <th>검체</th>
                                        <th>용법</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>124asd</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>진료-상병</h5>
                    </div>
                    <form action="{{ route('insert/d') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        @forelse($chart as $c)
                            <input type="hidden" name="chart_id" value="{{ $c->id }}" />
                        @empty
                        @endforelse
                    <div class="panel-body">
                        <table class="table table-condensed table2">
                            <thead>
                                <tr>
                                    <th>사용자코드</th>
                                    <th>상병명칭</th>
                                    <th>특정기호</th>
                                    <th>주상병</th>
                                    <th>수술여부</th>
                                    <th>경과</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($dis as  $d)
                                <tr>
                                    <td>{{ $d->user_code }}</td>
                                    <td>{{ $d->sname }}</td>
                                    <td>{{ $d->ssymbol }}</td>
                                    <td>{{ $d->msick }}</td>
                                    <td>{{ $d->ostatus }}</td>
                                    <td>{{ $d->goby }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"></td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>사용자코드</th>
                                <th>상병명칭</th>
                                <th>특정기호</th>
                                <th>주상병</th>
                                <th>수술여부</th>
                                <th>경과</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control input-sm" name="user_code" /> </td>
                                <td><input type="text" class="form-control input-sm" name="sname" /> </td>
                                <td><input type="text" class="form-control input-sm" name="ssymbol" /> </td>
                                <td><input type="text" class="form-control input-sm" name="msick" /> </td>
                                <td><input type="text" class="form-control input-sm" name="ostatus" /> </td>
                                <td><input type="text" class="form-control input-sm" name="goby" /> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-sm btn-primary">전체선택</a>
                        <button class="btn btn-sm btn-success" type="submit">등록</button>
                        <a class="btn btn-sm btn-danger">삭제</a>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>진료-처방</h5>
                    </div>
                    <form action="{{ route('insert/p') }}" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        @forelse($chart as $c)
                            <input type="hidden" name="chart_id" value="{{ $c->id }}" />
                        @empty
                        @endforelse
                    <div class="panel-body">
                        <table class="table table-condensed table2">
                            <thead>
                            <tr>
                                <th>특</th>
                                <th>코드</th>
                                <th>코드명</th>
                                <th>가격</th>
                                <th>투여량</th>
                                <th>횟수</th>
                                <th>일수</th>
                                <th>청구구분</th>
                                <th>원내/외</th>
                                <th>검체</th>
                                <th>용법</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($pre as  $p)
                                <tr>
                                    <td>{{ $p->teuk }}</td>
                                    <td>{{ $p->code }}</td>
                                    <td>{{ $p->code_name }}</td>
                                    <td>{{ $p->price }}</td>
                                    <td>{{ $p->dosage }}</td>
                                    <td>{{ $p->part }}</td>
                                    <td>{{ $p->pday }}</td>
                                    <td>{{ $p->cdvision }}</td>
                                    <td>{{ $p->iohospital }}</td>
                                    <td>{{ $p->cspecimen }}</td>
                                    <td>{{ $p->useage }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"></td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <table class="table table-condensed thead-default">
                            <thead>
                            <tr>
                                <th>특</th>
                                <th>코드</th>
                                <th>코드명</th>
                                <th>가격</th>
                                <th>투여량</th>
                                <th>횟수</th>
                                <th>일수</th>
                                <th>청구구분</th>
                                <th>원내/외</th>
                                <th>검체</th>
                                <th>용법</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tr>
                                <td><input type="text" class="form-control input-sm" name="teuk"> </td>
                                <td><input type="text" class="form-control input-sm" name="code"> </td>
                                <td><input type="text" class="form-control input-sm" name="code_name"> </td>
                                <td><input type="text" class="form-control input-sm" name="price"> </td>
                                <td><input type="text" class="form-control input-sm" name="dosage"> </td>
                                <td><input type="text" class="form-control input-sm" name="part"> </td>
                                <td><input type="text" class="form-control input-sm" name="pday"> </td>
                                <td><input type="text" class="form-control input-sm" name="cdvision"> </td>
                                <td><input type="text" class="form-control input-sm" name="iohospital"> </td>
                                <td><input type="text" class="form-control input-sm" name="cspecimen"> </td>
                                <td><input type="text" class="form-control input-sm" name="useage"> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-sm btn-primary">전체선택</button>
                        <button class="btn btn-sm btn-success">등록</button>
                        <button class="btn btn-sm btn-danger">삭제</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <ul class="list-group">
                        <li class="list-group-item font-size-18">
                            <div class="form-inline">
                                <span class="label label-primary">한방협진</span>
                                <select class="form-control input-sm">
                                    <option value="OA">협진실A</option>
                                    <option value="OB">협진실B</option>
                                    <option value="OC">협진실C</option>
                                </select>
                                <span class="label label-primary">의사명</span>
                                <select class="form-control input-sm margin-right-10">
                                    <option value="A">의사명A</option>
                                    <option value="B">의사명B</option>
                                    <option value="C">의사명C</option>
                                </select>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-info-outline btn-sm">
                                        <input type="checkbox" name="example1">
                                        입원여부
                                    </label>
                                    <label class="btn btn-info-outline btn-sm">
                                        <input type="checkbox" name="example2">
                                        촬영여부
                                    </label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary col-lg-12 font-size-20"><strong>작성완료</strong></button>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

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

@stop