@extends('ocs/layouts/default')

@section('title')
    간호실
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

@stop

@section('content')
    <section class="content-header">
        <h1>간호실</h1>
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
                        <h4>환자 정보</h4>
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
                                <th>초/재진</th>
                                <th>입원기간</th>
                                <th>만성</th>
                                <th>산재</th>
                                <th>구분</th>
                                <th>적용</th>
                                <th>급여제한</th>
                                <th>임부</th>
                                <th>과세</th>
                                <th>공동</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1231</td>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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
                                    <h4>과거 이력</h4>
                                </a>
                            </div>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
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
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>t</td>
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
            <div class="col-lg-7">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>오더</h5>
                    </div>
                    <div class="panel-body">
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
                            <tbody>
                            <tr>
                                <td>특</td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel">
                    <div class="panel-heading">
                        <h5>수행이력</h5>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed thead-default">
                            <thead>
                            <tr>
                                <th>날짜</th>
                                <th>시간</th>
                                <th>내역</th>
                                <th><button class="btn btn-primary btn-sm pull-right"> + </button></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td colspan="2"><input type="text" class="form-control input-sm" placeholder="ex)입력내용"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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

@stop