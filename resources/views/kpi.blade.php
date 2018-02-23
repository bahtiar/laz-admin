@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row margin-top-row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Agents KPI</h3></div>

                <div class="panel-body">
                    <div class="subtitle">
                        Lihat KPI agen-agen anda di sini
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-row">
        <div class="col-lg-12 col-menu">
            <div class="col-blue">
                <div class="col-left">
                    Average respon time
                </div>
                <div class="col-right">
                    <h1 class="huruf-tebal">2 </h1> mins
                </div>
            </div>
            <div class="col-violet">
                <div class="col-left">
                    Average question answered/day
                </div>
                <div class="col-right">
                    <h4>12.000</h4>
                </div>
            </div>
            <div class="col-green">
                <div class="col-left">
                    Lv 1<br>
                    unanswered question
                </div>
                <div class="col-right">
                    <h4>1.200</h4>
                </div>
            </div>
            <div class="col-orange">
                <div class="col-left">
                    Lv 2<br>
                    unanswered question
                </div>
                <div class="col-right">
                    <h4>1.200</h4>
                </div>
            </div>
            <div class="col-red">
                <div class="col-left">
                    Lv 3<br>
                    unanswered question
                </div>
                <div class="col-right">
                    <h4>1.200</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="agen-list"><h5>Agents List</h5></div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive" id="tableContainer">
                        <table class="table" width="100%" class="scrollTable">
                            <thead class="fixedHeader">
                            <tr>
                                <th width="20%">Name</th>
                                <th width="20%">Avg response time</th>
                                <th width="20%">Avg question answered / day</th>
                                <th width="20%">joined on</th>
                                <th width="20%">Status</th>
                                <th width="10%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody class="scrollContent">
                                
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td width="20%" class="name">Andre Wilianto</td>
                                <td width="20%">1 min</td>
                                <td width="20%">750</td>
                                <td width="20%">12 Dec 2017</td>
                                <td width="20%"><i class="fa fa-circle circle-online"></i> Online</td>
                                <td width="10%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Agus heryanto</td>
                                <td>2 min</td>
                                <td>500</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-offline"></i> Offline</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Andi Winarto</td>
                                <td>2 min</td>
                                <td>750</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Budi Santoso</td>
                                <td>1.5 min</td>
                                <td>650</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Benny Gunawan</td>
                                <td>3 min</td>
                                <td>300</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Carlos</td>
                                <td>1 min</td>
                                <td>750</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Chelsea Isla</td>
                                <td>30 sec</td>
                                <td>1000</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Andre Wilianto</td>
                                <td>1 min</td>
                                <td>750</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Agus heryanto</td>
                                <td>2 min</td>
                                <td>500</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-offline"></i> Offline</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Andi Winarto</td>
                                <td>2 min</td>
                                <td>750</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Budi Santoso</td>
                                <td>1.5 min</td>
                                <td>650</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Benny Gunawan</td>
                                <td>3 min</td>
                                <td>300</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Carlos</td>
                                <td>1 min</td>
                                <td>750</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr data-href="{{ url('/kpi/detail/1') }}">
                                <td class="name">Chelsea Isla</td>
                                <td>30 sec</td>
                                <td>1000</td>
                                <td>12 Dec 2017</td>
                                <td><i class="fa fa-circle circle-online"></i> Online</td>
                                <td><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

