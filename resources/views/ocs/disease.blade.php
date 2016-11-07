@extends('ocs/layouts/default')

@section('title')
    상병관리
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

@stop

@section('content')
    <section class="content-header">
        <h1>상병 관리</h1>
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
                        <div class="panel-title">
                            <h5 class="color-primary">상병관리</h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td><input type="text" class="form-control input-sm" placeholder="청구코드"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="시작일자"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="종료일자"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="한글상병명칭"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="영문상병명칭"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="진료과목"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="대체코드"></td>
                                <td><input type="text" class="form-control input-sm" placeholder="법정감염병"></td>
                                <td>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-primary-outline btn-sm" style="width:100%;">
                                            <input type="checkbox" name="example7">
                                            수술여부
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5 class="color-primary">상병코드 기록</h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table thead-default">
                            <thead>
                            <tr>
                                <th>상병코드</th><th>청구코드</th><th>시작일자</th><th>종료일자</th><th>한글상병명</th><th>영문상병명</th><th>수술여부</th><th>진료과목</th><th>대체코드</th><th>법정감염병</th>
                            </tr>
                            </thead>
                            <tr>
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